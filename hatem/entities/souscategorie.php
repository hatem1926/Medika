<?php 
class souscategorie
{
	private $categorieparent;
	private $idsouscategorie;
	private $nomsouscategorie;




	function __construct($categorieparent,$idsouscategorie,$nomsouscategorie)
	{
		$this->categorieparent=$categorieparent;
		$this->idsouscategorie=$idsouscategorie;
		$this->nomsouscategorie=$nomsouscategorie;


	}

 
     function getcategorieparent() {return $this->categorieparent ;}
    function getidsouscategorie() {return $this->idsouscategorie ;}
    function getnomsouscategorie() {return $this->nomsouscategorie ;}
 


    function setidsouscategorie($idsouscategorie) {$this->idsouscategorie=$idsouscategorie ;}
    function setnomsouscategorie($nomsouscategorie) {$this->nomsouscategorie=$nomsouscategorie ;}
    function setcategorieparent($categorieparent) {$this->categorieparent=$categorieparent;}


}


 ?>