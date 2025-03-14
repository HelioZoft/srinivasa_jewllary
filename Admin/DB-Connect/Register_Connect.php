<?php
include('Config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user_name = $_POST['user_name'];
    $user_num = $_POST['user_num'];
    $user_email = $_POST['user_email'];
    $user_pass = md5($_POST['user_pass']);
    $user_status = "1";


    $sql = mysqli_query($db, "SELECT * FROM register WHERE user_email = '".$user_email."' AND user_num = '".$user_num."' AND user_status = '1'");
    $sql_user = mysqli_num_rows($sql);

    

    

    // if($sql_data['user_id'] != ""){
    //    echo $user_id = $sql_data['user_id'];
    // }
    

    if($sql_user < 1){

        // $sql = mysqli_query($db, "SELECT * FROM register WHERE user_email = '".$user_email."' AND user_num = '".$user_num."' AND user_status = '1'");
        // $sql_data = mysqli_fetch_array($sql);
        

       

        $insert = mysqli_query($db, "INSERT INTO register 
        (
        user_name,
        user_num,
        user_email,
        user_pass,
        user_status
        )
        VALUES
        (

        '".$user_name."',
        '".$user_num."',
        '".$user_email."',
        '".$user_pass."',
        '".$user_status."'



    )");

    // $insert_id = mysqli_insert_id($db);

    // if($insert_id != ""){
    //     $user_id = $insert_id;

    // }
    // else{
    //    echo $user_id = $sql_data['user_id'];
    // }

         header("Location:../../login.php?SID=1");
    }
    else{


        header("Location:../../login.php?SID=0");
    }

    
    }
?>