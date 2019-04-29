<?PHP
include "../config.php";
class cfC {

function afficherCf ($cf){
		echo "username: ".$cf->getUsername()."<br>";
		echo "prenom: ".$cf->getPrenom()."<br>";
		echo "nom: ".$cf->getNom()."<br>";
		echo "rang: ".$cf->getRang()."<br>";
		echo "email: ".$cf->getEmail()."<br>";
	}
	
	
	function ajouterCf($cf){
		$sql="insert into cf (username,prenom,nom,rang,email) values(:username,:prenom,:nom,:rang,:email)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $username=$cf->getUsername();
        $prenom=$cf->getPrenom();
        $nom=$cf->getNom();
        $rang=$cf->getRang();
        $email=$cf->getEmail();
		$req->bindValue(':username',$username);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':rang',$rang);
		$req->bindValue(':email',$email);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCfs(){
		$sql="SElECT * From cf";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerCf($username){
		$sql="DELETE FROM cf where username= :username";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':username',$username);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCf($cf,$username){
		$sql="UPDATE cf SET username=:usernamen,prenom=:prenom,nom=:nom,rang=:rang,email=:email WHERE username=:username";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$usernamen=$cf->getUsername();
        $prenom=$cf->getPrenom();
        $nom=$cf->getNom();
        $rang=$cf->getRang();
        $email=$cf->getEmail();
		$datas = array(':usernamen'=>$usernamen, ':prenom'=>$prenom,':nom'=>$nom,':rang'=>$rang,':email'=>$email);
		$req->bindValue(':usernamen',$usernamen);
		$req->bindValue(':username',$username);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':rang',$rang);
		$req->bindValue(':email',$email);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCf($username){
		$sql="SELECT * from cf where username='$username'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>