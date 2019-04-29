<?php 
class ldc
{
	private $idc;
	private $idldc;
	private $produitldc;
	private $prixldc;
	private $quantiteldc;
	private $total;



	function __construct($idc,$idldc,$produitldc,$prixldc,$quantiteldc)
	{
		$this->idc=$idc;
		$this->idldc=$idldc;
		$this->produitldc=$produitldc;
		$this->prixldc=$prixldc;
		$this->quantiteldc=$quantiteldc;
		$this->total=$quantiteldc*$prixldc;

	}

    function getidc() {return $this->idc ;}
    function getidldc() {return $this->idldc ;}
    function getproduitldc() {return $this->produitldc ;}
    function getprixldc() {return $this->prixldc ;}
    function getquantiteldc() {return $this->quantiteldc ;}
    function gettotal() {return $this->total ;}


    function setidc($idc) {$this->idc=$idc ;}
    function setidldc($idldc) {$this->idldc=$idldc ;}
    function setproduitldc($produitldc) {$this->produitldc=$produitldc ;}
    function setprixldc($prixldc) {$this->prixldc=$prixldc ;}
    function setquantiteldc($quantiteldc) {$this->quantiteldc=$quantiteldc ;}
    function settotal($total) {$this->total=$total ;}


}


 ?>