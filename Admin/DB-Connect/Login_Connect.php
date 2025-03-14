<?php
session_start();
include('Config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    
    $user_email = $_POST['user_email'];
    $user_pass = md5($_POST['user_pass']);
   


    $sql = mysqli_query($db, "SELECT * FROM register WHERE user_email = '".$user_email."' AND user_status = '1'");
    $sql_user = mysqli_num_rows($sql);

//echo "SELECT * FROM register WHERE user_email = '".$user_email."' AND user_status = '1'"; 
    

   // echo $sql_user;

    if($sql_user == 1){

       //echo "0";

       // $sql = mysqli_query($db, "SELECT * FROM register WHERE user_email = '".$user_email."' AND user_num = '".$user_num."' AND user_status = '1'");
        $sql_data = mysqli_fetch_array($sql);

        if($user_pass == $sql_data['user_pass']){
            //echo "1";

            $_SESSION['USER-ID'] = $sql_data['user_id'];

            header("Location:../../login.php?LID=1");
            exit();
        }
        


        header("Location:../../login.php?LID=0");
        exit();
         
    }
    else if($sql_user==0){
        //echo "0";

        $sql_admin = mysqli_query($db, "SELECT * FROM admin WHERE email = '".$user_email."' AND status = '1'");
         $count_admin = mysqli_num_rows($sql_admin);

         if($count_admin == 1){

            //echo "0";
    
           // $sql = mysqli_query($db, "SELECT * FROM register WHERE user_email = '".$user_email."' AND user_num = '".$user_num."' AND user_status = '1'");
            $fetch_data = mysqli_fetch_array($sql_admin);
    
            if($user_pass == $fetch_data['password']){
                //echo "1";
    
               $_SESSION['ADMIN-ID'] = $fetch_data['id'];
               $_SESSION['ADMIN-ROLE'] = $fetch_data['role'];
    
                 header("Location:../../login.php?LID=1");
                 exit();
            }
            
    
    
            header("Location:../../login.php?LID=0");
            exit();
             
        }



    
        }
    else{


        header("Location:../../login.php?LID=0");
    }

    
    }
?>