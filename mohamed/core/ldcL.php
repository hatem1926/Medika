<?php


include "../config1.php";



class ldcL
{
	function ajouter($ldc)
	{
		
		$sql="insert into ldc (idc,produitldc,prixldc,total) values (:idc,:produitldc,:prixldc,:prixldc)";
		$db=config1::getConnexion();
		try
		{
			$req=$db->prepare($sql);

			$idc=$ldc->getidc();
			$produitldc=$ldc->getproduitldc();
			$prixldc=$ldc->getprixldc();
			//$quantiteldc=$ldc->getquantiteldc();
			//$total=$ldc->gettotal();

			$req->bindValue(':idc',$idc);
			$req->bindValue(':produitldc',$produitldc);
			$req->bindValue(':prixldc',$prixldc);
			//$req->bindValue(':quantiteldc',$quantiteldc);

			$req->execute();





		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}

	function afficherldc()
	{
		$sql="select * from ldc order by idldc";
		$db=config1::getConnexion();
		try
		{
			$result=$db->query($sql);
			        $result->execute();
        $liste= $result->fetchALL(PDO::FETCH_OBJ);
        return $liste;
		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}

	function resetidldc()
	{
		$sql="alter table ldc AUTO_INCREMENT = 0";
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

	function supprimerldc($idldc)
	{

		$sql="DELETE FROM ldc where idldc=:idldc";

		$db = config1::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idldc',$idldc);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }


	}

	function supprimerldc1($idc)
	{

		$sql="DELETE FROM ldc where idc=:idc";

		$db = config1::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idc',$idc);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }


	}

	function modifierldc($quantiteldc,$total,$idldc)
	{

		 $sql="UPDATE ldc SET quantiteldc=:quantiteldc, total=:total WHERE idldc=:idldc";
		
		$db = config1::getConnexion();
try{		
        $req=$db->prepare($sql);

			$req->bindValue(':idldc',$idldc);	
			$req->bindValue(':total',$total);	
			$req->bindValue(':quantiteldc',$quantiteldc);

		
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}

	function modifierQ($quantiteldc,$total,$produitldc)
	{

		 $sql="UPDATE ldc SET quantiteldc=:quantiteldc, total=:total WHERE produitldc=:produitldc";
		
		$db = config1::getConnexion();
try{		
        $req=$db->prepare($sql);

			$req->bindValue(':produitldc',$produitldc);	
			$req->bindValue(':quantiteldc',$quantiteldc);
			$req->bindValue(':total',$total);

		
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}

	function getidldc($idldc){
		$sql="SELECT * from ldc where idldc=$idldc";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function af($idc){
		$sql="SELECT * from ldc where idc=idc";
		$db = config1::getConnexion();
		try{
		$result=$db->query($sql);
			        $result->execute();
        $liste= $result->fetchALL(PDO::FETCH_OBJ);
        return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function count($produitldc){
		$sql="SELECT count(*) a from ldc where produitldc=:produitldc";
		$db=config1::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindParam(':produitldc',$produitldc);
			$req->execute();
			$x=$req->fetchALL();
			return $x;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function sum($idc){
		$sql="SELECT sum(total) a from ldc where idc=:idc";
		$db=config1::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindParam(':idc',$idc);
			$req->execute();
			$x=$req->fetchALL();
			return $x;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function getQ($produitldc){
		$sql="SELECT quantiteldc a from ldc where produitldc=:produitldc";
		$db=config1::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindParam(':produitldc',$produitldc);
			$req->execute();
			$x=$req->fetchALL();
			return $x;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function getT($produitldc){
		$sql="SELECT total a from ldc where produitldc=:produitldc";
		$db=config1::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindParam(':produitldc',$produitldc);
			$req->execute();
			$x=$req->fetchALL();
			return $x;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
}