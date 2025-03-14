<?php
error_reporting(0);
?>
<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from preview.hasthemes.com/taj-preview/taj/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2025 07:06:38 GMT -->
<?php include("head.php"); ?>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--Header Area Start-->
        <?php include("header.php"); ?>
        <!--Header Area End-->
        <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Login / Create An Account</h2>
					</div>
				</div>
			</div>
		</div>
        <!-- Breadcrumbs Area End -->
<div class="container">
        <?php

        // echo $_SESSION['USER-ID'];
       // $UID = $_REQUEST['UID'];
        $SID = $_REQUEST['SID'];

        $LID = $_REQUEST['LID'];

        if($SID == '1'){
            ?>
            <div class="alert alert-success" style="margin-top: 50px;" >Registered Successfully</div>
            <?php
        }else if($SID == '0'){
            ?>
            <div class="alert alert-danger" style="margin-top: 50px;">Registered Failed</div>
            <?php
        }
        
        if($LID == '1'){
            ?>
            <div class="alert alert-success" style="margin-top: 50px;" >Login Successfully</div>
            <?php
        }else if($LID == '0'){
            ?>
            <div class="alert alert-danger" style="margin-top: 50px;">Login Failed</div>
            <?php
        }

        //echo $UID.$SID;
        ?>
        </div>
		<!-- Login Account Area Start -->
		<div class="login-account-area section-padding ">

           <?php
           
           ?>

			<div class="container">
				<div class="row">
					<div class="account-details">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<form method="post" class="create-account-form" action="Admin/DB-Connect/Register_Connect.php">
								<h1 class="heading-title">Create an account</h1>
								<p class="form-row">
                                     <label>Name</label>
                                     <input type="text" name="user_name" id="user_name">
                                </p>
                                <p class="form-row">
                                     <label>Phone</label>
                                     <input type="text" name="user_num" id="user_num">
                                </p>
                                <p class="form-row">
                                     <label>Email</label>
                                     <input type="email" name="user_email" id="user_email">
                                </p>
                                <p class="form-row">
                                     <label>Password</label>
									 <input type="Password" name="user_pass" id="user_pass">
                                   
								</p>	
								<div class="submit">					
									<button name="submitcreate" id="submitcreate" type="submit" class="">
										<span>
											<i class="fa fa-user left"></i>
											Create an account
										</span>
									</button>
								</div>		
							</form>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<form method="post" class="login-form" action="Admin/DB-Connect/Login_Connect.php">
								<h1 class="heading-title">Already registered?</h1>
								<p class="form-row">
                                     <label>Email</label>
                                     <input type="email" name="user_email" id="user_email">
                                </p>
                                <p class="form-row">
                                     <label>Password</label>
									 <input type="Password" name="user_pass" id="user_pass"> 
								</p>	
								<p class="lost-password form-group"><a rel="nofollow" href="#">Forgot your password?</a></p>
								<div class="submit">					
									<button name="submitcreate2" id="submitcreate2" type="submit" class="">
										<span><i class="fa fa-lock"></i>Sign In</span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Login Account Area End -->
        <!-- Footer Area Start -->
       
        <!-- Footer Area End -->
        <!-- Footer Bottom Area -->
        <?php include("footer.php"); ?>
        <!-- Footer Bottom End -->
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
		<!-- jquery countdown js -->
        <script src="js/jquery.countdown.min.js"></script>
		<!-- jquery countdown js -->
        <script type="text/javascript" src="venobox/venobox.min.js"></script>
		<!-- jquery Meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>
		<!-- scrollUp JS -->		
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- Nivo slider js -->
		<script src="lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="lib/home.js" type="text/javascript"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from preview.hasthemes.com/taj-preview/taj/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2025 07:06:38 GMT -->
</html>