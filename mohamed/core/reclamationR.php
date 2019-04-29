<?php


include "../config4.php";



class reclamationR 
{
	function ajouter($reclamation)
	{
		$sql="insert into reclamation (idproduit,idclient,nomclient,emailclient,descreclamation,choix) values (:idproduit,:idclient,:nomclient,:emailclient,:descreclamation,:choix)";
		$db=config4::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$idproduit=$reclamation->getidproduit();
			$idclient=$reclamation->getidclient();
			$nomclient=$reclamation->getnomclient();
			$emailclient=$reclamation->getemailclient();
			$descreclamation=$reclamation->getdescreclamation();
			//$reponse=$reclamation->getreponse();
			$choix=$reclamation->getchoix();
			$req->bindValue(':idproduit',$idproduit);
			$req->bindValue(':idclient',$idclient);
			$req->bindValue(':nomclient',$nomclient);
			$req->bindValue(':emailclient',$emailclient);
			$req->bindValue(':descreclamation',$descreclamation);
			//$req->bindValue(':reponse',$reponse);
			$req->bindValue(':choix',$choix);
			$req->execute();





		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}

	function afficherreclamation()
	{
		$sql="select * from reclamation";
		$db=config4::getConnexion();
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

	function supprimerrec($idclient)
	{

		$sql="DELETE FROM reclamation where idclient=:idclient";
		$db = config4::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idclient',$idclient);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierrec($reclamation,$idclient)
	{

		 $sql="UPDATE reclamation SET emailclient=:emailclient, choix=:choix, descreclamation=:descreclamation WHERE idclient=:idclient";
		
		$db = config4::getConnexion();
try{		
        $req=$db->prepare($sql);
		$idreclamation=$reclamation->getidreclamation();
			$idclient=$reclamation->getidclient();
			$nomclient=$reclamation->getnomclient();
			$emailclient=$reclamation->getemailclient();
			$descreclamation=$reclamation->getdescreclamation();
		$datas = array(':idreclamation'=>$idreclamation,':idclient'=>$idclient,':nomclient'=>$nomclient,':emailclient'=>$emailclient, 'descreclamation'=>$descreclamation);
		$req->bindValue(':idreclamation',$idreclamation);
			$req->bindValue(':idclient',$idclient);
			$req->bindValue(':nomclient',$nomclient);
			$req->bindValue(':emailclient',$emailclient);
			$req->bindValue(':descreclamation',$descreclamation);
		
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}

	function affR($idclient){
		$sql="SELECT * from reclamation where idclient=$idclient";
		$db = config4::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	
}

