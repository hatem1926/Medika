<?PHP
include "../config.php";
class demandeC {

function afficherCf ($cf){
		echo "username: ".$cf->getUsername()."<br>";
		echo "date: ".$cf->getDate()."<br>";
		
	
	function ajouterDemande($demande){
		$sql="insert into cf (username,date) values(:username,:date)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $username=$demande->getUsername();
        $prenom=$demande->getPrenom();
        
		$req->bindValue(':username',$username);
		$req->bindValue(':date',$date);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherDemandes(){
		$sql="SElECT * From demande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	
	function recupererCf($username){
		$sql="SELECT * from demande where username='$username'";
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