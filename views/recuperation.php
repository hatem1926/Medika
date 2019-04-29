<?php
include "../core/clientC.php";



 if(isset($_POST['recup_submit'],$_POST['recup_mail'])) {
 if(!empty($_POST['recup_mail'])){
 	if(filter_var($mail,FILTER_VALIDATE_EMAIL)) {
 		$mailexist = $db->prepare('SELECT * FROM client WHERE email= ?');
 		$mailexist->execute(array($recup_mail));
        $mailexist = $mailexist->rowCount();
 		if ($mailexist == 1) {
 		} else {
 			$error ="Cette adresse mail n'est pas enregistrée ";
 		}
 	} else {
 		$error = "Adresse email invalide";
 	}

 } else {
       $error= "Veuillez entrer votre adresse email";

 } 
 }
 require_once('Recup.php');
 ?>