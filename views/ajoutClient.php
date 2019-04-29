<?PHP
include "../entities/client.php";
include "../core/clientC.php";

if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['age']) and isset($_POST['numtel']) and isset($_POST['email']) and isset($_POST['nom']) and isset($_POST['prenom'])){

$client1=new client($_POST['username'],$_POST['password'],$_POST['age'],$_POST['numtel'],$_POST['email'],$_POST['nom'],$_POST['prenom']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$client1C=new ClientC();
$client1C->ajouterClient($client1);
header('Location: Login.php');

	
}
else{
	echo "vérifier les champs";
}
//*/

?>