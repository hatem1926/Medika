<?PHP
include "../core/clientCf.php";
include "../core/cfC.php";

$client1C=new ClientC();
$listeClients=$client1C->afficherClients();
$cf1C=new CfC();
$listeCfs=$cf1C->afficherCfs();

//var_dump($listeclient->fetchAll());
?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.spruko.com/demo/splite/table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:37 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Medika-Admin </title>

		<!--favicon -->
		<link rel="icon" href="favicon.html" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="assets1/plugins/bootstrap/css/bootstrap.min.css">

		<!--Icons css-->
		<link rel="stylesheet" href="assets1/css/icons.css">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="assets1/plugins/scroll-bar/jquery.mCustomScrollbar.css">

		<!--Style css-->
		<link rel="stylesheet" href="assets1/css/style.css">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="assets1/plugins/toggle-menu/sidemenu.css">

	</head>

	<body class="app">
	<div class="wave -three"></div>

		<div id="spinner"></div>

		<!-- app open -->
		<div id="app" class="page">
			<div class="main-wrapper">

			    <!--nav open-->
				<nav class="navbar navbar-expand-lg main-navbar">
					<a class="header-brand" href="index-2.html">
						<img src="assets1/img/brand/logo-white.png" class="header-brand-img" alt="Splite-Admin  logo">
					</a>
					<form class="form-inline mr-auto">
						<ul class="navbar-nav mr-2">
							<li><a href="#" data-toggle="sidebar" class="nav-link nav-link toggle"><i class="fa fa-reorder"></i></a></li>
							<li><a href="#" data-toggle="search" class="nav-link nav-link d-md-none navsearch"><i class="fa fa-search"></i></a></li>
						</ul>
						<div class="search-element mr-3">
							<input class="form-control" type="search" placeholder="Search" aria-label="Search">
							<span class="Search-icon"><i class="fa fa-search"></i></span>
						</div>
					</form>
					<ul class="navbar-nav navbar-right">
					    <li class="dropdown dropdown-list-toggle d-none d-lg-block "><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><i class=" fa fa-flag-o "></i></a>
							<div class="dropdown-menu dropdown-menu-lg  dropdown-menu-right">
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="assets1/img/flags/french_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>French</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="assets1/img/flags/germany_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>Germany</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="assets1/img/flags/italy_flag.jpg" alt="flag-img" class=" flag-sm  mr-3 align-self-center">
									<div>
										<strong>Italy</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="assets1/img/flags/russia_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>Russia</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="assets1/img/flags/spain_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>Spain</strong>
									</div>
								</a>
							</div>
						</li>
						<li class="dropdown dropdown-list-toggle "><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><span class="badge badge-danger nav-link-badge">5</span><i class="hvr-buzz fa fa-envelope-o"></i></a>
							<div class="dropdown-menu dropdown-list dropdown-menu-right">
								<div class="dropdown-header">Messages
									<div class="float-right">
										<a href="#" class="text-white">View All</a>
									</div>
								</div>
								<div class="dropdown-list-content">
									<a href="#" class="dropdown-item dropdown-item-unread">
										<img alt="image" src="assets1/img/avatar/avatar-3.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Stewart Ball</b>
													<p>Your template awesome</p>
												</div>
												<div class="time">6 hours ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="dropdown-item dropdown-item-unread">
										<img alt="image" src="assets1/img/avatar/avatar-2.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Jonathan North</b>
													<p>Your Order Shipped.....</p>
												</div>
												<div class="time">45 mins ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<img alt="image" src="assets1/img/avatar/avatar-4.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Victor Taylor</b>
													<p>Hi!, I' am web developer</p>
												</div>
												<div class="time"> 8 hours ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<img alt="image" src="assets1/img/avatar/avatar-3.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Ruth	Arnold</b>
													<p>Hi!, I' am web designer</p>
												</div>
												<div class="time"> 3 hours ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<img alt="image" src="assets1/img/avatar/avatar-5.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Sam	Lyman</b>
													<p>Hi!, I' am java developer</p>
												</div>
												<div class="time"> 15 mintues ago</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</li>
						<li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><span class="badge badge-secondary nav-link-badge">6</span><i class="fa fa-bell-o"></i></a>
							<div class="dropdown-menu dropdown-list dropdown-menu-right">
								<div class="dropdown-header">Notifications
									<div class="float-right">
										<a href="#" class="text-white">View All</a>
									</div>
								</div>
								<div class="dropdown-list-content">
									<a href="#" class="dropdown-item">
										<i class="fa fa-users text-primary"></i>
										<div class="dropdown-item-desc">
											<b>So many Users Visit your template</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-exclamation-triangle text-danger"></i>
										<div class="dropdown-item-desc">
											<b>Error message occurred....</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-users text-warning"></i>
										<div class="dropdown-item-desc">
											<b> Adding new people</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-shopping-cart text-success"></i>
										<div class="dropdown-item-desc">
											<b>Your items Arrived</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-comment text-primary"></i>
										<div class="dropdown-item-desc">
											<b>New Message received</b> <div class="float-right"><span class="badge badge-pill badge-danger badge-sm">67</span></div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-users text-primary"></i>
										<div class="dropdown-item-desc">
											<b>So many Users Visit your template</b>
										</div>
									</a>
								</div>
							</div>
						</li>
						<li class="dropdown dropdown-list-toggle d-none d-lg-block">
							<a href="#" class="nav-link nav-link-lg full-screen-link">
								<i class="fa fa-expand " id="fullscreen-button"></i>
							</a>
						</li>
						<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg d-flex">
								<span class="mr-3 mt-2 d-none d-lg-block ">
									<span class="text-white">Hello,<span class="ml-1"> Mehdi Regai</span></span>
								</span>
							<span><img src="assets1/img/avatar/avatar-3.jpg" alt="profile-user" class="rounded-circle w-32 mr-2"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class=" dropdown-header noti-title text-center border-bottom pb-3">
									<h5 class="text-capitalize text-dark mb-1">Mehdi Regai</h5>
									<small class="text-overflow m-0"> Web-Designer</small>
								</div>
								<a class="dropdown-item" href="profile.html"><i class="mdi mdi-account-outline mr-2"></i> <span>My profile</span></a>
								<a class="dropdown-item" href="#"><i class="mdi mdi-settings mr-2"></i> <span>Settings</span></a>
								<a class="dropdown-item" href="#"><i class=" mdi mdi-message-outline mr-2"></i> <span>Mails</span></a>
								<a class="dropdown-item" href="#"><i class=" mdi mdi-account-multiple-outline mr-2"></i> <span>Friends</span></a>
								<a class="dropdown-item" href="#"><i class="fe fe-calendar mr-2"></i> <span>Activity</span></a>
								<a class="dropdown-item" href="#"><i class="mdi mdi-compass-outline mr-2"></i> <span>Support</span></a>
								<div class="dropdown-divider"></div><a class="dropdown-item" href="login.html"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Logout</span></a>
							</div>
						</li>
					</ul>
				</nav>
				<!--nav closed-->

				<!--aside open-->
				<aside class="app-sidebar">
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">
							<div class="nav-link pl-1 pr-1 leading-none ">
								<img src="assets1/img/avatar/avatar-3.jpg" alt="user-img" class="avatar-xl rounded-circle mb-1">
								<span class="pulse bg-success" aria-hidden="true"></span>
							</div>
							<div class="user-info">
								<h6 class=" mb-1 text-dark">Mehdi Regai</h6>
								<span class="text-muted app-sidebar__user-name text-sm"> Web-Designer</span>
							</div>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Dashboard</span><span class="badge badge-orange nav-badge">5</span></a>
							<ul class="slide-menu">
								<li><a class="slide-item"  href="index-2.html"><span>Sales Dashboard </span></a></li>
								<li><a class="slide-item" href="index2.html"><span>Social Dashboard</span></a></li>
								<li><a class="slide-item" href="index3.html"><span>Marketing Dashboard</span></a></li>
								<li><a class="slide-item" href="index4.html"><span>IT Dashboard</span></a></li>
								<li><a class="slide-item" href="index5.html"><span>Crypto Currency </span></a></li>
							</ul>
						</li>
						<li>
							<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Widgets</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-envelope-o"></i><span class="side-menu__label">Mail</span><span class="badge badge-warning nav-badge">3</span></a>
							<ul class="slide-menu">
								<li><a href="mailinbox.html" class="slide-item"> Mail-inbox</a></li>
								<li><a href="mail-compose.html" class="slide-item"> Mail-Compose</a></li>
								<li><a href="viewmail.html" class="slide-item"> View-Email</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">Gestion Panier</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="cards.html" class="slide-item"> Cards</a></li>
						
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-underline"></i><span class="side-menu__label">Gestion Produits</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="elements.html" class="slide-item"> Elements</a></li>
								
							</ul>
						</li>
						<li class="slide">
						    <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-smile-o"></i><span class="side-menu__label">Gestion Client</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="gclient.php" class="slide-item"> Client</a></li>
								<li><a href="gcartef.php" class="slide-item"> Carte de Fidelité</a></li>
							
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Gestion Service Après ventre</span><span class="badge badge-secondary nav-badge1">New</span></a>
							
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-edit"></i><span class="side-menu__label">Forms</span><span class="badge badge-pink nav-badge">6</span></a>
							<ul class="slide-menu">
								<li><a href="formelements.html" class="slide-item"> Form Elements</a></li>
						
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-line-chart"></i><span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="chartjs.html" class="slide-item">Chart Js</a></li>
								<li><a href="flotcharts.html" class="slide-item"> Flot Charts</a></li>
								<li><a href="barcharts.html" class="slide-item"> Bar Charts</a></li>
								<li><a href="echart.html" class="slide-item"> ECharts</a></li>
								<li><a href="chartist.html" class="slide-item"> Chartist</a></li>
								<li><a href="morris.html" class="slide-item"> Morris Charts</a></li>
								<li><a href="othercharts.html" class="slide-item"> Other Charts</a></li>
								<li><a href="googlechart.html" class="slide-item"> Google Charts</a></li>
								<li><a href="hightchart.html" class="slide-item"> HighCharts</a></li>
								<li><a href="chartgage.html" class="slide-item"> JustGage Charts</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-map"></i><span class="side-menu__label">Maps</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="maps.html" class="slide-item"> Google Maps</a></li>
								<li><a href="vector-map.html" class="slide-item">Vector Maps</a></li>
								<li><a href="mapel.html" class="slide-item">Mapel Maps</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-folder-open-o"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="profile.html" class="slide-item"> Profile</a></li>
								<li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
								<li><a href="pricing-tables.html" class="slide-item"> Pricing Tables</a></li>
								<li><a href="gallery.html" class="slide-item"> Gallery</a></li>
								<li><a href="portfolio.html" class="slide-item"> Portfolio</a></li>
								<li><a href="terms.html" class="slide-item"> Terms and Conditions</a></li>
								<li><a href="faq.html" class="slide-item"> FAQs</a></li>
								<li><a href="landingpage.html" class="slide-item"> Landing Page</a></li>
								<li><a href="emptypage.html" class="slide-item"> Empty  Page</a></li>
								<li><a href="blog.html" class="slide-item"> Blog</a></li>
								<li><a href="blog-detail.html" class="slide-item"> Single Blog Post</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">E-Commerce</span><span class="badge badge-danger nav-badge">4</span></a>
							<ul class="slide-menu">
								<li><a href="shop.html" class="slide-item"> Shop</a></li>
								<li><a href="product-details.html" class="slide-item">Product Details</a></li>
								<li><a href="product.html" class="slide-item">Product Details-1</a></li>
								<li><a href="shop-cart.html" class="slide-item"> Shop Cart</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cube"></i><span class="side-menu__label">Custom Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="register.html" class="slide-item"> Register</a></li>
								<li><a href="login.html" class="slide-item"> Login</a></li>
								<li><a href="forgot.html" class="slide-item"> Forgot Password</a></li>
								<li><a href="reset.html" class="slide-item"> Reset Password</a></li>
								<li><a href="under-construction.html" class="slide-item"> Under Construction</a></li>
								<li><a href="lockscreen.html" class="slide-item"> Lock Screen</a></li>
								<li><a href="404.html" class="slide-item"> 404</a></li>
								<li><a href="505.html" class="slide-item"> 505</a></li>
							</ul>
						</li>
					</ul>
				</aside>
				<!--aside closed-->

				<!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Carte de fidelité</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Table</a></li>
								<li class="breadcrumb-item active" aria-current="page">USERS</li>
							</ol>
						</div>
						<!--page-header closed-->

						<div class="section-body">

  


								<div class="col-lg-12">
									<div class="card">
										<div class="card-header">
											<h4>Ajouter les informations de la carte fidélité</h4>
										</div>
										<div class="card-body p-0">
											<div class="table-responsive">
												<form method="POST" action="ajoutCf.php" >      

												<table class="table table-striped mb-0 text-nowrap">
      <tr>
      <td><p>Username :</p></td>
     <td> <input type="text" name="username" id="username" placeholder="Entrez l'username" required></td>
  </tr>
     <tr>
      <td><p>Prenom :</p></td>
     <td> <input type="text" name="prenom" id="prenom" placeholder="Entrez le prénom" required></td>
  </tr>
      <tr>
      <td><p>Nom :</p></td>
     <td> <input type="text" name="nom" id="nom" placeholder="Entrez le nom" required></td>
  </tr>
      <tr>
      <td><p>Rang :</p></td>
      <td> <label for="Rang"></label>
      <select name="rang"  id="rang" placeholder="Entrez le rang" required>
      <option value="or" >Or </option>
      <option value="argent" >Argent </option>
      <option value="bronze" >Bronze </option>

    </select></td>
  </tr>
      <tr>
    <td>  <p>E-mail :</p></td>
     <td> <input type="text" name="email" id="email" placeholder="Entrez l'adresse E-mail" required></td>
  </tr>
  
												</table>
												</br></br>
     <input type="submit" value="Ajouter" style="margin-left: 500px;background-color: #7673e6;">
												   </form>

											</div>
										</div>
									</div>
								</div>
							</div>
							<!--row closed-->

                            <!--row open-->
							<div class="row">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header">
											<h4>Carte fidelité</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-bordered table-hover mb-0 text-nowrap">
