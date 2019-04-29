<?PHP 
include "../entities/categorie.php";
include "../core/categorieC.php";
include "../entities/produit.php";
include "../core/produitP.php";
include "../entities/reclamation.php";
include "../core/reclamationR.php";
$produit=new produitP();
$listeproduit=$produit->afficherproduit();
$categorie=new categorieC();
$listecategorie=$categorie->affichercategorie();



session_start ();  


?>

<!DOCTYPE html>
<html lang="en">


<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Medika</title>

		<!--Favicon -->
		<link rel="icon" href="favicon.html" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

		<!--Icons css-->
		<link rel="stylesheet" href="assets/css/icons.css">

		<!--Style css-->
		<link rel="stylesheet" href="assets/css/style.css">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">

		<!--Morris css-->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

	</head>

	<body class="app ">
	<div class="wave -three"></div>



		<!--app open-->
		<div id="app" class="page">
			<div class="main-wrapper" >

			   <!--anv open-->
				<nav class="navbar navbar-expand-lg main-navbar">
			<a class="header-brand" href="index1.php">
						<img src="assets/img/brand/1.png" class="header-brand-img" alt="Splite-Admin  logo">
					</a> 
				<div id="navbar" class="navbar-collapse collapse">
					<ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="index1.php"><span class="fa fa-angle-down"><h5 class="text-capitalize text-dark mb-1">ACCUEIL</h5></span></a></li> 
            <li class="dropdown">
              <a href="Produit.php"><span class="fa fa-angle-down"><h5 class="text-capitalize text-dark mb-1">PRODUITS</h5> </span></a>
              
            </li>    
            <li class="dropdown"><a href="gallery.html"><span class="fa fa-angle-down"><h5 class="text-capitalize text-dark mb-1">BONS PLANS</h5></span></a>
              <div class="dropdown-menu dropdown-menu-right">
								<div class=" dropdown-header noti-title text-center border-bottom pb-3">
								<a class="dropdown-item" href="#"> <span>Meilleur Produits</span></a>
								<a class="dropdown-item" href="#"> <span>Nouveautés</span></a>
							</div>
						</div>



         </li>
            <li class="active"><a href="#"><span class="fa fa-angle-down"><h5 class="text-capitalize text-dark mb-1">CONTACT</h5></span></a></li>

          </ul>  
      </div>
					
					<ul class="navbar-nav navbar-center">
						<?PHP 
						if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{  ?>
<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg d-flex">
								<span class="mr-3 mt-2 d-none d-lg-block ">
							<span>
							<?php
$lien="assets/img/avatar/" .$_SESSION['l'].".jpg";
if(file_exists($lien)) 
{ 
echo '<a href="assets/img/avatar/'.$_SESSION['l'].'.jpg" target="_blank"> <img src="assets/img/avatar/'.$_SESSION['l'].'.jpg" alt="profile-user" class="rounded-circle w-32 mr-2">';
} 
else 
{ 
echo '<img  src="assets/img/avatar/nf.png" alt="profile-user" class="rounded-circle w-32 mr-2" >';
}
?></span>

								
									<span class="text-white">Hello,<span class="ml-1"> <?PHP echo $_SESSION['nom']; ?>
									 </span>
								</span>
								<div class="dropdown-menu dropdown-menu-right">
								<div class=" dropdown-header noti-title text-center border-bottom pb-3">
									<h5 class="text-capitalize text-dark mb-1"><?PHP echo $_SESSION['l']; ?></h5>
									<small class="text-overflow m-0"> </small>
								</div>
								<a class="dropdown-item" href="profile.html"><i class="mdi mdi-account-outline mr-2"></i> <span>My profile</span></a>
								<a class="dropdown-item" href="#"><i class="mdi mdi-settings mr-2"></i> <span>Settings</span></a>
								<a class="dropdown-item" href="#"><i class=" mdi mdi-message-outline mr-2"></i> <span>Mails</span></a>
								<a class="dropdown-item" href="#"><i class=" mdi mdi-account-multiple-outline mr-2"></i> <span>Friends</span></a>
								<a class="dropdown-item" href="#"><i class="fe fe-calendar mr-2"></i> <span>Activity</span></a>
								<a class="dropdown-item" href="#"><i class="mdi mdi-compass-outline mr-2"></i> <span>Support</span></a>
								<div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="mdi  mdi-logout-variant mr-2"></i> <span>LOGOUT</span></a>
							</div>
								</span>
							</a>
							
						</li>


<?PHP } ?>
						
						<?PHP if (!isset($_SESSION['l']) && !isset($_SESSION['p'])) 
						{ ?>
						
						<a href="login.php" class="nav-link  nav-link-lg ">LOGIN<i class="fa fa-user"></i></a>
						

						<a href="#" class="nav-link  nav-link-lg ">REGISTER<i class=" fa fa-user-plus "></i></a>
						

					<?PHP } ?>

							
								
						</li>
						<li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><span class="badge badge-secondary nav-link-badge">
							<?php
