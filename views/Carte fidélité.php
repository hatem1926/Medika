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
      .form input[type=submit]{
        border: none;
        height: 40px;
        outline: none;
        font-size: 15px;
        background-color: darkgrey;
        cursor: pointer;
        border-radius: 20px;

      }

  }
/* width */
::-webkit-scrollbar {
  width: 10px;
  height: 30px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: darkblue; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: black; 
}
</style>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Carte fidelité</title>
         <style>
img { 
  height: 100%;
  width: 100%; 
}
</style>
<!--<img src="ars.jpg" alt="HTML5 Icon" style="">-->  

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
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

<div id="fond">

    <div id="contenu">
     <a href="Carte fidélité.html">Consulter CF</a> <br>
     <a href="Identification.html">S'identifier</a> <br>
     <a href="Inscription.html">Nouveau Compte</a> 
    </div>

</div>
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
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="index.html">ACCUEIL</a></li>            
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
    </nav>
  </section>
  <!-- End menu -->

   <div class="form">
        <h3 class="titre">Carte de fidelité</h3>
        <form method="POST" action="ajoutCf.php" >      
      <p>Username :</p>
      <input type="text" name="username" id="username" placeholder="Entrez l'username" required>
      <p>Prenom :</p>
      <input type="text" name="prenom" id="prenom" placeholder="Entrez le prénom" required>
      <p>Nom :</p>
      <input type="text" name="nom" id="nom" placeholder="Entrez le nom" required>
      <p>Rang :</p>
      <input type="text" name="rang" id="rang" placeholder="Entrez le rang" required>
      <p>E-mail :</p>
      <input type="text" name="email" id="email" placeholder="Entrez l'adresse E-mail" required>
  </br></br>
     <input type="submit" value="Ajouter">
   </form>
 </div>


  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            
            <!--<div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Student Help</h4>
                <ul>
                  <li><a href="">Get Started</a></li>
                  <li><a href="#">My Questions</a></li>
                  <li><a href="">Download Files</a></li>
                  <li><a href="">Latest Course</a></li>
                  <li><a href="">Academic News</a></li>                  
                </ul>
              </div>
            </div>-->
           
    
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  
  
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>