<tr>
<td>Username</td>
<td>Prenom</td>
<td>Nom</td>
<td>Rang</td>
<td>Email</td>
<td>Supprimer</td>
<td>Modifier</td>
</tr>

<?PHP
foreach($listeCfs as $row){
  ?>
  <tr>
  <td><?PHP echo $row['username']; ?></td>
  <td><?PHP echo $row['prenom']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['rang']; ?></td>
  <td><?PHP echo $row['email']; ?></td>
  <td><form method="POST" action="supprimerCf.php">
  <input type="submit" name="supprimer" value="Supprimer" style="background-color: #7673e6;" >
  <input type="hidden" value="<?PHP echo $row['username']; ?>" name="username">
  </form>
  </td>
  <td><a href="modifierCf.php?username=<?PHP echo $row['username']; ?>">
  Modifier</a></td>
  </tr>
  <?PHP
}
?>
												</table>
											</div>
										</div>
									</div>
								</div>
								
							<!--row closed-->

                            <!--row open-->
							
								
							<!--row closed-->
						</div>

					</section>
				</div>
				<!--app-content closed-->

				<!-- Popupchat open-->
				<div class="popup-box chat-popup" id="qnimate">
					<div class="popup-head">
						<div class="popup-head-left pull-left"><img src="assets1/img/avatar/avatar-3.jpg" alt="iamgurdeeposahan" class="mr-2"> Mehdi Regai</div>
						<div class="popup-head-right pull-right">
							<div class="btn-group">
								<button class="chat-header-button" data-toggle="dropdown" type="button" aria-expanded="false">
								<i class="glyphicon glyphicon-cog"></i> </button>
								<ul role="menu" class="dropdown-menu dropdown-menu-right">
									<li><a href="#">Media</a></li>
									<li><a href="#">Block</a></li>
									<li><a href="#">Clear Chat</a></li>
									<li><a href="#">Email Chat</a></li>
								</ul>
							</div>
							<button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button"><i class="glyphicon glyphicon-off"></i></button>
						</div>
					</div>
					<div class="popup-messages">
						<div class="direct-chat-messages">
							<div class="chat-box-single-line">
								<abbr class="timestamp">December 15th, 2018</abbr>
							</div>
							<div class="direct-chat-msg">
								<div class="direct-chat-info clearfix">
									<span class="direct-chat-name float-left">Mehdi Regai</span>
									<span class="direct-chat-timestamp float-right">7:40 Am</span>
								</div>
								<img class="direct-chat-img" src="assets1/img/avatar/avatar-3.jpg" alt="message user image">
								<div class="direct-chat-text">
									Hello. How are you today?
								</div>
							</div>
							<div class="direct-chat-msg right">
								<div class="direct-chat-info clearfix">
									<span class="direct-chat-name float-right">Roberts</span>
									<span class="direct-chat-timestamp float-left">8:05 Am</span>
								</div>
								<img class="direct-chat-img" src="assets1/img/avatar/avatar-2.jpg" alt="message user image">
								<div class="direct-chat-text">
									I'm fine. Thanks for asking!
								</div>
							</div>
							<div class="chat-box-single-line  mb-3">
								<abbr class="timestamp">December 14th, 2018</abbr>
							</div>
							<div class="direct-chat-msg doted-border">
								<div class="direct-chat-info clearfix">
									<span class="direct-chat-name float-left">Mehdi Regai</span>
									<span class="direct-chat-timestamp float-right">6:20 Am</span>
								</div>
								<img alt="iamgurdeeposahan" src="assets1/img/avatar/avatar-3.jpg" class="direct-chat-img"><!-- /.direct-chat-img -->
								<div class="direct-chat-text">
									Hey bro, how’s everything going ?
								</div>
								<div class="direct-chat-msg right">
									<div class="direct-chat-info clearfix">
										<span class="direct-chat-name float-right">Roberts</span>
										<span class="direct-chat-timestamp float-left">7:05 Am</span>
									</div>
									<img class="direct-chat-img" src="assets1/img/avatar/avatar-2.jpg" alt="message user image">
									<div class="direct-chat-text">
										Nothing Much!
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="popup-messages-footer">
						<textarea id="status_message" placeholder="Type a message..." rows="10" cols="40" name="message"></textarea>
						<div class="btn-footer">
							<button class="bg_none"><i class="glyphicon glyphicon-film"></i> </button>
							<button class="bg_none"><i class="glyphicon glyphicon-camera"></i> </button>
							<button class="bg_none"><i class="glyphicon glyphicon-paperclip"></i> </button>
							<button class="bg_none pull-right"><i class="glyphicon glyphicon-thumbs-up"></i> </button>
						</div>
					</div>
				</div>
				<!-- Popupchat closed -->

			</div>
		</div>
		<!--app closed-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-angle-up"></i></a>

		<!-- Popup-chat -->
		<a href="#" id="addClass"><i class="ti-comment"></i></a>

		<!--Jquery.min js-->
		<script src="assets1/js/jquery.min.js"></script>

		<!--popper js-->
		<script src="assets1/js/popper.js"></script>

		<!--Tooltip js-->
		<script src="assets1/js/tooltip.js"></script>

		<!--Bootstrap.min js-->
		<script src="assets1/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Jquery star rating-->
		<script src="assets1/plugins/rating/jquery.rating-stars.js"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="assets1/plugins/nicescroll/jquery.nicescroll.min.js"></script>

		<!--Scroll-up-bar.min js-->
		<script src="assets1/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

		<!--mCustomScrollbar js-->
		<script src="assets1/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Sidemenu js-->
		<script src="assets1/plugins/toggle-menu/sidemenu.js"></script>

		<!--Scripts js-->
		<script src="assets1/js/scripts.js"></script>
		<script src="assets1/js/jquery.showmore.js"></script>

	</body>

<!-- Mirrored from www.spruko.com/demo/splite/table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:37 GMT -->
</html>