<?PHP
class client{
	private $username;
	private $password;
	private $age;
	private $numtel;
	private $email;
	private $nom;
	private $prenom;
	function __construct($username,$password,$age,$numtel,$email,$nom,$prenom){
		$this->username=$username;
		$this->password=$password;
		$this->age=$age;
		$this->numtel=$numtel;
		$this->email=$email;
		$this->nom=$nom;
		$this->prenom=$prenom;


	}
	
	function getUsername(){
		return $this->username;
	}
	function getPassword(){
		return $this->password;
	}
	function getAge(){
		return $this->age;
	}
	function getNumeroTel(){
		return $this->numtel;
	}
	function getEmail(){
		return $this->email;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}

	function setPassword($password){
		$this->password=$password;
	}
	function setAge($age){
		$this->age=$age;
	}
	function setNumeroTel($numtel){
		$this->numtel=$numtel;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
}

?>