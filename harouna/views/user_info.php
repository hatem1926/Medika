<?php 


class user_info
{
//include "../config.php";

private $nom;
private $telephpne;
private $date_n;
private $compagny;
private $adresse;
private $city;
private $code_poste;
private $country;
private $region;

public function __construct()
{

	
}
{

public function __construct($nom=null,$telephpne=null,$date_n=null,$compagny=null,$adresse=null,$city=null,$code_poste=null,$country=null,$region=null)
{
$this->nom=$nom;
$this->telephpne=$telephpne;
$this->date_n=$date_n;
$this->compagny=$compagny;
$this->adresse=$adresse;
$this->city=$city;
$this->code_poste=$code_poste;
$this->country=$country;
$this->region=$region;


//$this->picture=$picture;
//$this->role=$role;
}


public function getNom()
{
  return $this->nom;
}
public function setNom($nom)
{
  $this->nom=$nom;
}
public function getTel()
{
return $this->telephpne;	
}

public function getDate_n()
{
return $this->date_n;	
}

public function getCompagny()
{
return $this->compagny;	
}

public function getAdress()
{
return $this->adresse;	
}

public function getCity()
{
return $this->city;	
}

public function getCode_p()
{
return $this->code_poste;	
}

public function getCountry()
{
return $this->country;	
}

public function getRegion()
{
return $this->region;	
}

 public function __construct($nom, $tel, $date_n, $compagny, $adresse, $city, $code_poste,$country,$region) {
      //$this->iduser  = $iduser;
      $this->nom  = $nom;
      $this->tel = $tel;
      $this->date_n = $date_n;
      $this->compagny= $city;
      $this->adresse= $adresse;
      $this->city= $city;
      $this->country= $country;
      $this->code_poste= $code_poste;
       $this->region= $region;
    }


public static function AddUser($nom=null,$tel=null,$date_n=null,$compagny=null,$adresse=null,$city=null,$code_poste=null,$country=null,$region=null)
{
 

   
$req=Db::getconnetion()->prepare('INSERT INTO user_info(nom,tel,date_n,compagny,adresse,city,poste_code,country,region) VALUES (:nom,:telephpne,:date_n,:compagny,:adresse,:city,:poste_code,:country,:region)');
$req->execute(
array(
'nom'=>$nom,
'telephpne'=>$tel,
'date_n'=>$date_n,
'compagny'=>$compagny,
'adresse'=>$adresse,
'city'=>$poste_code,
'country'=>$country,
'region'=>$region,

  )
  );
}


 public static function all() {
      $liste = [];
      $db = Db::getconnetion();
      $req = $db->query('SELECT * FROM user_info');
      foreach($req->fetchAll() as $user) {
      $liste[] = new user($user['nom'], $user['telephpne'], $user['date_n'], $user['compagny'],
                             $user['adresse'], $user['city'], $user['code_poste'],$user['country'], $user['region']);
      
      }
      return $liste;
    }



function udapte()
{



	    $db= Db::getconnetion()->query('UPDATE user_info SET nom="'.$nom.'",telephpne="'.$tel.'",date_n="'.$date_n.'",compagny="'.$adresse.'",city="'.$city.'",code_poste="'.$code_poste.'",country="'.$country.'",region="'.$region.'" WHERE user_id="'.$id.'" ');
}

 ?>