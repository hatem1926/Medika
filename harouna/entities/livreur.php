<?php 
class livreur
{
	private $id;
	private $nom;
	private $prenom;
	private $tel;
	private $email;
	private $etat;


	function __construct($id,$nom,$prenom,$tel,$email,$etat)
	{
		$this->id=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->tel=$tel;
		$this->email=$email;
		$this->etat=$etat;

	}

    function getid() {return $this->id ;}
    function getnom() {return $this->nom ;}
    function getprenom() {return $this->prenom ;}
    function gettel() {return $this->tel ;}
    function getemail() {return $this->email ;}
    function getetat() {return $this->etat ;}


    function setid($id) {$this->id=$id ;}
    function setnom($nom) {$this->nom=$nom ;}
    function setprenom($prenom) {$this->prenom=$prenom ;}
    function settel($tel) {$this->tel=$tel ;}
    function setemail($email) {$this->email=$email ;}
    function setetat($etat) {$this->etat=$etat;}


}


 ?>

 