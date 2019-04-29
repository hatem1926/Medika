<?php
include "../entities/panier.php";
include "../core/panierP.php";
include "../entities/ldc.php";
include "../core/ldcL.php";
include "../entities/produit.php";
include "../core/produitP.php";

if (isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['total']))
{
$panier=new panier($_POST['idpanier'],$_POST['id'],$_POST['nom'],$_POST['total']);
$panierP=new panierP();
$panierP->ajouter($panier);
$ldc=new ldcL();
$liste=$ldc->af($_POST['id']);
foreach( $liste as $row )
{
 	$x=$row->produitldc;
 	$y=$row->quantiteldc;
 	$produit=new produitP();
 	$p=$produit->getQ($x);
 	foreach ($p as $i) {
	$p= $i['a'];
	$p=$p-$y;
	$produit->modifierQ($p,$x);
}

}
$ldc=new ldcL();
$ldc->supprimerldc1($_POST["id"]);
header('Location: produit.php');

}
else
echo "nnnnnnnnnnnnnnnnnnnnnnnn";
?>

