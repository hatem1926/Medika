<?php 
class categorie
{
	private $idcategorie;
	private $nomcategorie;



	function __construct($idcategorie,$nomcategorie)
	{
		$this->idcategorie=$idcategorie;
		$this->nomcategorie=$nomcategorie;

	}

    function getidcategorie() {return $this->idcategorie ;}
    function getnomcategorie() {return $this->nomcategorie ;}


    function setidcategorie($idcategorie) {$this->idcategorie=$idcategorie ;}
    function setnomcategorie($nomcategorie) {$this->nomcategorie=$nomcategorie ;}


}


 ?>