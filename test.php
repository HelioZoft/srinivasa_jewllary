<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Dynamic QR Code Generator</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Select Amount</h2>
    <select id="amount">
        <option value="">-- Select Amount --</option>
        <option value="10">₹10</option>
        <option value="50">₹50</option>
        <option value="100">₹100</option>
        <option value="500">₹500</option>
    </select>

    <br><br>
    <h2>Scan to Pay</h2>
    <img id="qr-code" src="" alt="QR Code" style="display:none;">

    <script>
        $(document).ready(function(){
            $("#amount").change(function(){
                var amount = $(this).val();
                if(amount){
                    $.ajax({
                        url: "payment_qr.php",
                        type: "GET",
                        data: { amount: amount },
                        success: function(response){
                            $("#qr-code").attr("src", response).show();
                        }
                    });
                } else {
                    $("#qr-code").hide();
                }
            });
        });
    </script>
</body>
</html> -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Dynamic UPI QR Code</title>
</head>
<body>
    <h2>Select Amount</h2>
    <select id="amount">
        <option value="">-- Select Amount --</option>
        <option value="10">₹10</option>
        <option value="50">₹50</option>
        <option value="100">₹100</option>
        <option value="500">₹500</option>
    </select>

    <br><br>
    <h2>Scan to Pay</h2>
    <p>Amount: <span id="selected-amount">0</span></p>
    <img id="qr-code" src="" alt="QR Code" style="display:none;">

    <script>
        document.getElementById("amount").addEventListener("change", function(){
            var amount = this.value;
            if(amount) {
                var upiID = "harisudhan7562@okicici"; // Replace with your actual UPI ID
                var payeeName = "HARIHARASUDHAN"; // Replace with your name
                var note = "Payment for Order";
                var currency = "INR";

                // Generate the UPI payment link
                var upiURL = `upi://pay?pa=${upiID}&pn=${payeeName}&mc=0000&tid=1234567890&tr=1234567890&tn=${note}&am=${amount}&cu=${currency}`;

                // Generate QR Code URL
                var qrCodeURL = `https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=${encodeURIComponent(upiURL)}`;

                // Update the QR code image
                document.getElementById("qr-code").src = qrCodeURL;
                document.getElementById("qr-code").style.display = "block";
                document.getElementById("selected-amount").textContent = amount;
            } else {
                document.getElementById("qr-code").style.display = "none";
                document.getElementById("selected-amount").textContent = "0";
            }
        });
    </script>
</body>
</html> -->










<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manual Transaction Entry</title>
</head>
<body>
    <h2>Select Amount</h2>
    <select id="amount">
        <option value="">-- Select Amount --</option>
        <option value="10">₹10</option>
        <option value="50">₹50</option>
        <option value="100">₹100</option>
        <option value="500">₹500</option>
    </select>

    <h2>Scan to Pay</h2>
    <p>Amount: <span id="selected-amount">0</span></p>
    <img id="qr-code" src="" alt="QR Code" style="display:none;">

    <h2>Enter Transaction ID</h2>
    <input type="text" id="transaction-id" placeholder="Enter Transaction ID">
    <button onclick="submitTransaction()">Submit</button>

    <script>
        document.getElementById("amount").addEventListener("change", function(){
            var amount = this.value;
            if(amount) {
                var upiID = "harisudhan7562@okicici"; // Replace with your actual UPI ID
                var payeeName = "HARIHARASUDHAN"; // Replace with your name
                var note = "Payment for Order";
                var currency = "INR";

                var upiURL = `upi://pay?pa=${upiID}&pn=${payeeName}&tn=${note}&am=${amount}&cu=${currency}`;
                var qrCodeURL = `https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=${encodeURIComponent(upiURL)}`;

                document.getElementById("qr-code").src = qrCodeURL;
                document.getElementById("qr-code").style.display = "block";
                document.getElementById("selected-amount").textContent = amount;
            } else {
                document.getElementById("qr-code").style.display = "none";
                document.getElementById("selected-amount").textContent = "0";
            }
        });

        function submitTransaction() {
            var transactionId = document.getElementById("transaction-id").value;
            var amount = document.getElementById("selected-amount").textContent;

            if (transactionId && amount != "0") {
                // Send data to the backend via Fetch API
                fetch("Admin/DB-Connect/verify_transaction.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: `transaction_id=${transactionId}&amount=${amount}`
                })
                .then(response => response.text())
                .then(data => alert(data)) // Show response message
                .catch(error => console.error("Error:", error));
            } else {
                alert("Please enter a Transaction ID.");
            }
        }
    </script>
</body>
</html>
