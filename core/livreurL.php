<?php


include "../config.php";

class livreurL 
{
	function ajouter($livreur)
	{
		$sql="insert into Livreur (nom,prenom,tel,email,etat) values (:id,:nom,:prenom,:tel,:email,:etat)";
		$db=config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$nom=$Livreur->getnom();
			$prenom=$Livreur->getprenom();
			$tel=$Livreur->gettel();
			$email=$Livreur->getemail();
			$etat=$Livreur->getetat();
			$req->bindValue(':nom',$nom);
			$req->bindValue(':prenom',$prenom);
			$req->bindValue(':tel',$tel);
			$req->bindValue(':email',$email);
			$req->bindValue('etat',$etat);
			$req->execute();





		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}

	function afficherlivreur()
	{
		$sql="select * from Livreur";
		$db=config::getConnexion();
		try
		{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}

	function supprimerlivreur($id)
	{

		$sql="DELETE FROM Livreur where id=:id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierlivreur($livreur,$id)
	{

		 $sql="UPDATE Livreur SET nom=:nom prenom=:prenom, tel=:tel, email=:email,etat=:etat WHERE id=:id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$id=$Livreur->getid();
        $nom=$Livreur->getnom();
        $prenom=$Livreur->getprenom();
        $tel=$Livreur->gettel();
         $email=$Livreur->getemail();
        $etat=$Livreur->getetat();
		$datas = array(':id'=>$id,':nom'=>$nom,':prenom'=>$prenom,':tel'=>$tel,':email'=>$email, 'etat'=>$etat);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);	
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':emal',$email);
		$req->bindValue('etat',$etat);
		
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}

	function getid($id){
		$sql="SELECT * from livreur where id=$id";
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

