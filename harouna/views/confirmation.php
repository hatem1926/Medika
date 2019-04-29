<?php 
$bdd = new PDO('mysql:host=127.0.0.1;dbname=Harouna', 'root', '');
 if (isset($_GET['pseudo'],$_GET['key']) AND !empty($_GET['pseudo']) AND !empty($_GET['key'])) {
 	# code...
 $pseudo=  htmlspecialchars(urldecode($_GET['pseudo']));
 $key=htmlspecialchars($_GET['key']);
 $requser= $bdd->prepare("SELECT * FROM membre WHERE pseudo = ? AND confirmekey=?");
$requser->execute(array($pseudo,$key));
$userexist=$requser->rowCount();
if ($userexist==1) {
	$user=$requser->fetch();
	if ($user['confirmer']==0) {
		$updateuser=$bdd->prepare("UPDATE membre SET confirmer = 1 WHERE pseudo=? AND confirmekey=?");
		$updateuser->execute(array($pseudo,$key));
		
		echo "votre compte a été comfirmé";
	}else{
		echo "votre a deja ete confirmer";
	}
}
else{ echo "l'utilisateur n'existe pas";}
}

 ?>