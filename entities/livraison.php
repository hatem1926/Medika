<?PHP
class LivraisonC{
	




	private $name;
	private $firstname;
	private $email;
	private $tel;
	private $region;
	private $etat;
	function __construct($nom,$prenom,$email,$telephone,$region,$etat){
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->email=$email;
        $telephone=intval($telephone);
		$this->telephone=$telephone;             //$rms=intval($rms);
		$this->ville=$ville;
		$nbre=intval($nbre);
		$this->nbre=$nbre;
		$this->type=$type;
		$this->desc=$desc;
	}
	
	
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getEmail(){
		return $this->email;
	}
	function getTelephone(){
		return $this->telephone;
	}
	function getVille(){
		return $this->ville;
	}
	function getnbre(){
		return $this->nbre;
	}

	function getType(){
		return $this->type;
	}
	function getDesc(){
		return $this->desc;
	}




	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setEmail($email){
		$this->email=$email;
	}

	function setTelephone($telephone){
		$telephone=intval($telephone);
		$this->telephone=$telephone;
	}
	function setVille($ville){
		$this->ville=$ville;
	}
	function setnbre($nbre){
			$nbre=intval($nbre);
		$this->nbre=$nbre;
	}
	function setType($type){
		$this->type=$type;
	}
	function setDesc($desc){
		$this->desc=$desc;
	}
	
}

?>