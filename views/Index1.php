<!DOCTYPE html>
<html lang="en">
<style>

  body{


    margin: 0;
    padding: 0;
    -webkit-background-size: cover;
    background-image: url(para1.jpg);
    background-size: cover;
    font-family: Tahoma, Geneva, Verdana, sans-serif;
  }

  .form{
    position: absolute;
    top: 35%;
    left: 40%;
    box-sizing: border-box;
    background-color: rgba(0,0,0,0.5);
    padding: 40px;
    border-radius:15px;
    border:1px solid #fff;
  }
    .titre{
      margin: 0;
      padding: 0 0 20px;
      font-weight: bold;
      columns: white;
      color: white;
    }
    .form p{
      margin: 0;
      padding: 0;
      color: white;
      font-weight: bold;
    }
    .form:hover{
      background-color: rgba(100,0,0,0.50);
    }
    .form input,select{
      margin-bottom: 20px;
      width: 100%;
    }
    .form input[type=text], .form input[type=number], .form input[type=email]{
      border: none;
      border-bottom: 1px solid #fff;
      background-color: transparent;
      outline: none;
      height: 30px;
      display: 12px;
      color: #fff;
    }
    ::placeholder{
      color: #fff;}
      .form select{
        margin-top: 20px;
        padding: 10px, 0;
      }
      .form input[type=submit],[type=reset]{
        border: none;
        height: 40px;
        outline: none;
        font-size: 15px;
        background-color: darkgrey;
        cursor: pointer;
        border-radius: 20px;

      }

  }
  </style>;

<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Medika</title>

		<!--Favicon -->
		<link rel="icon" href="favicon.html" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="assets1/plugins/bootstrap/css/bootstrap.min.css">

		<!--Icons css-->
		<link rel="stylesheet" href="assets1/css/icons.css">

		<!--Style css-->
		<link rel="stylesheet" href="assets1/css/style.css">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="assets1/plugins/scroll-bar/jquery.mCustomScrollbar.css">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="assets1/plugins/toggle-menu/sidemenu.css">

		<!--Morris css-->
		<link rel="stylesheet" href="assets1/plugins/morris/morris.css">

	</head>

	<body class="app ">
	<div class="wave -three"></div>



		<!--app open-->
		<div id="app" class="page">
			<div class="main-wrapper" >

			    <!--anv open-->
				<nav class="navbar navbar-expand-lg main-navbar">
			<a class="header-brand" href="index1.php">
						<img src="assets1/img/brand/logo-white.png" class="header-brand-img" alt="Splite-Admin  logo">
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
					<!--<form class="form-inline mr-auto">
						<ul class="navbar-nav mr-2">
							<li><a href="#" data-toggle="sidebar" class="nav-link nav-link toggle"><i class="fa fa-reorder"></i></a></li>
							<li><a href="#" data-toggle="search" class="nav-link nav-link d-md-none navsearch"><i class="fa fa-search"></i></a></li>
						</ul>
						<div class="search-element mr-3">
							<input class="form-control" type="search" placeholder="Search" aria-label="Search">
							<span class="Search-icon"><i class="fa fa-search"></i></span>
						</div>
					</form> -->
					<ul class="navbar-nav navbar-center">
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
						<li class="dropdown dropdown-list-toggle "><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><span class="badge badge-danger nav-link-badge">0</span><i class="hvr-buzz fa fa-envelope-o"></i></a>
							<div class="dropdown-menu dropdown-list dropdown-menu-right">
								<div class="dropdown-header">Messages
									<div class="float-right">
										<a href="#" class="text-white">View All</a>
									</div>
								</div>
								
						</li>
						<li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><span class="badge badge-secondary nav-link-badge">0</span><i class="fa fa-bell-o"></i></a>
							<div class="dropdown-menu dropdown-list dropdown-menu-right">
								<div class="dropdown-header">Notifications
									<div class="float-right">
										<a href="#" class="text-white">View All</a>
									</div>
								</div>
								
						</li>
						<li class="dropdown dropdown-list-toggle d-none d-lg-block">
							<a href="#" class="nav-link nav-link-lg full-screen-link">
								<i class="fa fa-expand " id="fullscreen-button"></i>
							</a>
						</li>
						<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg d-flex">
								
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="Inscription.php"><i class="mdi mdi-settings mr-2"></i> <span>Sign up</span></a>

								<a class="dropdown-item" href="Login.php"><i class="mdi mdi-settings mr-2"></i> <span>Login</span></a>

								
								<a class="dropdown-item" href="compte.php"><i class="mdi mdi-account-outline mr-2"></i> <span>My Profile</span></a>
								
								<div class="dropdown-divider"></div><a class="dropdown-item" href="Login.php"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Logout</span></a>
							</div>
						</li>
					</ul>
				</nav>
				<!--nav closed-->



<!-- STAAAAAAAAAAART -->

<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">
							<center><h4 class="page-title" style="color:;font-family: "Times New Roman", Times, serif">Medika</h4></center>
						</div>
						<div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">                            
                <a id="mu-abtus-video" href="https://www.youtube.com/embed/HN3pm9qYAUs" target="mutube-video">
                  <img src="assets1/img/about-us.jpg" alt="img">
                </a>                
                </div>
              </div>
						<!--page-header closed-->

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
		<script src="js/form.js"></script>
		<script src="assets1/js/jquery.showmore.js"></script>

				<script src="assets1/js/editable.js"></script>
		<script src="assets1/js/datatable.js"></script>

<!--DataTables js-->
		<script src="assets1/plugins/Datatable/js/jquery.dataTables.js"></script>
		<script src="assets1/plugins/Datatable/js/dataTables.bootstrap4.js"></script>
		<script src="assets1/plugins/Datatable/js/dataTables.buttons.min.js"></script>
		<script src="assets1/plugins/Datatable/js/buttons.bootstrap4.min.js"></script>
		<script src="assets1/plugins/Datatable/js/jszip.min.js"></script>
		<script src="assets1/plugins/Datatable/js/pdfmake.min.js"></script>
		<script src="assets1/plugins/Datatable/js/vfs_fonts.js"></script>
		<script src="assets1/plugins/Datatable/js/buttons.html5.min.js"></script>
		<script src="assets1/plugins/Datatable/js/buttons.print.min.js"></script>
		<script src="assets1/plugins/Datatable/js/buttons.colVis.min.js"></script>



	 </body>


</html>