<?PHP 
include "../entities/reclamation.php";
include "../core/reclamationR.php";




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



<!-- STAAAAAAAAAAART -->

               
						                       
		<!--app opened-->

         <div class="col-12">
								<div class="card">
<div class="card-header d-flex align-items-center">
                        <form class="form-inline" method="GET">
                            <input class="form-control mr-sm-2" name="search" type="Chercher" placeholder="Chercher" aria-label="Id Comande">
                             <button class="btn btn-outline-primary my-2 my-sm-2" type="submit">Chercher</button>
                         </form>
                    </div>									

 
									<div class="card-header">

										<h4>Vos Reclamations</h4>
									</div>

									<div class="card-body">
										<div id="table" class="table-responsive table-editable">
											<table class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap">
												<tabody><tr>


													<th class="text-center" >Reclamation</th>
													<th class="text-center" >Choix</th>
													<th class="text-center">Reponse</th>
													<th class="text-center">Sort</th>
													<th class="text-center">Modifier</th>


												</tr>
												<?php 
												$reclamation=new reclamationR();
												$liste=$reclamation->affR($_SESSION['id']);
												foreach( $liste as $row ):
												?>
													<tr>	
													<td class="pt-3-half" contenteditable="true"> <?= $row['descreclamation']?> </td>
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['choix']?> </td>
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['reponse'] ?> </td> 

													<!-- SORT -->

													<td class="pt-3-half">
														<span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
														<span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down"
														aria-hidden="true"></i></a></span>
													</td>


												<!-- bouton Modifier-->

													
													<td>
														<span >
											<a href="traiter.php?idreclamation=<?PHP echo $row['idreclamation']; ?>">
											<input onclick="return confirmation('<?PHP echo $row['reponse'] ?>');" type="submit" class="btn btn-warning btn-rounded btn-sm my-0" name="" value="Modifier">
											</a>
														</span>
																											
													</td>




												</tr>
												

												</tr>
												<?php endforeach ?>

											</tbody>
										

									</table>
										</div>
									</div>
								</div>
							</div>



		<!--app closed-->

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

<SCRIPT type="text/javascript">
function confirmation(x){

    if (x!="Votre Reclamation En cours de traitement")  
															{alert("TU PEUX PAS MODIFIER!");
															return false;}

															else 
																{return true;}


}
</SCRIPT>

	 </body>


</html>