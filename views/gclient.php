<?PHP
include "../core/clientCf.php";
include "../core/cfC.php";

$client1C=new ClientC();
$listeClients=$client1C->afficherClients();
if(isset($_POST['trie']))
{
	if ($_POST['trie']=='plus grand') {
$listeClients=$client1C->decroi();
	}
	else if ($_POST['trie']=='plus petit') {
$listeClients=$client1C->croi();
	}
	else if ($_POST['trie']=='z-a') {
$listeClients=$client1C->alphadecroi();
	}
	else if ($_POST['trie']=='a-z') {
$listeClients=$client1C->alphacroi();
	}
	else
	{
$listeClients=$client1C->afficherClients();

	}
}
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
						<img src="assets1/img/brand/2.png" class="header-brand-img" alt="Splite-Admin  logo">
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
						
						
				<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">Gestion Panier</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="cards.html" class="slide-item"> Panier</a></li>
						
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-underline"></i><span class="side-menu__label">Gestion Produits</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="elements.html" class="slide-item"> Produit</a></li>
								
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
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Gestion Service A-V</span><span class="badge badge-secondary nav-badge1">New</span></a>
							
						</li>
						
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-line-chart"></i><span class="side-menu__label">AAA</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="chartjs.html" class="slide-item">AAA</a></li>
								
							</ul>
						
						
				</aside>
				<!--aside closed-->

				<!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Client</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Table</a></li>
								<li class="breadcrumb-item active" aria-current="page">USERS</li>
							</ol>
						</div>
						<!--page-header closed-->

						<div class="section-body">

                            <!--row open-->
							<div class="row">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header">
											<h4>USERS</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<form method="POST">
												<select name="trie">
													<option value=""></option>
													<option value="a-z">a-z</option>
													<option value="z-a">z-a</option>
													<option value="plus grand">plus grand</option>
													<option value="plus petit">plus petit</option>
												</select>
												<input type="submit" name="trier" value="Trier" style="background-color: #7673e6;">
												</form>
												<table class="table table-bordered mb-0 text-nowrap">
													<!--tableau Afficher client -->
													<tr>
                                                      <td>Username</td>
                                                       <td>Password</td>
                                                        <td>Age</td>
                                                          <td>Numtel</td>
                                                           <td>E-mail</td>
                                                            <td>Nom</td>
                                                             <td>Prenom</td>
                                                            <td>Supprimer</td>
                                                               </tr>

                                                                <?PHP
                                                                 foreach($listeClients as $row){
	                                                                ?>
	                                                                 <tr>
	                                                  <td><?PHP echo $row['username']; ?></td>
	                                                 <td><?PHP echo $row['password']; ?></td>
	                                               <td><?PHP echo $row['age']; ?></td>
	                                             <td><?PHP echo $row['numtel']; ?></td>
	                                           <td><?PHP echo $row['email']; ?></td>
	                                          <td><?PHP echo $row['nom']; ?></td>
	                                         <td><?PHP echo $row['prenom']; ?></td>

	                                        <td><form method="POST" action="supprimerClient.php">
	                                      <input type="submit" name="supprimer" value="Supprimer" style="background-color: #7673e6;">
	                                    <input type="hidden" value="<?PHP echo $row['username']; ?>" name="username">
	                                  </form>
	                                </td>
	                            
	                           </tr>
	                          <?PHP
                                    }
                                   ?>
												</table>
                                           <form method="POST">
												<input type="text" name="rech" ><input type="submit" name="rechercher" value="Rechercher" style="background-color: #7673e6;" >
										   </form>
										   
												<table class="table table-bordered mb-0 text-nowrap">
													<!--tableau Afficher client -->
													<tr>
                                                      <td>Username</td>
                                                       <td>Password</td>
                                                        <td>Age</td>
                                                          <td>Numtel</td>
                                                           <td>E-mail</td>
                                                            <td>Nom</td>
                                                             <td>Prenom</td>
                                                            <td>Supprimer</td>
                                                               </tr>

                                                                <?PHP
                                                                if(isset($_POST['rech'])){
                                                                $findClients=$client1C->recupererClient($_POST['rech']);

                                                                 foreach($findClients as $row){
	                                                                ?>
	                                                                 <tr>
	                                                  <td><?PHP echo $row['username']; ?></td>
	                                                 <td><?PHP echo $row['password']; ?></td>
	                                               <td><?PHP echo $row['age']; ?></td>
	                                             <td><?PHP echo $row['numtel']; ?></td>
	                                           <td><?PHP echo $row['email']; ?></td>
	                                          <td><?PHP echo $row['nom']; ?></td>
	                                         <td><?PHP echo $row['prenom']; ?></td>

	                                        <td><form method="POST" action="supprimerClient.php">
	                                      <input type="submit" name="supprimer" value="Supprimer" style="background-color: #7673e6;">
	                                    <input type="hidden" value="<?PHP echo $row['username']; ?>" name="username">
	                                  </form>
	                                </td>
	                          
	                           </tr>
	                          <?PHP
                                    }
                                   ?>
												</table>
											<?php  } ?>


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