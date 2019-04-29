<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=Harouna', 'root', '');

if(isset($_POST['adminform'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = $_POST['mdpconnect'];
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM admin WHERE mail = ? AND motdepasse = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
        header("Location: index.php? id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.spruko.com/demo/splite/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:58 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Splite-Admin Dashboard</title>

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

	</head>

	<body class="bg-primary">

	    <!--app open-->
		<div id="app" class="page">
			<section class="section section-2">
                <div class="container">
					<div class="">

						<!--single-page open-->
						<div class="single-page">
							<div class="">
								<div class="wrapper wrapper2">
									<form id="login" class="card-body" tabindex="500">
										<h3 class="text-dark">Login</h3>
										<div class="mail">
											<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
										</div>
										<div class="passwd">
											<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
										</div>
										<p class="mb-3 text-right"><a href="forgot.html">Forgot Password</a></p>
										<div class="submit">
											<a class="btn btn-primary btn-block" href="index.php">Login</a>
										</div>
										<div class="signup mb-0" >
											<p class="text-dark mb-0">Don't have account?<a href="register.html" class="text-primary ml-1">Sign UP</a></p>
										</div>
									</form>
									
								</div>
							</div>
						</div>
						<!--single-page closed-->

					</div>
				</div>
			</section>
		</div>
		<!--app closed-->

		<!--Jquery.min js-->
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

		<script src="assets/js/moment.min.js"></script>

		<!--mCustomScrollbar js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Sidemenu js-->
		<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--Scripts js-->
		<script src="assets/js/scripts.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>
	</body>

<!-- Mirrored from www.spruko.com/demo/splite/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:58 GMT -->
</html>