<?php


include "../config.php";

class produitP 
{
	


	function ajouter($produit)
	{
		$sql="insert into produit (nomproduit,prixproduit,quantiteproduit,descproduit,categorieproduit,souscategorieproduit) values (:nomproduit,:prixproduit,:quantiteproduit,:descproduit,:categorieproduit,:souscategorieproduit)";
		$db=config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			//$idproduit=$produit->getidproduit();
			$nomproduit=$produit->getnomproduit();
			$prixproduit=$produit->getprixproduit();
			$quantiteproduit=$produit->getquantiteproduit();
			$descproduit=$produit->getdescproduit();
			$categorieproduit=$produit->getcategorieproduit();
			$souscategorieproduit=$produit->getsouscategorieproduit();
			//$req->bindValue(':idproduit',$idproduit);
			$req->bindValue(':nomproduit',$nomproduit);
			$req->bindValue(':prixproduit',$prixproduit);
			$req->bindValue(':quantiteproduit',$quantiteproduit);
			$req->bindValue(':descproduit',$descproduit);
			$req->bindValue('categorieproduit',$categorieproduit);
			$req->bindValue('souscategorieproduit',$souscategorieproduit);
			$req->execute();





		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}
	public function rechercher_Produits($idproduit)
      {
        $db = config::getConnexion();
      $sql ="SELECT  * from produit where  idproduit=:idproduit ";

        $req=$db->prepare($sql);//cette fonction permet seulement la lecture ,permet de retourner un tableau de données
        $req->bindValue(':idproduit',$idproduit);
        $req->execute();
        $listproduit= $req->fetchALL(PDO::FETCH_OBJ);
        return $listproduit;
      }

	function afficherproduit()
	{
		$sql="select * from produit";
		$db=config1::getConnexion();
		try{
			$req=$db->prepare($sql);

			$req->execute();
			$x=$req->fetchALL();
			return $x;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function afficherproduit1($categorieproduit)
	{
		$sql="SELECT * from produit where categorieproduit=:categorieproduit";
		//$sql="SELECT quantiteldc a from ldc where produitldc=:produitldc";
		$db=config1::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindParam(':categorieproduit',$categorieproduit);
			$req->execute();
			$x=$req->fetchALL();
			return $x;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	

	function supprimerproduit($idproduit)
	{

		$sql="DELETE FROM produit where idproduit=:idproduit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idproduit',$idproduit);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        $sql1="ALTER TABLE produit AUTO_INCREMENT=0";
$db1 = config::getConnexion();
        $req1=$db1->prepare($sql1);
		$req1->bindValue(':idproduit',$idproduit);
		try{
            $req1->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierproduit($produit,$idproduit)
	{

		 $sql="UPDATE produit SET nomproduit=:nomproduit, prixproduit=:prixproduit, quantiteproduit=:quantiteproduit, descproduit=:descproduit, categorieproduit=:categorieproduit, souscategorieproduit=:souscategorieproduit WHERE idproduit=:idproduit";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$idproduit=$produit->getidproduit();
        $nomproduit=$produit->getnomproduit();
        $prixproduit=$produit->getprixproduit();
        $quantiteproduit=$produit->getquantiteproduit();
        $descproduit=$produit->getdescproduit();
        $categorieproduit=$produit->getcategorieproduit();
        $souscategorieproduit=$produit->getsouscategorieproduit();
		$datas = array(':idproduit'=>$idproduit,':nomproduit'=>$nomproduit,':prixproduit'=>$prixproduit, ':quantiteproduit'=>$quantiteproduit,':descproduit'=>$descproduit, ':categorieproduit'=>$categorieproduit, ':souscategorieproduit'=>$souscategorieproduit);
		$req->bindValue(':idproduit',$idproduit);
		$req->bindValue(':nomproduit',$nomproduit);	
		$req->bindValue(':prixproduit',$prixproduit);
		$req->bindValue(':quantiteproduit',$quantiteproduit);
		$req->bindValue(':descproduit',$descproduit);
		$req->bindValue(':categorieproduit',$categorieproduit);
		$req->bindValue(':souscategorieproduit',$souscategorieproduit);
		
		
		
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}

	function checkexist($produit){
		$sql="SELECT count(*) from produit where idproduit=idproduit";
		$db = config::getConnexion();
		try{
		$nbr=$db->query($sql);
		return $nbr;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
		function getidproduit($idproduit){
		$sql="SELECT * from produit where idproduit=$idproduit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function getQ($nomproduit){
		$sql="SELECT quantiteproduit a from produit where nomproduit=:nomproduit";
		$db=config1::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindParam(':nomproduit',$nomproduit);
			$req->execute();
			$x=$req->fetchALL();
			return $x;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierQ($quantiteproduit,$nomproduit)
	{

		 $sql="UPDATE produit SET quantiteproduit=:quantiteproduit WHERE nomproduit=:nomproduit";
		
		$db = config1::getConnexion();
try{		
        $req=$db->prepare($sql);

			$req->bindValue(':nomproduit',$nomproduit);	
			$req->bindValue(':quantiteproduit',$quantiteproduit);


		
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}

	public function trier($par)
      {
        $sql="SELECT * FROM produit order by $par  DESC";
          $db = config::getConnexion();
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

      public function aff($categorieproduit)
      {
        $sql="SELECT * FROM produit where categorieproduit=categorieproduit";
          $db=config::getConnexion();
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
}

