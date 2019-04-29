<?php 
class panier
{
	private $idpanier;
	private $idc;
	private $nom;
	private $total;




	function __construct($idpanier,$idc,$nom,$total)
	{
		$this->idpanier=$idpanier;
		$this->idc=$idc;
		$this->nom=$nom;
		$this->total=$total;
	}

    function getidpanier() {return $this->idpanier ;}
    function getidc() {return $this->idc ;}
    function getnom() {return $this->nom ;}
    function gettotal() {return $this->total ;}


     function setidpanier($idpanier) {$this->idpanier=$idpanier ;}
    function setidc($idc) {$this->idc=$idc ;}
    function setnom($nom) {$this->nom=$nom ;}
    function settotal($total) {$this->total=$total ;}


}


 ?>