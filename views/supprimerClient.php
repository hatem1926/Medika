<?PHP
include "../core/clientC.php";
$clientC=new ClientC();
if (isset($_POST["username"])){
	$clientC->supprimerClient($_POST["username"]);
	header('Location: gclient.php');
}

?>