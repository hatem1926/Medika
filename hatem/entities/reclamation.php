<?php 


class reclamation
{
	private $idreclamation;
	private $idproduit;
	private $idclient;
	private $nomclient;
	private $emailclient;
	private $descreclamation;
	private $reponse;
	private $choix;



	function __construct($idreclamation,$idproduit,$idclient,$nomclient,$emailclient,$descreclamation,$reponse,$choix)
	{
		
		$this->idreclamation=$idreclamation;
		$this->idproduit=$idproduit;
		$this->idclient=$idclient;
		$this->nomclient=$nomclient;
		$this->emailclient=$emailclient;
		$this->descreclamation=$descreclamation;
		$this->reponse=$reponse;
		$this->choix=$choix;

	}

    function getidreclamation() {return $this->idreclamation ;}
    function getidproduit() {return $this->idproduit ;}
    function getidclient() {return $this->idclient ;}
    function getnomclient() {return $this->nomclient ;}
    function getemailclient() {return $this->emailclient ;}
    function getdescreclamation() {return $this->descreclamation ;}
    function getreponse() {return $this->reponse ;}
    function getchoix() {return $this->choix ;}



    function setidreclamation($idreclamation) {$this->idreclamation=$idreclamation ;}
    function setidproduit($idproduit) {$this->idproduit=$idproduit ;}
    function setidclient($idclient) {$this->idclient=$idclient ;}
    function setnomclient($nomclient) {$this->nomclient=$nomclient ;}
    function setemailclient($emailclient) {$this->emailclient=$emailclient ;}
    function setdescreclamation($descreclamation) {$this->descreclamation=$descreclamation ;}
    function setreponse($reponse) {$this->reponse=$reponse ;}
    function setchoix($choix) {$this->choix=$choix ;}



}


 ?>

 