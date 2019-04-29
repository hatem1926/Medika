<?php


include "../config2.php";


class souscategorieC
{
	function ajouter($souscategorie)
	{


		$sql="insert into souscategorie (categorieparent,nomsouscategorie) values (:categorieparent,:nomsouscategorie)";
		$db=config2::getConnexion();
		try
		{

			$req=$db->prepare($sql);
			$categorieparent=$souscategorie->getcategorieparent();
			//$idsouscategorie=$souscategorie->getidsouscategorie();
			$nomsouscategorie=$souscategorie->getnomsouscategorie();
			$req->bindValue(':categorieparent',$categorieparent);
			//$req->bindValue(':idsouscategorie',$idsouscategorie);
			$req->bindValue(':nomsouscategorie',$nomsouscategorie);
			$req->execute();

		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}

	function affichersouscategorie()
	{
		$sql="select * from souscategorie";
		$db=config2::getConnexion();
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
	function affichersouscategorieP($a)
	{
		$sql="select nomsouscategorie from souscategorie where categorieparent=a";
		$db=config2::getConnexion();
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

	function supprimersouscategorie($idsouscategorie)
	{

		$sql="DELETE FROM souscategorie where idsouscategorie=:idsouscategorie";
		$db = config2::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idsouscategorie',$idsouscategorie);
		try{
            $req->execute();
      
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        $sql1="ALTER TABLE souscategorie AUTO_INCREMENT=0";
$db1 = config2::getConnexion();
        $req1=$db1->prepare($sql1);
		$req1->bindValue(':idsouscategorie',$idsouscategorie);
		try{
            $req1->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifiersouscategorie($souscategorie,$idsouscategorie)
	{

		 $sql="UPDATE souscategorie SET categorieparent=:categorieparent, nomsouscategorie=:nomsouscategorie WHERE idsouscategorie=:idsouscategorie";
		
		$db = config2::getConnexion();
try{		
        $req=$db->prepare($sql);
        $categorieparent=$souscategorie->getcategorieparent();
		$idsouscategorie=$souscategorie->getidsouscategorie();
        $nomsouscategorie=$souscategorie->getnomsouscategorie();
		$datas = array(':idsouscategorie'=>$idsouscategorie,':categorieparent'=>$categorieparent,':nomsouscategorie'=>$nomsouscategorie);
		$req->bindValue(':categorieparent',$categorieparent);
		$req->bindValue(':idsouscategorie',$idsouscategorie);
		$req->bindValue(':nomsouscategorie',$nomsouscategorie);	
		
		
            $s=$req->execute();
			
          
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}

	function getidsouscategorie($idsouscategorie){
		$sql="SELECT * from souscategorie where idsouscategorie=$idsouscategorie";
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
}