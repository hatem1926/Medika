<?php
include "../entities/reclamation.php";
include "../core/reclamationR.php";

if (isset($_POST['idproduit']) && isset($_POST['idclient']) && isset($_POST['nomclient']) && isset($_POST['emailclient']) && isset($_POST['descreclamation']) && isset($_POST['choix']))
{
$reclamation=new reclamation($_POST['idreclamation'],$_POST['idproduit'],$_POST['idclient'],$_POST['nomclient'],$_POST['emailclient'],$_POST['descreclamation'],$_POST['reponse'],$_POST['choix']);
$reclamationR=new reclamationR();
$reclamationR->ajouter($reclamation);
header('Location: contact.php');

}
else
echo "nnnnnnnnnnnnnnnnnnnnnnnn";
?>

