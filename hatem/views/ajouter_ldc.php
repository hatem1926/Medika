<?php
include "../entities/ldc.php";
include "../core/ldcL.php";
include "../entities/panier.php";
include "../core/panierP.php";

$ldc=new ldcL();
$x = $ldc->count($_POST['nomproduit']);
foreach ($x as $row) {
	$y= $row['a'];
	if (isset($_POST['nomproduit']) && isset($_POST['prixproduit']) && isset($_POST['idc']))
{
if ($y==0)
{
$ldc=new ldc($_POST['idc'],$_POST['idldc'],$_POST['nomproduit'],$_POST['prixproduit'],$_POST['quantiteldc'],$_POST['total']);
$ldcL=new ldcL();
$ldcL->ajouter($ldc);	
$lddc=new ldcL();
$z = $lddc->sum($_POST['idc']);

foreach ($z as $va) {
	$c= $va['a'];
	echo $c;
	$panier=new panier($_POST['idpanier'],$_POST['idc'],$_POST['nom'],$c);	
$panierP=new panierP();
$panierP->ajouter($panier);
	}


header('Location: produit.php');
}
else 
{

	$ldcc=new ldcL();
$z = $ldcc->getQ($_POST['nomproduit']);
foreach ($z as $v) {
	$y= $v['a'];
	$y=$y+1;
	$ldccc=new ldcL();
$a = $ldccc->getT($_POST['nomproduit']);
foreach ($a as $i) {
	$a= $i['a'];
	$a=$a+$_POST['prixproduit'];
	$ldcL=new ldcL();
	$ldc->modifierQ($y,$a,$_POST['nomproduit']);
	//echo "DOOONE";
	header('Location: produit.php');
}
}
	

}



}
else
echo "nnnnnnnnnnnnnnnnnnnnnnnn";
}


?>

