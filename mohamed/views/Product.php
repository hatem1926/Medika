<?PHP 
include "../entities/categorie.php";
include "../core/categorieC.php";
include "../entities/produit.php";
include "../core/produitP.php";
$produit=new produitP();
//$listeproduit=$produit->afficherproduit();
$categorie=new categorieC();
$listecategorie=$categorie->affichercategorie();


session_start ();  

$maction='afficher';

  if(isset($_GET['maction']))
            {$maction=$_GET['maction'];}
          if($maction=='aff')
            {
              if(isset($_GET['par'])) {

              $z=$_GET['par'];

              $listeproduit=$produit->afficherproduit1($z);
            }
        }
            else
            {
            	$listeproduit=$produit->afficherproduit();
            }

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

		<!--IMAAAGE css-->
		<link rel="stylesheet" href="assets/css/a.css">

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
									<span class="text-white">Hello,<span class="ml-1"> <?PHP echo $_SESSION['l']; ?>
									 </span></span>
								</span>
							<span><img src="assets/img/avatar/avatar.jpg" alt="profile-user" class="rounded-circle w-32 mr-2"></span>
							</a>
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
						</li>


<?PHP } ?>
						
						<?PHP if (!isset($_SESSION['l']) && !isset($_SESSION['p'])) 
						{ ?>
						
						<a href="login.php" class="nav-link  nav-link-lg ">LOGIN<i class="fa fa-user"></i></a>
						

						<a href="#" class="nav-link  nav-link-lg ">REGISTER<i class=" fa fa-user-plus "></i></a>
						

					<?PHP } ?>

							
								
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







                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Shop</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Medika</a></li>
								<li class="breadcrumb-item active" aria-current="page">Shop</li>
							</ol>
						</div>
						<!--page-header closed-->


						<div class="section-body ">

                            <!--row open-->
							<div class="row">
								<div class="col-md-12 col-lg-4 col-xl-3">
									
									<div class="card">
										<div class="card-header">
											<h4>Category</h4>
										</div>
										<div class="card-body">

											<ul class="nav prod-cat">
												<?php foreach( $listecategorie as $row ):
													$y=$row['nomcategorie'];?>
												<li><a href="Produit.php?maction=aff&par=<?PHP echo $y;?>"  ><?php echo $y; ?> </a></li>
												<?php endforeach ?>
											</ul>
										</div>
									</div>


									<div class="card">
										<div class="card-header">
											<form class="form-horizontal" method="POST" action="Price.php">
											<h4>Price Range</h4>
										</div>
										<div class="card-body sliders">
											<div class="">
												<div class="radio">
													<input type="radio" name="radio" value="1" checked>
													<label for="shop-filter-price_1">Under $25</label>
												</div>
												<div class="radio">
													<input type="radio" name="radio" value="2">
													<label for="shop-filter-price_2">$25 to $50</label>
												</div>
												<div class="radio">
													<input type="radio" name="radio" value="3">
													<label for="shop-filter-price_3">$50 to $100</label>
												</div>
												<div class="radio">
													<input type="radio" name="radio" value="4">
													<label for="shop-filter-price_4" class="mb-0">Over 100$</label>
												</div>
											</div>
										</div>

										<button type="submit" name="choose" value="choose" class="btn btn-primary mt-1 mb-0" >Choose</button>
									</form>

									</div>

									<div class="card">
										<div class="card-header">
											<h4>Filter</h4>
										</div>
										<div class="card-body">
											<div class="form-group">
												<label class="form-label">Brand</label>
												<select name="beast" id="select-beast" class="form-control custom-select">
													<option value="0">--Select--</option>
													<option value="1">Wallmart</option>
													<option value="2">Catseye</option>
													<option value="3">Moonsoon</option>
													<option value="4">Textmart</option>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label">Color</label>
												<select name="beast" id="select-beast1" class="form-control custom-select">
													<option value="0">--Select--</option>
													<option value="1">White</option>
													<option value="2">Black</option>
													<option value="3">Red</option>
													<option value="4">Green</option>
													<option value="5">Blue</option>
													<option value="6">Yellow</option>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label">Type</label>
												<select name="beast" id="select-beast2" class="form-control custom-select">
													<option value="0">--Select--</option>
													<option value="1">Extra Small</option>
													<option value="2">Small</option>
													<option value="3">Medium</option>
													<option value="4">Large</option>
													<option value="5">Extra Large</option>
												</select>
											</div>
											<a class="btn btn-primary" href="#" >Search</a>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-lg-8 col-xl-9">
								    
									
									<div class="row product-list">
										<div class="col-lg-6 col-xl-4 col-md-6">
										    <div class="card">												<div class="pro-img-box">
													
													<?PHP
													if (isset($_GET['idproduit'])){
	$produitP=new produitP();



    $result=$produitP->getidproduit($_GET['idproduit']);
	foreach($result as $row){
		$idproduit=$row['idproduit'];
		$nomproduit=$row['nomproduit'];
		$prixproduit=$row['prixproduit'];
		$quantiteproduit=$row['quantiteproduit'];
		$descproduit=$row['descproduit'];
		$categorieproduit=$row['categorieproduit'];
		$promoproduit=$row['promoproduit'];
													if ($row['promoproduit']>0)
														{
														?>

													<?php
$lien="images/" . $row['idproduit'].".jpg";
if(file_exists($lien)) 
{ 
echo '<a href="images/'.$row['idproduit'].'.jpg" target="_blank"> 
<div class="overlay-image">
 <img class="image" src="images/'.$row['idproduit'].'.jpg" alt="Alt text" width="200" height="300" />
 <div class="text">EN PROMO</div>
</a></div>

';
} 
else 
{ 
echo '
<div class="overlay-image">
 <img class="image" src="images/nf.png" alt="Alt text" width="200" height="300" />
 <div class="text">EN PROMO</div>
</a></div>';
}
?>

<?PHP }
													else
													{
														?>


<?php
$lien="images/" . $row['idproduit'].".jpg";
if(file_exists($lien)) 
{ 
echo '<a href="images/'.$row['idproduit'].'.jpg" target="_blank"> 
<img class="image" src="images/'.$row['idproduit'].'.jpg" alt="Alt text" width="200" height="300" />
';
} 
else 
{ 
echo '
 <img class="image" src="images/nf.png" alt="Alt text" width="200" height="300" />
';
}
?>

<?PHP }
													?>
														<form class="form-horizontal" name="formR" method="POST" action="ajouter_ldc">
													<input type="hidden" name="nomproduit" value="<?PHP echo $row['nomproduit'] ?>">
													<input type="hidden" name="prixproduit" value="<?PHP echo $row['prixproduit'] ?>">
													<center><button type="submit" class="btn btn-primary btn-space m-t-5" value="modifier" name="modifier">Ajouter au panier <i class="fa fa-shopping-cart"></i></button></center>	
												</form>

														
														<center><a href="contact.php?idproduit=<?PHP echo $row['idproduit'] ?>">Ajouter Reclamation <i class="fa fa-question-circle"></i></a></center>
													
												</div>
												<!--foreach-->
												<div class="product_details">
													<div class="text-center text-warning">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													
													<h5 class="pro-title mt-1" ><?= $row['nomproduit']?></h5>
													<br>
<?PHP
													if ($row['promoproduit']>0)
														{
														?>
													<h5 class="pro-title mt-1" style="color:red;" ><?= $row['promoproduit']?>%</h5>
													<?PHP } ?>
													<br>
													<h4 class="pro-title mt-1"><?= $row['categorieproduit']?></h4>
													<?PHP
													if ($row['promoproduit']>0)
														{
														?>
														<ul class="product_price list-unstyled">
														<?PHP
														$p=$row['prixproduit']-($row['prixproduit']*$row['promoproduit'])/100;
														?>
														<li class="old_price"><?php
														 $nombre=$row['prixproduit'];
														 $resultat = number_format($nombre, 3, ',', ' '); 
															 echo $resultat
															   ?>DT</li>
														<li class="new_price">
															<?PHP
															$nombre = $p; 
														$resultat = number_format($nombre, 3, ',', ' '); 
															 echo $resultat
															 ?>
															DT</li>
													</ul>	
														<?PHP }
													else
													{
														?>
														<ul class="product_price list-unstyled">
														<li class="new_price"><?php
														 $nombre= $row['prixproduit'];
														 $resultat = number_format($nombre, 3, ',', ' '); 
															 echo $resultat
														 ?>DT</li>
													</ul>
													<?PHP }
													?>
													
												</div>
												<?PHP } ?>
											</div>
										</div>
										<div class="col-lg-6 col-xl-4 col-md-6">
											<div class="card">
												<div class="pro-img-box">
													<!--img-->
													
												</div>
												<!--end-->
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