
<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from preview.hasthemes.com/taj-preview/taj/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2025 07:06:51 GMT -->
<?php include("head.php"); ?>
<?php include('Admin/DB-Connect/Config.php'); ?>
<?php
//echo "ggf".$_SESSION['ADMIN-ID'];
if(($_SESSION['USER-ID'] != "" )||($_SESSION['ADMIN-ID'] != "")){
    //header("Location:scheme.php");
}else{
    header("Location:login.php");
}
?>
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
						<h2>Scheme</h2>
					</div>
				</div>
			</div>
		</div>
        <!-- Breadcrumbs Area End -->

        <!-- Shop Page Area Start -->
        <div class="shop-page-area">
            <div class="container">
                <div class="row">

                
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wishlist-right-area table-responsive">
                            
                            <div class="section-title">
                        <h2>SCHEME</h2>
                    </div> 
                            <table class="wish-list-table" style="margin-top: 50px;">
                                <thead>
                                    <tr>
                                        <th class="t-product-name">S.No</th>
                                        <th class="product-details-comment">Scheme</th>
                                        <th class="product-price-cart">Date</th>
                                        <th class="product-remove">Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                $i = 1;
                                
                                $sql_scheme = mysqli_query($db, "SELECT * FROM subscription_master WHERE user_id = '".$_SESSION['USER-ID']."'");
                                //echo  "1";
                                while($fetch_scheme = mysqli_fetch_array($sql_scheme)){
                                   
                                    ?>
                                    <tr>
                                        <td class="product-image">
                                            <?php echo $i; ?>
                                        </td>
                                        <td class="product-image">
                                            <?php echo $fetch_scheme['transaction_amount']; ?>
                                            
                                        </td>
                                        <td class="product-image">
                                                <?php echo  date("M, d Y", strtotime($fetch_scheme['transaction_date_time'])); ?>
                                        </td>
                                        <td class="product-remove">  Paid
                                            <!-- <a href="pay.php">
                                                <i class="fa fa-bell"></i>
                                            </a> -->
                                        </td>
                                    </tr>
                                    <?php

                               $i++; }
                                ?>
                                    
                                    
                                    <!-- <tr>
                                        <td class="product-image">
                                            <a href="#">
                                                <img src="img/product/3.jpg" alt="">
                                            </a>
                                        </td>
                                        <td class="product-details">
                                            <h4>Consequences</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                            <textarea placeholder="Please Enter Your Comment"></textarea>
                                        </td>
                                        <td class="product-cart">
                                            <div class="product-cart-details">
                                                <span>$ 200.00</span>
                                                <input type="number" value="1">
                                                <input type="submit" value="ADD TO CART">
                                            </div>
                                            <p>
                                                <a href="#">Edit</a>
                                            </p>
                                        </td>
                                        <td class="product-remove">
                                            <a href="#">
                                                <i class="fa fa-bell"></i>
                                            </a>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                        <div class="wishlist-bottom-link">
                            <!-- <a href="index.html">
                                <i class="fa fa-angle-double-left"></i>
                                Back
                            </a> -->
                            <div class="shopingcart-bottom-area wishlist-bottom-area pull-right">
                      
                                <a href="Pay.php" class="right-shoping-cart">Pay Subscription</a>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
        <!-- Shop Page Area End -->        
        <!-- Brand Area Start -->
        <div class="brand-area section-padding">
            
        </div>
        <!-- Brand Area End -->
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

<!-- Mirrored from preview.hasthemes.com/taj-preview/taj/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2025 07:06:51 GMT -->
</html>