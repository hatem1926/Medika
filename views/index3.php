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
  .aaa{
    margin: 0;
    padding: 10px; 
    font-family: Tahoma, Geneva, Verdana, sans-serif;
        border-radius:15px;
 
     box-shadow: 3px 3px 3px;
      border-radius: 10px

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

</style>


<script type="text/javascript" src="myjs.js"></script>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
         <style>
img { 
  height: 100%;
  width: 100%; 
}
</style>
<!--<img src="ars.jpg" alt="HTML5 Icon" style="">-->  

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets1/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets1/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets1/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets1/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets1/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets1/css/theme-color/default-theme.css" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="assets1/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body> 

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- End header  -->



  <!-- Start menu -->
  <style>
  
            #ABC {
                background-color: #1D47BC;
            }
        </style>
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <!--<a class="navbar-brand" href="index.html"><i class="fa fa-university"></i><span>Varsity</span></a>-->
          <!-- IMG BASED LOGO  -->
                   


           <!--<a class="navbar-brand" href="index.html"><img src="as.png" alt="logo"></a> 
        </div>-->
                <nav class="navbar navbar-expand-lg main-navbar">

        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="index2.php">ACCUEIL</a></li>            
            <li class="dropdown">
              <a href="ProduitBeauté.html" class="dropdown-toggle" data-toggle="dropdown">PRODUITS <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="ProduitBeauté.html">Beauté</a></li>                
                <li><a href="ProduitMaman&Bébé.html">Maman & Bébé</a></li>
                <li><a href="course-detail.html">Hygiène</a>
                </li>      <li><a href="course-detail.html">Orthopédie</a></li>         
              </ul>
            </li>           
            <li class="dropdown"><a href="gallery.html">BONS PLANS<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="course.html">Meilleur Produits</a></li>                
                <li><a href="course-detail.html">Nouveautés</a></li>                
             </ul></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">PANIER </a>
              
            </li>            
            <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
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