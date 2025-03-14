<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from preview.hasthemes.com/taj-preview/taj/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2025 07:06:47 GMT -->
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
						<h2>Subscription</h2>
					</div>
				</div>
			</div>
		</div>
        <!-- Breadcrumbs Area End -->
		<!-- My Account Area Start -->
		<div class="my-account-area section-padding">
			<div class="container">
				<div class="section-title2">
					<h2>Subscription</h2>
					<p>Welcome to your account. Here you can manage all of your personal Subscription.</p>
				</div>
				<div class="row">
					<div class="addresses-lists">
						<div class="col-xs-12 col-sm-6 col-lg-6">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												<i class="fa fa-building"></i>
											   <span>Add Subscription</span>
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body">
											<div class="coupon-info">
												<h1 class="heading-title">Your Subscription </h1>
												<!-- <p class="coupon-text">To add a new address, please fill out the form below.</p> -->
												<p class="required">*Required field</p>
												<form action="#">

                                                <?php
                                                $upi_id = "harisudhan7562@okicici"; // Replace with your actual UPI ID
                                                 $amount = isset($_GET['amount']) ? $_GET['amount'] : "1"; // Default ₹1
                                                 $payee_name = "HARIHARASUDHAN"; // Replace with your name
                                                 $note = "Payment"; // Transaction note
                                                  $currency = "INR";

                                                 // Correct UPI Payment URL with encoding
                                                  $upi_url = "upi://pay?pa=" . urlencode($upi_id) . 
                                                 "&pn=" . urlencode($payee_name) . 
                                                 "&am=" . urlencode($amount) . 
                                                 "&cu=" . urlencode($currency) . 
                                                 "&tn=" . urlencode($note);

                                                // Generate QR Code using API
                                                  $qr_code_url = "https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=" . urlencode($upi_url);
                                                 ?>
													
													<div class="shop-select">
														<label>Scheme <span class="required">*</span></label>
														<select id="amount">
														    <option value="">-- Select Amount --</option>
															<option value="1000">1000</option>
															<option value="1500">1500</option>
															<option value="2000">2000</option>
															<option value="2500">2500</option>
															<option value="3000">3000</option>
															<option value="3500">3500</option>
															<option value="4000">4000</option>
															<option value="4500">4500</option>
                                                            <option value="5000">5000</option>
														</select> 										
													</div>	
													<p class="form-row">
													<label>Transaction ID<span class="required">*</span></label>
													<input hidden type="text"  id="user_id" name="user_id" value="<?php echo $_SESSION['USER-ID']; ?>">
													<input type="text" id="transaction_id" placeholder="Enter Transaction ID">
													
                                                    </p>
													<p class="form-row">
                                                    <label>Scan To Pay<span class="required">*</span></label>
                                                    <!-- <img src="img/pay.jpeg" alt="Scan To Pay" style="
                                                    height: 500px; width:400px;" > -->
                                                    <p>Amount: <span id="selected-amount">0</span></p>
													<a href="#" id="upi-link" target="_blank" >
                                                    <img id="qr-code" src="" alt="QR Code" style="display:none;">
													</a>
													</p>

													<button class="btn btn-default button button-small" onclick="submitTransaction()"><span>
													Submit
															<i class="fa fa-chevron-right"></i>
														</span></button>
													<!-- <a title="Save" class="btn btn-default button button-small" href="index.html">
														<span>
															  Save
															<i class="fa fa-chevron-right"></i>
														</span>
													</a> -->
												</form>
											</div>											
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-6">
							<div class="myaccount-link-list">								
								
								
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-md-12">
						<div class="create-account-button pull-left">
							<a href="index.html" class="btn btn-default button button-small" title="Home">
								<span>
									<i class="fa fa-chevron-left"></i>
									  Home
								</span>
							</a>
						</div>
					</div>
				</div> -->
			</div>
		</div>
		<!-- My Account Area End -->
        <!-- Footer Area Start -->
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
				document.getElementById("upi-link").href = upiURL;
                document.getElementById("selected-amount").textContent = amount;
            } else {
                document.getElementById("qr-code").style.display = "none";
                document.getElementById("selected-amount").textContent = "0";
            }
        });

        function submitTransaction() {
            var transactionId = document.getElementById("transaction_id").value;
			var userId = document.getElementById("user_id").value;
            var amount = document.getElementById("selected-amount").textContent;

            if (transactionId && amount != "0") {
                // Send data to the backend via Fetch API
                fetch("Admin/DB-Connect/verify_transaction.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: `transaction_id=${transactionId}&amount=${amount}&user_id=${userId}`
                })
                .then(response => response.text())
                .then(data => alert(data)) // Show response message
                .catch(error => console.error("Error:", error));

				window.location.href="scheme.php"
            } else {
                alert("Please enter a Transaction ID.");
            }
        }
    </script>


		<!-- <script>
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
    </script> -->
    </body>

<!-- Mirrored from preview.hasthemes.com/taj-preview/taj/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2025 07:06:47 GMT -->
</html>