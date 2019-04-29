
<?php 

if(isset($_POST['formadmin'])) {
   $pseudoa = htmlspecialchars($_POST['noma']);
   $maila = htmlspecialchars($_POST['maila']);
   $maila2 = htmlspecialchars($_POST['maila2']);
   $mdpa = $_POST['mdpa'];
   $mdpa2 = $_POST['mdpa2'];
    
   
   if(!empty($_POST['noma']) AND !empty($_POST['maila']) AND !empty($_POST['maila2']) AND !empty($_POST['mdpa']) AND !empty($_POST['mdpa2'])) {
      $pseudolength = strlen($pseudoa);
      if($pseudolength <= 255) {
         if($maila == $maila2) {
            if(filter_var($maila, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM admin WHERE mail = ?");
               $reqmail->execute(array($maila));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdpa == $mdpa2) {
                     $insertmbr = $bdd->prepare("INSERT INTO admin(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($pseudoa, $maila, $mdpa));
                     $erreur = "Votre compte a bien été créé ! ";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } else {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}

?>