<HTML>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Modifier</title>
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
    </nav>
	
<?PHP

include "../entities/client.php";
include "../core/clientC.php";
if (isset($_GET['username'])){
	$clientC=new ClientC();
    $result=$clientC->recupererClient($_GET['username']);
	foreach($result as $row){
		$username=$row['username'];
		$password=$row['password'];
		$age=$row['age'];
		$numtel=$row['numtel'];
		$email=$row['email'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];

?>
<p><br>.<br><br></p>
<form method="POST">
	<center>
<table class="table table-bordered mb-0 text-nowrap" style="width: 50%">
<caption>Modifier Client</caption>
<tr>
<td>username</td>
<td><input type="text" name="username" value="<?PHP echo $username ?>" style="width: 100%" ></td>
</tr>
<tr>
<td>password</td>
<td><input type="password" name="password" value="<?PHP echo $password ?>"  style="width: 100%"></td>
</tr>
<tr>
<td>age</td>
<td><input type="number" name="age" value="<?PHP echo $age ?>"  style="width: 100%"></td>
</tr>
<tr>
<td>numtel</td>
<td><input type="number" name="numtel" value="<?PHP echo $numtel ?>"  style="width: 100%"></td>
</tr>
<tr>
<td>email</td>
<td><input type="email" name="email" value="<?PHP echo $email ?>"  style="width: 100%"></td>
</tr>
<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"  style="width: 100%"></td>
</tr>
<tr>
<td>prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"  style="width: 100%"></td>
</tr>
</table>

<input type="submit" name="modifier" value="Modifier" style="background-color: gold; width: 200px; height: 50px; box-shadow: 3px 3px 3px; border-radius: 10px">
<input type="hidden" name="username_ini" value="<?PHP echo $_GET['username'];?>">

</center>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$client=new client($_POST['username'],$_POST['password'],$_POST['age'],$_POST['numtel'],$_POST['email'],$_POST['nom'],$_POST['prenom']);
	$clientC->modifierclient($client,$_POST['username_ini']);
	echo $_POST['username_ini'];
}

?>


</body>
</HTMl>