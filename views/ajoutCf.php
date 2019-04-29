<?PHP
include "../entities/cf.php";
include "../core/cfC.php";

if (isset($_POST['username']) and isset($_POST['prenom']) and isset($_POST['nom']) and isset($_POST['rang']) and isset($_POST['email'])){

$cf1=new cf($_POST['username'],$_POST['prenom'],$_POST['nom'],$_POST['rang'],$_POST['email']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$cf1C=new CfC();
$cf1C->ajouterCf($cf1);
header('Location: gcartef.php');
	
}
else{
	echo "vérifier les champs";
}
//*/

?>