require_once  '../config.php';
$db=config::getConnexion();
  
   $req3= $db->query("SELECT count(idldc) as nb FROM ldc ");
    $nb = $req3->fetch();
							 echo $nb['nb']; ?>
						</span><i class="hvr-buzz fa fa-shopping-cart"></i></a>	
						</li>
					    <li class="dropdown dropdown-list-toggle d-none d-lg-block "><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><i class=" fa fa-flag-o "></i></a>
							<div class="dropdown-menu dropdown-menu-lg  dropdown-menu-right">
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="assets/img/flags/french_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>French</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="assets/img/flags/germany_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>Germany</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="assets/img/flags/italy_flag.jpg" alt="flag-img" class=" flag-sm  mr-3 align-self-center">
									<div>
										<strong>Italy</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="assets/img/flags/russia_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>Russia</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="assets/img/flags/spain_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>Spain</strong>
									</div>
								</a>
							</div>
						</li>
						
						
					</ul>
				</nav>
				<!--nav closed-->



<!-- STAAAAAAAAAAART -->

                <!--app-content open-->
				<div class="app-content">
					<section class="section">

                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Contact</h4>

						</div>
						<!--page-header closed-->

						<div class="section-body">

                            <!--row open-->
							<div class="row">
								
								<div class="col-lg-12 col-xl-8 col-md-12 col-sm-12">
									<div class="card">
										<div class="card-header">
											<h4>Composer votre Réclamation</h4>
										</div>
										<div class="card-body">
							<?PHP		
							if (isset($_GET['idproduit'])){
	$produitP=new produitP();		
 $result=$produitP->getidproduit($_GET['idproduit']);
	foreach($result as $row){
		$idproduit=$row['idproduit'];
		$nomproduit=$row['nomproduit'];
		?>
											<form class="form-horizontal" name="formR" method="POST" action="ajouter_rec.php">
												<div class="form-group">
													<div class="row align-items-center">
														<label class="col-sm-3">Nom</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" name="nomclient" value="<?PHP echo $_SESSION['nom']; ?>" readonly>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row align-items-center">
														<label class="col-sm-3">Email</label>
														<div class="col-sm-9">
															<input type="text" name="emailclient" class="form-control" value="<?PHP echo $_SESSION['email']; ?>" >
														</div>
													</div>
												</div>
													<div class="form-group">
													<div class="row align-items-center">
														<label class="col-sm-3">Choix Réponse</label>
														<div class="col-sm-9">
															<SELECT name="choix" size="1">
<OPTION>Profile																
<OPTION>Email
</SELECT>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row align-items-center">
														<label class="col-sm-3">Nom Produit</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" value="<?PHP echo $nomproduit ?>" readonly >
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row ">
														<label class="col-sm-3">Reclamation</label>
														<div class="col-sm-9">
															<textarea name="descreclamation" rows="10" class="form-control"></textarea>
														</div>
													</div>
												</div>
												
												<div class="btn-list text-right">
													<button type="button" class="btn btn-danger btn-space m-t-5">Annuler</button>
													<button type="submit" class="btn btn-primary btn-space m-t-5" value="modifier" name="modifier">Envoyer Reclamation</button>
													<input type="hidden" name="idclient" value="<?PHP echo $_SESSION['id']; ?>">
													<input type="hidden" name="idproduit" value="<?PHP echo $idproduit ?>">
												</div>
											</form>
											<?PHP 
}
										}
										else { ?>
											<p>Votre Reclamation a été Envoyee!</p>
											<?PHP } ?>
										</div>
									</div>
								</div>
							</div>
							<!--row closed-->

						</div>
					</section>
				</div>
				<!--app-content closed-->

<!-- EEEEEEEEEEEEND -->

                        


			</div>
		</div>
		<!--app closed-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-angle-up"></i></a>

		<!-- Popup-chat -->
		<a href="#" id="addClass"><i class="ti-comment"></i></a>

		<!--Jquery.min js-->
		<script type="text/javascript" src="js/form.js"></script>
		<script src="assets/js/jquery.min.js"></script>

		<!--popper js-->
		<script src="assets/js/popper.js"></script>

		<!--Tooltip js-->
		<script src="assets/js/tooltip.js"></script>

		<!--Bootstrap.min js-->
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Jquery star rating-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

		<!--Scroll-up-bar.min js-->
		<script src="assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

		<!--mCustomScrollbar js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Sidemenu js-->
		<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--Scripts js-->
		<script src="assets/js/scripts.js"></script>
		<script src="js/form.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>

				<script src="assets/js/editable.js"></script>
		<script src="assets/js/datatable.js"></script>

<!--DataTables js-->
		<script src="assets/plugins/Datatable/js/jquery.dataTables.js"></script>
		<script src="assets/plugins/Datatable/js/dataTables.bootstrap4.js"></script>
		<script src="assets/plugins/Datatable/js/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/Datatable/js/buttons.bootstrap4.min.js"></script>
		<script src="assets/plugins/Datatable/js/jszip.min.js"></script>
		<script src="assets/plugins/Datatable/js/pdfmake.min.js"></script>
		<script src="assets/plugins/Datatable/js/vfs_fonts.js"></script>
		<script src="assets/plugins/Datatable/js/buttons.html5.min.js"></script>
		<script src="assets/plugins/Datatable/js/buttons.print.min.js"></script>
		<script src="assets/plugins/Datatable/js/buttons.colVis.min.js"></script>



	 </body>


</html>