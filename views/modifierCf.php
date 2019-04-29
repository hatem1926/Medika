<HTML>
<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Medika-Admin </title>

		<!--favicon -->
		<link rel="icon" href="favicon.html" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="assets1/plugins/bootstrap/css/bootstrap.min.css">

		<!--Icons css-->
		<link rel="stylesheet" href="assets1/css/icons.css">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="assets1/plugins/scroll-bar/jquery.mCustomScrollbar.css">

		<!--Style css-->
		<link rel="stylesheet" href="assets1/css/style.css">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="assets1/plugins/toggle-menu/sidemenu.css">

</head>
<body class="app">
	
<?PHP
include "../entities/cf.php";
include "../core/cfC.php";
if (isset($_GET['username'])){
	$cfC=new CfC();
    $result=$cfC->recupererCf($_GET['username']);
	foreach($result as $row){
		$username=$row['username'];
		$prenom=$row['prenom'];
		$nom=$row['nom'];
		$rang=$row['rang'];
		$email=$row['email'];
?>
<form method="POST">
	<section>
		<center>
<table>
<caption>Modifier Cf</caption>
<tr>
<td>username</td>
<td><input type="text" name="username" value="<?PHP echo $username ?>"></td>
</tr>
<tr>
<td>prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>rang</td>
<td><input type="text" name="rang" value="<?PHP echo $rang ?>"></td>
</tr>
<tr>
<td>email</td>
<td><input type="text" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="username_ini" value="<?PHP echo $_GET['username'];?>"></td>
</tr>
</table>
</center>
</section>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$cf=new cf($_POST['username'],$_POST['prenom'],$_POST['nom'],$_POST['rang'],$_POST['email']);
	$cfC->modifiercf($cf,$_POST['username_ini']);
	echo $_POST['username_ini'];
	header('Location: gcartef.php');
}
?>
</body>
</HTMl>