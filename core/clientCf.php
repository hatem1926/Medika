<?PHP
class ClientC {

function afficherClient ($client){
		echo "username: ".$client->getUsername()."<br>";
		echo "password: ".$client->getPassword()."<br>";
		echo "age: ".$client->getAge()."<br>";
		echo "numtel: ".$client->getNumeroTel()."<br>";
		echo "email: ".$client->getEmail()."<br>";
	}
	
	function croi(){
		$sql="SELECT * From client ORDER BY age ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function decroi(){
		$sql="SELECT * From client ORDER BY age DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function alphacroi(){
		$sql="SELECT * From client ORDER BY username ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function alphadecroi(){
		$sql="SELECT * From client ORDER BY username DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function ajouterClient($client){
		$sql="insert into client(username,password,age,numtel,email) values(:username,:password,:age,:numtel,:email)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $username=$client->getUsername();
        $password=$client->getPassword();
        $age=$client->getAge();
        $numtel=$client->getNumeroTel();
        $email=$client->getEmail();
		$req->bindValue(':username',$username);
		$req->bindValue(':password',$password);
		$req->bindValue(':age',$age);
		$req->bindValue(':numtel',$numtel);
		$req->bindValue(':email',$email);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherClients(){
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerClient($username){
		$sql="DELETE FROM client where username= :username";
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
	function modifierClient($client,$username){
		$sql="UPDATE client SET username=:usernamen, password=:password,age=:age,numtel=:numtel,email=:email WHERE username=:username";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$usernamen=$client->getUsername();
        $password=$client->getPassword();
        $age=$client->getAge();
        $numtel=$client->getNumeroTel();
        $email=$client->getEmail();
		$datas = array(':usernamen'=>$usernamen, ':username'=>$username, ':password'=>$password,':age'=>$age,':numtel'=>$numtel,':email'=>$email);
		$req->bindValue(':usernamen',$usernamen);
		$req->bindValue(':username',$username);
		$req->bindValue(':password',$password);
		$req->bindValue(':age',$age);
		$req->bindValue(':numtel',$numtel);
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
	function recupererClient($username){
		$sql="SELECT * from client where username='$username'";
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