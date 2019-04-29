 
<?php  


$bdd = 'Harouna'; /* Base de donn&eacute;es */
   $host= 'localhost'; /* Hote (localhost en principe) */
   $user= 'root'; /* Utilisateur */
   $pass= '';

// Connessione al database


// Connessione al database
$connexion = new mysqli($host, $user, $pass, $bdd);

 if ($connexion->connect_error) {
    die('Connect Error (' . $connexion->connect_errno . ') '
            . $connexion->connect_error);
      }
 
 
 

    ?>