<?php
include "../entities/produit.php";
include "../core/produitP.php";
$produit=new produitP();
if (isset($_POST["choose"])){
  $radioVal = $_POST["M"];

if($radioVal == "1")
{
$listeproduit=$produit->afficherproduit1();
}
else if ($radioVal == "2")
{
$listeproduit=$produit->afficherproduit1();
}
else if ($radioVal == "3")
{
$listeproduit=$produit->afficherproduit1();
}
else if ($radioVal == "4")
{
$listeproduit=$produit->afficherproduit1();
}
header('Location: Produit.php');
} 


?>

