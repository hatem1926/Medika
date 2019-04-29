<?PHP
include "../core/ldcL.php";
$ldc=new ldcL();
if (isset($_POST["idldc"])){
    $ldc->supprimerldc($_POST["idldc"]);
header('Location: panier.php');
}
else
{
	
}

?>