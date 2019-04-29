<?PHP 
include "../entities/ldc.php";
include "../core/ldcL.php";




$ldc=new ldcL();
$liste=$ldc->afficherldc();


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
<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg d-flex">
								<span class="mr-3 mt-2 d-none d-lg-block ">
							

								
									<span class="text-white">Hello,<span class="ml-1"> <?PHP echo $_SESSION['nom']; ?>
									 </span>
								</span>
								<div class="dropdown-menu dropdown-menu-right">
								<div class=" dropdown-header noti-title text-center border-bottom pb-3">
									<h5 class="text-capitalize text-dark mb-1"><?PHP echo $_SESSION['l']; ?></h5>
									<small class="text-overflow m-0"> </small>
								</div>
								<a class="dropdown-item" href="profile.html"><i class="mdi mdi-account-outline mr-2"></i> <span>My profile</span></a>
								<a class="dropdown-item" href="userrr.php"><i class="mdi mdi-message mr-2"></i> <span>Reclamations</span></a>
								<a class="dropdown-item" href="#"><i class=" mdi mdi-message-outline mr-2"></i> <span>Mails</span></a>
								<a class="dropdown-item" href="logout.php"><i class="mdi  mdi-logout-variant mr-2"></i> <span>LOGOUT</span></a>
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
						<?PHP if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{  ?> 
						<li class="dropdown dropdown-list-toggle"><a href="panier.php"  class="nav-link  nav-link-lg "><span class="badge badge-secondary nav-link-badge">
							<?php
require_once  '../config.php';
$db=config::getConnexion();
  
   $x=$_SESSION['id'];
   $req3= $db->query("SELECT count(idldc) as nb FROM ldc where idc=$x ");
    $nb = $req3->fetch();
							 echo $nb['nb']; ?>
						</span><i class="hvr-buzz fa fa-shopping-cart"></i></a>	
						</li>
						<?PHP } ?>
					   
						
						
					</ul>
				</nav>
				<!--nav closed-->






                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
                    	<div class="page-header">
							<h4 class="page-title">Panier</h4>
						</div>
						<!--page-header closed-->

						<div class="section-body ">

						    <!--row open-->
							<div class="row">
								<div class="col-lg-6">
									<div class="card m-b-20">
										<div class="card-header ">
											<h4>Panier</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive text-nowrap">
												<table class="table table-bordered">
													<thead>
														<tr>
															<th>Produit</th>
															<th>Prix</th>
															<th>Quantite</th>
															<th>Total</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<?php foreach( $liste as $row ):?>
														<form class="form-horizontal" method="POST" >
														

														<tr>
															
															<td>
																<h4 class="pro-title mt-1"><?= $row->produitldc?></h4>
															</td>
															<td><span><h4 class="pro-title mt-1"><?= $row->prixldc?></h4>
															</span></td>
															<td>
																<input type="hidden" name="prixldc" value="<?PHP echo $row->prixldc ?>">
																<input name="quantiteldc" value="<?PHP echo $row->quantiteldc ?>" size="3">
																<input type="hidden" name="idldc" value="<?PHP echo $row->idldc ?>">
																<button type="submit" class="btn btn-primary mt-1 mb-0"  value="modifier" name="modifier">Modifier</button>
																
															</td>
															

															<td><span><?PHP echo $row->total ?></span></td>
															
															<td>

<button type="submit" class="btn btn-danger btn-rounded btn-sm my-0"   value="supprimer" name="supprimer">Supprimer</button>
																
																</td>
															<?PHP
											if (isset($_POST['supprimer'])){

	$ldc->supprimerldc($_POST["idldc"]);
 echo "<META http-equiv='refresh' content='0;URL=panier.php'>";
}
											
											 if (isset($_POST['modifier'])){
$x=$_POST['quantiteldc']*$_POST['prixldc'];
	$ldc->modifierldc($_POST['quantiteldc'],$x,$_POST['idldc']);
 echo "<META http-equiv='refresh' content='0;URL=panier.php'>";
}
											?>
														</tr>
													</form>
<?php endforeach ?>
													</tbody>
												</table>
											</div>
											
												<div class="row">
													
													<div class="col-6">
													</div>
												</div>
												
										
											
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card ">
										<div class="card-header ">
											<h4>Payment</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-bordered">
													<tbody>
														
													
														<tr>
															<form class="form-horizontal" name="formR" method="POST" action="ajouterP.php" >
															<td>Nom</td>
															<td class="text-right"><?PHP echo $_SESSION['nom']; ?>
															
							<input type="hidden" name="id" value="<?PHP echo $_SESSION['id'] ?>">

																<input type="hidden" name="nom" value="<?PHP echo $_SESSION['nom']; ?>">

															</td>
														</tr>
														<tr>
															<td><span>Nombre Produits</span></td>
															<td class="text-right text-muted"><span>
																<?php
require_once  '../config.php';
$db=config::getConnexion();
  
   $x=$_SESSION['id'];
   $req3= $db->query("SELECT count(idldc) as nb FROM ldc where idc=$x ");
    $nb = $req3->fetch();
							 echo $nb['nb'];
							 $x=$nb['nb']; ?>
							 <input type="hidden" name="nbr" value="<?PHP echo $x ?>">
															</span></td>
														</tr>
														<tr>
															<td><span>Total</span></td>
															<td><h2 class="price text-right">
																<?php
require_once  '../config.php';
$db=config::getConnexion();
  
   $x=$_SESSION['id'];
   $req3= $db->query("SELECT sum(total) as nb FROM ldc where idc=$x ");
    $nb = $req3->fetch();
							 echo $nb['nb']; ?>
							 <input type="hidden" name="total" value="<?PHP echo $nb['nb'] ?>">
															</h2>
														</td>
<a href="produit.php"><input class="btn btn-success mt-2"value="Continue Shopping"><a/>
													<input class="btn btn-primary mt-2" type="submit" value="Valider Achat">
												</form>
														</tr>

													</tbody>
												</table>
											</div>
											
												
												
												
											
										</div>
									</div>
								</div>
							</div>
							<!--row closed-->

						</div>
					</section>
				</div>
				<!--app-content closed-->

                        


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