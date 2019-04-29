<?php 
class produit
{
	private $idproduit;
	private $nomproduit;
	private $prixproduit;
	private $quantiteproduit;
	private $descproduit;
	private $categorieproduit;
	private $souscategorieproduit;


	function __construct($idproduit,$nomproduit,$prixproduit,$quantiteproduit,$descproduit,$categorieproduit,$souscategorieproduit)
	{
		$this->idproduit=$idproduit;
		$this->nomproduit=$nomproduit;
		$this->prixproduit=$prixproduit;
		$this->quantiteproduit=$quantiteproduit;
		$this->descproduit=$descproduit;
		$this->categorieproduit=$categorieproduit;
		$this->souscategorieproduit=$souscategorieproduit;

	}

    function getidproduit() {return $this->idproduit ;}
    function getnomproduit() {return $this->nomproduit ;}
    function getprixproduit() {return $this->prixproduit ;}
    function getquantiteproduit() {return $this->quantiteproduit ;}
    function getdescproduit() {return $this->descproduit ;}
    function getcategorieproduit() {return $this->categorieproduit ;}
    function getsouscategorieproduit() {return $this->souscategorieproduit;}


    function setidproduit($idproduit) {$this->idproduit=$idproduit ;}
    function setnomproduit($nomproduit) {$this->nomproduit=$nomproduit ;}
    function setprixproduit($prixproduit) {$this->prixproduit=$prixproduit ;}
    function setquantiteproduit($quantiteproduit) {$this->quantiteproduit=$quantiteproduit ;}
    function setdescproduit($descproduit) {$this->descproduit=$descproduit ;}
    function setcategorieproduit($categorieproduit) {$this->categorieproduit=$categorieproduit;}
    function setsouscategorieproduit($souscategorieproduit) {$this->souscategorieproduit=$souscategorieproduit;}


}


 ?>

 