<?PHP
include "../core/cfC.php";
$cfC=new CfC();
if (isset($_POST["username"])){
	$cfC->supprimerCf($_POST["username"]);
	header('Location: gcartef.php');
}

?>