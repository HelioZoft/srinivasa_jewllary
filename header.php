 <!--Header Area Start-->
 <?php
 $user_id=$_SESSION['USER-ID'];
 $admin_id = $_SESSION['ADMIN-ID'];
 ?>
 <header>
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 hidden-xs">
                            <div class="header-top-message pull-left">
                                <span><i class="fa fa-envelope"></i>demo@example.com</span>
                                <span><i class="fa fa-phone"></i>0123456789</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="header-top-menu pull-right">
                                <ul class="nav-menu">
                                    <li><a href="login.php">LOGIN</a></li>
                                    <li><a href="logout.php">LOGOUT</a></li>
                                    <!-- <li><a href="#">LANGLUAGE</a>
                                        <div class="ht-menu-down">
                                            <ul>
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">Spansih</a></li>
                                                <li><a href="#">Garmany</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#">CURRENCY</a>
                                        <div class="ht-menu-down">
                                            <ul>
                                                <li><a href="#">EUR</a></li>
                                                <li><a href="#">USD</a></li>
                                            </ul>
                                        </div>                                        
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-6">
                            <div class="header-logo">
                                <a href="index.php">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-9 hidden-xs">
                            <div class="mainmenu text-center">
                                <nav>
                                    <ul id="nav">
                                        <li><a href="index.php">HOME</a></li>
                                        <li><a href="shop.php">SHOP</a></li>
                                        <!-- <li><a href="shop.php">MEN</a></li>
                                        <li><a href="shop.php">WOMEN</a></li>
                                        <li><a href="shop.php">COLLECTION</a></li> -->
                                        <li><a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="404.php">404 Page</a></li>
                                                <li><a href="about.php">About Us</a></li>
                                                <li><a href="cart.php">Cart Page</a></li>
                                                <li><a href="checkout.php">Check Out</a></li>
                                                <li><a href="contact-us.php">Contact</a></li>
                                                <li><a href="login.php">Login</a></li>
                                                <li><a href="my-account.php">My Account</a></li>
                                                <li><a href="shop.php">Shopping Page</a></li>
                                                <li><a href="single-product.php">Single Shop Page</a></li>
                                                <li><a href="wishlist.php">Wishlist Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact-us.php">CONTACT</a></li>
                                        <?php
                                        if($user_id != "" || $admin_id != ""){
                                            ?>
                                            <li><a href="scheme.php">SCHEME</a></li>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if($admin_id != ""){
                                            ?>
                                           <li><a href="#">ADMIN</a>
                                              <ul class="sub-menu">
											    <li><a href="scheme_master.php">Scheme Master</a></li>
											    <li><a href="subscription_master">Subscription Master</a></li>
										      </ul>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-6">
                            <div class="header-cart pull-right">
                                <ul>
                                    <li>
                                       <a class="header-cart-link" href="#">
                                           <i class="flaticon-bag"></i>
                                            <span>2</span>                                   
                                       </a> 
                                       <div class="cart_down_area">
                                           <div class="cart_single">
                                               <a href="#">
                                                   <img src="img/product/c-1.jpg" alt="">
                                               </a>
                                               <h2>
                                                   <a href="#">Pellentesque hendrerit</a>
                                                   <a href="#">
                                                       <span><i class="fa fa-trash"></i></span>
                                                   </a>
                                               </h2>
                                               <p>1 x $222.00</p>
                                           </div>
                                           <div class="cart_single">
                                               <a href="#">
                                                   <img src="img/product/c-2.jpg" alt="">
                                               </a>
                                               <h2>
                                                   <a href="#">Pellentesque hendrerit</a>
                                                   <a href="#">
                                                       <span><i class="fa fa-trash"></i></span>
                                                   </a>
                                               </h2>
                                               <p>1 x $222.00</p>
                                           </div>
                                           <div class="cart_shoptings">
                                               <a href="checkout.php">Checkout</a>
                                           </div>
                                       </div>                                     
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </header>
        <!--Header Area End-->
		<!-- Mobile Menu Start -->
		<div class="mobile-menu-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="mobile-menu">
							<nav id="dropdown">
								<ul>
									<li><a href="index.php">Home</a></li>
                                    <li><a href="shop.php">SHOP</a></li>
                                    <!-- <li><a href="shop.php">MEN</a></li>
                                    <li><a href="shop.php">WOMEN</a></li>
                                    <li><a href="shop.php">COLLECTION</a></li> -->
									<li><a href="#">Pages</a>
										<ul>
											<li><a href="404.php">404 Page</a></li>
											<li><a href="about-us.php">About Us</a></li>
											<li><a href="cart.php">Cart Page</a></li>
											<li><a href="checkout.php">Checkout Page</a></li>
											<li><a href="contact.php">Contact Page</a></li>
											<li><a href="login.php">Login</a></li>
											<li><a href="my-account.php">My Account</a></li>
											<li><a href="shop.php">Shop Page</a></li>
											<li><a href="wishlist.php">Wishlist</a></li>
										</ul>
									</li>
                                    <li><a href="contact-us.php">CONTACT</a></li>
                                    <?php
                                        if($user_id != "" || $admin_id != ""){
                                            ?>
                                            <li><a href="scheme.php">SCHEME</a></li>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if($admin_id != ""){
                                            ?>
                                            <li><a href="#">ADMIN</a>
                                              <ul>
                                              <li><a href="scheme_master.php">Scheme Master</a></li>
                                              <li><a href="subscription_master">Subscription Master</a></li>
										      </ul>
                                            </li>
                                            <?php
                                        }
                                        ?>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>		
		<!-- Mobile Menu End -->