<?PHP
class cf{
	private $username;
	private $prenom;
	private $nom;
	private $rang;
	private $email;
	function __construct($username,$prenom,$nom,$rang,$email){
		$this->username=$username;
		$this->prenom=$prenom;
		$this->nom=$nom;
		$this->rang=$rang;
		$this->email=$email;
	}
	
	function getUsername(){
		return $this->username;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getNom(){
		return $this->nom;
	}
	function getRang(){
		return $this->rang;
	}
	function getEmail(){
		return $this->email;
	}

	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setRang($rang){
		$this->rang=$rang;
	}
	function setEmail($email){
		$this->email=$email;
	}
	
}

?>