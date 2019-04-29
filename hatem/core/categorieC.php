<?php


include "../config1.php";

class categorieC
{
	function ajouter($categorie)
	{
		$sql="insert into categorie (nomcategorie) values (:nomcategorie)";
		$db=config1::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			//$idcategorie=$categorie->getidcategorie();
			$nomcategorie=$categorie->getnomcategorie();
			//$req->bindValue(':idcategorie',$idcategorie);
			$req->bindValue(':nomcategorie',$nomcategorie);
			$req->execute();





		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}

	function affichercategorie()
	{
		$sql="select * from categorie order by idcategorie";
		$db=config1::getConnexion();
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

	function resetidcategorie()
	{
		$sql="alter table categorie AUTO_INCREMENT = 0";
		$db=config1::getConnexion();
		$gereset = mysqli_query($db,$sql);

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

	function supprimercategorie($idcategorie)
	{

		$sql="DELETE FROM categorie where idcategorie=:idcategorie";

		$db = config1::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idcategorie',$idcategorie);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

        $sql1="ALTER TABLE categorie AUTO_INCREMENT=0";
$db1 = config1::getConnexion();
        $req1=$db1->prepare($sql1);
		$req1->bindValue(':idcategorie',$idcategorie);
		try{
            $req1->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifiercategorie($categorie,$idcategorie)
	{

		 $sql="UPDATE categorie SET nomcategorie=:nomcategorie WHERE idcategorie=:idcategorie";
		
		$db = config1::getConnexion();
try{		
        $req=$db->prepare($sql);
		$idcategorie=$categorie->getidcategorie();
        $nomcategorie=$categorie->getnomcategorie();
		$datas = array(':idcategorie'=>$idcategorie,':nomcategorie'=>$nomcategorie);
		$req->bindValue(':idcategorie',$idcategorie);
		$req->bindValue(':nomcategorie',$nomcategorie);	
		
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}

	function getidcategorie($idcategorie){
		$sql="SELECT * from categorie where idcategorie=$idcategorie";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
}