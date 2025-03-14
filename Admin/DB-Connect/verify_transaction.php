<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $transaction_id = $_POST['transaction_id'];
    $amount = $_POST['amount'];
    $user_id = $_POST['user_id'];

    // 🛠️ Connect to database
    $conn = new mysqli("localhost", "root", "", "jewellery_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // 🛠️ Check if transaction ID already exists (avoid duplicates)
    $sql_check = "SELECT * FROM transactions WHERE transaction_id = '$transaction_id'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        echo "❌ Transaction ID already exists!";
    } else {
        // 🛠️ Insert transaction into database
        $sql_insert = "INSERT INTO transactions (transaction_id, amount) VALUES ('$transaction_id', '$amount')";
        if ($conn->query($sql_insert) === TRUE) {

            
    

            echo "✅ Payment verified & saved successfully!";

            $insert_id =  mysqli_insert_id($conn);

          

            $insert = mysqli_query($conn, "INSERT INTO subscription_master 
            (
            user_id,
            transaction_master_id,
            transaction_amount,
            subscription_status
            )
            VALUES
            (
    
            '".$user_id."',
            '".$insert_id."',
            '".$amount."',
            '1'
    
    
    
        )");

        header("Location:../../Scheme.php?SID=1");
        } else {
            echo "❌ Error: " . $conn->error;
        }
    }

    $conn->close();
}
?>
