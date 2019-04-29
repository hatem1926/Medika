<?PHP
include "/../config.php";
class LivraisonC {



function ajouterLivraison($rec){
		$sql="insert into Livraison (name,firstname,tel,email,region,etat) 
		         values (:name,:firstname,:tel,:email,:Desc,NOW(),:etat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $name=$Livraison->getname();
        $firstname=$Livraison->getPrename();
        $email=$Livraison->getEmail();
        $telephone=$Livraison->getTelephone();
        $ville=$Livraison->getVille();
		    $req->bindValue(':name',$name);
		    $req->bindValue(':firstname',$firstname);
		    $req->bindValue(':email',$email);
		    $req->bindValue(':tel',$tel);
		    $req->bindValue(':region',$region);
	      $req->bindValue(':etat',"non traite");

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	 public function afficherLivraison()
	 {
       
	  $req="SELECT * from `Livraison` where id = (SELECT MAX(id) as 'id' from Livraison) ";
	  
        $db= Config::getConnexion();
        $sql= $db->query($req);
 
        try
         {
            $sql->execute();
        } 
        catch (Exception $e) 
        {
            echo $e->getMessage();
        }
         
         return $sql->fetchAll();
    }

public function chercherLivraison($id)
     {
       
      $req="SELECT * from Livraison where id_rec ='$id' ";
      
        $db= Config::getConnexion();
        $sql= $db->query($req);
 
        try
         {
            $sql->execute();
        } 
        catch (Exception $e) 
        {
            echo $e->getMessage();
        }
         
         return $sql->fetchAll();
    }













function modifierLivraison($id,$tel,$region){
        $sql="UPDATE Livraison set tel='$tel', region='$region' where id='$id'";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
     
         
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }



 public function aff_etat($id)
     {
       
      $req="SELECT * from `Livraison` where id='$id' ";
      
        $db= Config::getConnexion();
        $sql= $db->query($req);
 
        try
         {
            $sql->execute();
        } 
        catch (Exception $e) 
        {
            echo $e->getMessage();
        }
         
         return $sql->fetchAll();
    }









 public function aff_rec()
     {
       
      $req="SELECT * from `Livraison`";
      
        $db= Config::getConnexion();
        $sql= $db->query($req);
 
        try
         {
            $sql->execute();
        } 
        catch (Exception $e) 
        {
            echo $e->getMessage();
        }
         
         return $sql->fetchAll();
    }


 

















 public function supprimer_Livraison($id)
     {
       
      $req="DELETE  from `Livraison` where id=$id ";
      
        $db= Config::getConnexion();
        $sql= $db->query($req);
 
        try
         {
            $sql->execute();
        } 
        catch (Exception $e) 
        {
            echo $e->getMessage();
        }
         
    }



 public function supprimer_Livreur($Id)
     {
       
      $req="DELETE  from `Livreur` where id=$Id ";
      
        $db= Config::getConnexion();
        $sql= $db->query($req);
 
        try
         {
            $sql->execute();
        } 
        catch (Exception $e) 
        {
            echo $e->getMessage();
        }
         
    }
















public function chercherEtat($ref)
     {
       
      $req="SELECT * from Livraison where id_rec ='$ref' ";
      
        $db= Config::getConnexion();
        $sql= $db->query($req);
 
        try
         {
            $sql->execute();
        } 
        catch (Exception $e) 
        {
            echo $e->getMessage();
        }
         
         return $sql->fetchAll();
    }









function updateLivreur($id, $Telephone,$date_l,$heure,$adresse)
{
 $sql="UPDATE Livreur set  Telephone='$Telephone',  date_l='$date_l',  heure='$heure',  adresse='$adresse' where     id='$Id' ";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
     
         
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }

public function cherche($Id)
     {
       
      $req="SELECT * from Livreur where id ='$Id' ";
      
        $db= Config::getConnexion();
        $sql= $db->query($req);
 
        try
         {
            $sql->execute();
        } 
        catch (Exception $e) 
        {
            echo $e->getMessage();
        }
         
         return $sql->fetchAll();
    }



public function updater_etat($id)
{

$etat="traiter";

$sql="UPDATE Livraison set  etat='$etat' where     id='$id' ";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
     
         
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}


     public function afficherEtat($id)
     {
       
      $req="SELECT * from `Livraison` where id='$id' ";
      
      
        $db= Config::getConnexion();
        $sql= $db->query($req);
 
        try
         {
            $sql->execute();
        } 
        catch (Exception $e) 
        {
            echo $e->getMessage();
        }
         
         return $sql->fetchAll();
    }











}
?>

