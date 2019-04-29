<?php
session_start();
include "../core/clientC.php";
$cond1='';
$cond2='';
if (isset($_POST['email']) ) 
{
$clientC=new clientC();
$result=$clientC->recuperermail($_POST['email']);
  if($result->rowCount() != 0)
  {
  foreach($result as $row){
    $username=$row['username'];
    $mail=$row['email'];
   

 

 $to       = $mail;
$subject  = 'Mot de passe oublié';
$message  = 'Salut Cher Client  Voici votre Nom d utilisateur  : '. $username ;
$headers  = 'From: medika.parapharmacie@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
           mail($to, $subject, $message, $headers);
           header('Location: returnpassword.php'); 



}
}
    else
    {
      $cond2="mail n'existe pas ";
    }
}


else
{
  echo "";
}
?>
<HTML>
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mdp oublié</title>
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
  <style>
  
            #ABC {
                background-color: #1D47BC;
            }
        </style>
  <!--<section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON 
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
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
        </div><!--/.nav-collapse         
      </div>     
    </nav>
  -->
  <p><br>.<br><br></p>
<form name="f" method="POST" >
     <center>
      <p>E-mail :</p>
      <input type="text" name="email" id="email" placeholder="Ecrire l'adresse e-mail" required>
             <br/><p> <?php echo $cond1 ?></p>

      
    
  </br></br>
     <input type="submit" value="Confirmer" style="border: none;
        height: 40px;
        outline: none;
        font-size: 15px;
        background-color: darkgrey;
        cursor: pointer;
        border-radius: 20px;" >
        </form>
                     </center>



</body>
</HTMl>