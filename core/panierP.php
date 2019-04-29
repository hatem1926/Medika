<?php


include "../config2.php";



class panierP
{
	function ajouter($panier)
	{
		
		$sql="insert into panier (idc,nom,total) values (:idc,:nom,:total)";
		$db=config2::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$idc=$panier->getidc();
			$nom=$panier->getnom();
			$total=$panier->gettotal();
			$req->bindValue(':idc',$idc);
			$req->bindValue(':nom',$nom);
			$req->bindValue(':total',$total);
			$req->execute();
		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}

	function afficherpanier()
	{
		$sql="select * from panier";
		$db=config2::getConnexion();
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


	function supprimerpanier($idpanier)
	{

		$sql="DELETE FROM panier where idpanier=:idpanier";

		$db = config2::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idpanier',$idpanier);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	
	
}