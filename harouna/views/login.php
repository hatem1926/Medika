
<?php
session_start();
include"conn.php";
//$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ? ");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         if($userinfo['confirmer']==1){

      $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
        

       
           header("Location: profil.php?id=".$_SESSION['id']);      

         }else{ $erreur = " veuillez activez votre compte!"; }

         
      
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }

     
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>






<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Venedor - Responsive eCommerce Template</title>
        <meta name="description" content="Responsive modern ecommerce Html5 Template">
        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href='//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic%7CPT+Gudea:400,700,400italic%7CPT+Oswald:400,700,300' rel='stylesheet' id="googlefont">
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/prettyPhoto.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        
        <!-- Favicon and Apple Icons -->
        <link rel="icon" type="image/png" href="images/icons/icon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-icon-72x72.png">
        
        <!--- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js"><\/script>')</script>

		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	    
		<style id="custom-style">
		
		</style>
    </head>
    <body>
    <div id="wrapper">
    	<header id="header">
    		<div id="header-top">
    			<div class="container">
    				<div class="row">
                        <div class="col-md-12">
        					<div class="header-top-left">
        						
        					</div><!-- End .header-top-left -->
        					<div class="header-top-right">
        						
        						<div class="header-top-dropdowns pull-right">
    								<div class="btn-group dropdown-money">
    									<button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
    										
    									</button>
    									
    								</div><!-- End .btn-group -->
    								<div class="btn-group dropdown-language">
    									<button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
    										
    									</button>
    									
    								</div><!-- End .btn-group -->
    							</div><!-- End .header-top-dropdowns -->
    							
    							<div class="header-text-container pull-right">
    								<p class="header-text">bBienvenue a STE</p>
        							<p class="header-link"><a href="login.php">se connecter</a>&nbsp;or&nbsp;<a href="register.php">créer un compte</a></p>
    							</div><!-- End .pull-right -->
    						</div><!-- End .header-top-right -->
    					</div><!-- End .col-md-12 -->
    				</div><!-- End .row -->
    			</div><!-- End .container -->
    		</div><!-- End #header-top -->
    		
    		<div id="inner-header">
    			<div class="container">
    				<div class="row">
						<div class="col-md-5 col-sm-5 col-xs-12 logo-container">
							<h1 class="logo clearfix">
								
								<a href="index.html" title="Venedor eCommerce Template"><img src="images/logo.PNG" alt="Venedor Commerce Template" width="238" height="76"></a>
							</h1>
						</div><!-- End .col-md-5 -->
    					<div class="col-md-7 col-sm-7 col-xs-12 header-inner-right">
    							
    							<div class="header-box contact-infos pull-right">
    								<ul>
    									<li><span class="header-box-icon header-box-icon-skype"></span>venedor_support</li>
    									<li><span class="header-box-icon header-box-icon-email"></span><a href="mailto:venedor@gmail.com">venedor@gmail.com</a></li>
    								</ul>
    							</div><!-- End .contact-infos -->
    							
    							<div class="header-box contact-phones pull-right clearfix">
    								<span class="header-box-icon header-box-icon-earphones"></span>
    								<ul class="pull-left">
    									<li>+(404) 158 14 25 78</li>
    									<li>+(404) 851 21 48 15</li>
    								</ul>
    							</div><!-- End .contact-phones -->
    							
    					</div><!-- End .col-md-7 -->
    				</div><!-- End .row -->
    			</div><!-- End .container -->
    			
    			<div id="main-nav-container">
    				<div class="container">
    					<div class="row">
    						<div class="col-md-12 clearfix">
    							
    							<nav id="main-nav">
    								<div id="responsive-nav">
    									<div id="responsive-nav-button">
											Menu <span id="responsive-nav-button-icon"></span>
										</div><!-- responsive-nav-button -->
    								</div>
    								<ul class="menu clearfix">
    									<li>
											<a class="active" href="index.html">HOME</a>
											
										</li>
										<li class="mega-menu-container"><a href="#">SHOP</a>
											<div class="mega-menu clearfix">
													<div class="col-5">
														<a href="category.html" class="mega-menu-title">Clothing</a><!-- End .mega-menu-title -->
														<ul class="mega-menu-list clearfix">
															<li><a href="#">Dresses</a></li>
															<li><a href="#">Jeans &amp; Trousers</a></li>
															<li><a href="#">Blouses &amp; Shirts</a></li>
															<li><a href="#">Tops &amp; T-Shirts</a></li>
															<li><a href="#">Jackets &amp; Coats</a></li>
															<li><a href="#">Skirts</a></li>
														</ul>
													</div><!-- End .col-5 -->
													<div class="col-5">
														<a href="category.html" class="mega-menu-title">Shoes</a><!-- End .mega-menu-title -->
														<ul class="mega-menu-list clearfix">
															<li><a href="#">Formal Shoes</a></li>
															<li><a href="#">Casual Shoes</a></li>
															<li><a href="#">Sandals</a></li>
															<li><a href="#">Boots</a></li>
															<li><a href="#">Wide Fit</a></li>
															<li><a href="#">Slippers</a></li>
														</ul>
													</div><!-- End .col-5 -->
													<div class="col-5">
														<a href="category.html" class="mega-menu-title">Accessories</a><!-- End .mega-menu-title -->
														<ul class="mega-menu-list clearfix">
															<li><a href="#">Bags &amp; Purses</a></li>
															<li><a href="#">Belts</a></li>
															<li><a href="#">Gloves</a></li>
															<li><a href="#">Jewellery</a></li>
															<li><a href="#">Sunglasses</a></li>
															<li><a href="#">Hair Accessories</a></li>
														</ul>
													</div><!-- End .col-5 -->
													<div class="col-5">
														<a href="category.html" class="mega-menu-title">Sports</a><!-- End .mega-menu-title -->
														<ul class="mega-menu-list clearfix">
															<li><a href="#">Sport Tops &amp; Vests</a></li>
															<li><a href="#">Swimwear</a></li>
															<li><a href="#">Footwear</a></li>
															<li><a href="#">Sports Underwear</a></li>
															<li><a href="#">Bags</a></li>
														</ul>
													</div><!-- End .col-5 -->
													
													<div class="col-5">
														<a href="category.html" class="mega-menu-title">Maternity</a><!-- End .mega-menu-title -->
														<ul class="mega-menu-list clearfix">
															<li><a href="#">Tops &amp; Skirts</a></li>
															<li><a href="#">Dresses</a></li>
															<li><a href="#">Trousers &amp; Shorts</a></li>
															<li><a href="#">Knitwear</a></li>
															<li><a href="#">Jackets &amp; Coats</a></li>
														</ul>
													</div><!-- End .col-5 -->
											</div><!-- End .mega-menu -->
										</li>
										
										<li>
											<a href="#">PAGES</a>
											<ul>
                                                <li><a href="#">Headers</a>
                                                    <ul>
                                                        <li><a href="header1.html">Header Version 1</a></li>
                                                        <li><a href="header2.html">Header Version 2</a></li>
                                                        <li><a href="header3.html">Header Version 3</a></li>
                                                        <li><a href="header4.html">Header Version 4</a></li>
                                                        <li><a href="header5.html">Header Version 5</a></li>
                                                        <li><a href="header6.html">Header Version 6</a></li>
                                                        <li><a href="header7.html">Header Version 7</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Footers</a>
                                                    <ul>
                                                        <li><a href="footer1.html">Footer Version 1</a></li>
                                                        <li><a href="footer2.html">Footer Version 2</a></li>
                                                        <li><a href="footer3.html">Footer Version 3</a></li>
                                                    </ul>
                                                </li>
												<li><a href="product.html">Product</a></li>
												<li><a href="cart.html">Cart</a></li>
												<li><a href="category.html">Category</a>
													<ul>
														<li><a href="category-list.html">Category list</a></li>
														<li><a href="category.html">Category Banner 1</a></li>
														<li><a href="category-banner-2.html">Category Banner 2</a></li>
														<li><a href="category-banner-3.html">Category Banner 3</a></li>
													</ul>
												</li>
                                                <li><a href="blog.html">Blog</a>
                                                    <ul>
                                                        <li><a href="blog.html">Right Sidebar</a></li>
                                                        <li><a href="blog-sidebar-left.html">Left Sidebar</a></li>
                                                        <li><a href="blog-sidebar-both.html">Both Sidebar</a></li>
                                                        <li><a href="single.html">Blog Post</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="aboutus.html">About Us</a></li>
												<li><a href="register-account.html">Register Account</a></li>
												<li><a href="compare-products.html">Compare Products</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="404.html">404 Page</a></li>
											</ul>
										</li>
										<li><a href="#">Portfolio</a>
                                            <ul>
                                                <li><a href="#">Classic</a>
                                                    <ul>
                                                        <li><a href="portfolio-2.html">Two Columns</a></li>
                                                        <li><a href="portfolio-3.html">Three Columns</a></li>
                                                        <li><a href="portfolio-4.html">Four Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Masonry</a>
                                                    <ul>
                                                        <li><a href="portfolio-masonry-2.html">Two Columns</a></li>
                                                        <li><a href="portfolio-masonry-3.html">Three Columns</a></li>
                                                        <li><a href="portfolio-masonry-4.html">Four Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Portfolio Posts</a>
                                                    <ul>
                                                        <li><a href="single-portfolio.html">Image Post</a></li>
                                                        <li><a href="single-portfolio-gallery.html">Gallery Post</a></li>
                                                        <li><a href="single-portfolio-video.html">Video Post</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
										</li>
										<li><a href="#">Elements</a>
                                            <ul>
                                                <li><a href="elements/tabs.html">Tabs</a></li>
                                                <li><a href="elements/titles.html">Titles</a></li>
                                                <li><a href="elements/typography.html">Typography</a></li>
                                                <li><a href="elements/collapses.html">collapses</a></li>
                                                <li><a href="elements/animations.html">animations</a></li>
                                                <li><a href="elements/grids.html">Grid System</a></li>
                                                <li><a href="elements/alerts.html">Alert Boxes</a></li>
                                                <li><a href="elements/buttons.html">Buttons</a></li>
                                                <li><a href="elements/medias.html">Media</a></li>
                                                <li><a href="elements/forms.html">Forms</a></li>
                                                <li><a href="elements/icons.html">Icons</a></li>
                                                <li><a href="elements/lists.html">Lists</a></li>
                                                <li><a href="elements/more.html">More</a></li>
                                            </ul>
                                        </li>
										<li><a href="contact.html">Contact Us</a></li>
									</ul>
    								
    							</nav>
    							
    							<div id="quick-access">
    								<div class="dropdown-cart-menu-container pull-right">
    								<div class="btn-group dropdown-cart">
									<button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
										<span class="cart-menu-icon"></span>
										0 item(s) <span class="drop-price">- $0.00</span>
									</button>
									
										<div class="dropdown-menu dropdown-cart-menu pull-right clearfix" role="menu">
											<p class="dropdown-cart-description">Recently added item(s).</p>
											<ul class="dropdown-cart-product-list">
												<li class="item clearfix">
												<a href="#" title="Delete item" class="delete-item"><i class="fa fa-times"></i></a>
												<a href="#" title="Edit item" class="edit-item"><i class="fa fa-pencil"></i></a>
													<figure>
														<a href="product.html"><img src="images/products/thumbnails/item12.jpg" alt="phone 4"></a>
													</figure>
													<div class="dropdown-cart-details">
														<p class="item-name">
														<a href="product.html">Cam Optia AF Webcam </a>
														</p>
														<p>
															1x
															<span class="item-price">$499</span>
														</p>
													</div><!-- End .dropdown-cart-details -->
												</li>
												<li class="item clearfix">
												<a href="#" title="Delete item" class="delete-item"><i class="fa fa-times"></i></a>
												<a href="#" title="Edit item" class="edit-item"><i class="fa fa-pencil"></i></a>
													<figure>
														<a href="product.html"><img src="images/products/thumbnails/item13.jpg" alt="phone 2"></a>
													</figure>
													<div class="dropdown-cart-details">
														<p class="item-name">
															<a href="product.html">Iphone Case Cover Original</a>
														</p>
														<p>
															1x
															<span class="item-price">$499<span class="sub-price">.99</span></span>
														</p>
													</div><!-- End .dropdown-cart-details -->
												</li>
											</ul>
											
											<ul class="dropdown-cart-total">
												<li><span class="dropdown-cart-total-title">Shipping:</span>$7</li>
												<li><span class="dropdown-cart-total-title">Total:</span>$1005<span class="sub-price">.99</span></li>
											</ul><!-- .dropdown-cart-total -->
											<div class="dropdown-cart-action">
												<p><a href="cart.html" class="btn btn-custom-2 btn-block">Cart</a></p>
												<p><a href="checkout.html" class="btn btn-custom btn-block">Checkout</a></p>
											</div><!-- End .dropdown-cart-action -->
											
										</div><!-- End .dropdown-cart -->
										</div><!-- End .btn-group -->
									</div><!-- End .dropdown-cart-menu-container -->
									
									
    							<form class="form-inline quick-search-form" role="form" action="#">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Search here">
									</div><!-- End .form-inline -->
									<button type="submit" id="quick-search" class="btn btn-custom"></button>
								</form>
    							</div><!-- End #quick-access -->
    						</div><!-- End .col-md-12 -->
    				</div><!-- End .row -->
    			</div><!-- End .container -->
    				
    			</div><!-- End #nav -->
    		</div><!-- End #inner-header -->
    	</header><!-- End #header -->
		
        <section id="content">
        	<div id="breadcrumb-container">
        		<div class="container">
					<ul class="breadcrumb">
						<li><a href="index.html">acceuille</a></li>
						<li class="active">connexion</li>
					</ul>
        		</div>
        	</div>
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
						<header class="content-title">
							<h1 class="title">connexion ou inscription</h1>
                            <div class="md-margin"></div><!-- space -->
						</header>
        			
						   <div class="row">
							   	
							   	<div class="col-md-6 col-sm-6 col-xs-12">					   		
							   		<h2>Nouveau Client</h2>
							   		
							   	<p>En créant un compte sur notre boutique, vous serez en mesure de passer plus rapidement au processus de commande, d'enregistrer plusieurs adresses de livraison, d'afficher et de suivre vos commandes dans votre compte, et plus encore..</p>
                                <div class="md-margin"></div><!-- space -->
							   	<a href="register.php" class="btn btn-custom-2">Créer un compte</a>
                                <div class="lg-margin"></div><!-- space -->
							   	</div><!-- End .col-md-6 -->
							   	<div class="col-md-6 col-sm-6 col-xs-12">					   		
							   		<h2>Clients Enregistrer</h2>
							   		<p>Si vous avez un compte avec nous, veuillez vous connecter.</p>
							   		<div class="xs-margin"></div>
							   		
									<form id="login-form" method="post" action="#">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="input-icon input-icon-email"></span><span class="input-text">Email&#42;</span></span>
                                            <input type="email" required class="form-control input-lg" placeholder=" Votre Email" name="mailconnect">
                                        </div><!-- End .input-group -->
                                         <div class="input-group xs-margin">
                                            <span class="input-group-addon"><span class="input-icon input-icon-password"></span><span class="input-text">Password&#42;</span></span>
                                            <input type="password" required class="form-control input-lg" placeholder="votre mot de passe" name="mdpconnect">
                                        </div><!-- End .input-group -->
                                    <span class="help-block text-right"><a href="#">mot de passe oublier?</a></span>
                                    <span class="help-block text-right"><a href="admin/loginadmin.php">Espace admin?</a></span>
                                   <!-- <button class="btn btn-custom-2">LOGIN</button>-->
                                   <input type="submit" name="formconnexion" value="Se connecter !" class="btn btn-custom-2" />
                                    </form>
                                    <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
                                    <div class="sm-margin"></div><!-- space -->
							   	</div><!-- End .col-md-6 -->
							   	
						   </div><!-- End.row -->
								   
        			</div><!-- End .col-md-12 -->
        		</div><!-- End .row -->
			</div><!-- End .container -->
        
        </section><!-- End #content -->
        
        <footer id="footer">
            <div id="twitterfeed-container">
                <div class="container">
                    <div class="row">
                        
                        <div class="twitterfeed col-md-12">
                            <div class="twitter-icon"><i class="fa fa-twitter"></i></div><!-- End .twitter-icon -->
                            <div class="row">
                                <div class="col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                                    <div class="twitter_feed flexslider"></div>
                                </div>
                            </div>
                            
                        </div><!-- End .twiitterfeed .col-md-12 -->
                        
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End #twitterfeed-container -->
            <div id="inner-footer">
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12 widget">
                            <h3>MY ACCOUNT</h3>
                            <ul class="links">
                                <li><a href="#">My account</a></li>
                                <li><a href="#">Personal information</a></li>
                                <li><a href="#">Addresses</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Your Vouchers</a></li>
                            </ul>
                        </div><!-- End .widget -->
                        
                        <div class="col-md-3 col-sm-4 col-xs-12 widget">
                            <h3>INFORMATION</h3>
                            <ul class="links">
                                <li><a href="#">New products</a></li>
                                <li><a href="#">Top sellers</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">Manufacturers</a></li>
                                <li><a href="#">Suppliers</a></li>
                                <li><a href="#">Our stores</a></li>
                            </ul>
                        </div><!-- End .widget -->
                        
                        <div class="col-md-3 col-sm-4 col-xs-12 widget">
                            <h3>MY ACCOUNT</h3>
                            
                            <ul class="contact-list">
                                <li><strong>Venedor Ltd</strong></li>
                                <li>United Kingdom</li>
                                <li>Greater London</li>
                                <li>London 02587</li>
                                <li>Oxford Street 48/188</li>
                                <li>Working Days: Mon. - Sun.</li>
                                <li>Working Hours: 9.00AM - 8.00PM</li>
                            </ul>
                        </div><!-- End .widget -->
                        
                        <div class="clearfix visible-sm"></div>
                        
                        <div class="col-md-3 col-sm-12 col-xs-12 widget">
                            <h3>FACEBOOK LIKE BOX</h3>
                            
                            <div class="facebook-likebox">
                                <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false"></iframe>
                            </div>
                            
                            
                        </div><!-- End .widget -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            
            </div><!-- End #inner-footer -->
            
            <div id="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-7 col-xs-12 footer-social-links-container">
                            <ul class="social-links clearfix">
                                <li><a href="#" class="social-icon icon-facebook"></a></li>
                                <li><a href="#" class="social-icon icon-twitter"></a></li>
                                <li><a href="#" class="social-icon icon-rss"></a></li>
                                <li><a href="#" class="social-icon icon-delicious"></a></li>
                                <li><a href="#" class="social-icon icon-linkedin"></a></li>
                                <li><a href="#" class="social-icon icon-flickr"></a></li>
                                <li><a href="#" class="social-icon icon-skype"></a></li>
                                <li><a href="#" class="social-icon icon-email"></a></li>
                            </ul>
                        </div><!-- End .col-md-7 -->
                        
                        <div class="col-md-5 col-sm-5 col-xs-12 footer-text-container">
                            <p>&copy; 2014 Powered by Company&trade;. All Rights Reserved.</p>
                        </div><!-- End .col-md-5 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End #footer-bottom -->
            
        </footer><!-- End #footer -->
    </div><!-- End #wrapper -->
        <a href="#" id="scroll-top" title="Scroll to Top"><i class="fa fa-angle-up"></i></a><!-- End #scroll-top -->
    <!-- END -->
	<script src="js/bootstrap.min.js"></script>
    <script src="js/smoothscroll.js"></script>
	<script src="js/jquery.debouncedresize.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/jquery.hoverIntent.min.js"></script>
	<script src="js/twitter/jquery.tweet.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>

    </body>
</html>