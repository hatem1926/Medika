 <?php 
 require 'database.php'; 
 if($_SERVER["REQUEST_METHOD"]== "POST" && !empty($_POST))
 { //on initialise nos messdatees d'erreurs;
   $nameError = ''; 
   $firstnameError='';
   $dateeError=''; 
   $telError =''; 
   $emailError =''; 
   $regionError=''; 
   $etatError='';  
   // on recupère nos valeurs 
   $name = htmlentities(trim($_POST['name'])); 
 $firstname=htmlentities(trim($_POST['firstname']));
 $datee = htmlentities(trim($_POST['datee'])); 
 $tel=htmlentities(trim($_POST['tel'])); 
 $email = htmlentities(trim($_POST['email'])); 
 $region=htmlentities(trim($_POST['region']));  
 $etat=htmlentities(trim($_POST['etat'])); 
 
 // on vérifie nos champs 
 $valid = true; 
 if (empty($name)) { $nameError = 'Please enter Name'; $valid = false; }
 else if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
 { $nameError = "Only letters and white space allowed"; } 
 if(empty($firstname)){ $firstnameError ='Please enter firstname'; $valid= false; }
 else if (!preg_match("/^[a-zA-Z ]*$/",$name)) { $nameError = "Only letters and white space allowed"; } 
 if (empty($email)) { $emailError = 'Please enter Email Address'; $valid = false; } 
 else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) { $emailError = 'Please enter a valid Email Address'; $valid = false; } 
 if (empty($datee)) { $dateeError = 'Please enter your datee'; $valid = false; } 
 if (empty($tel)) { $telError = 'Please enter phone'; $valid = false; }
 /*else if(!preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#",$tel)){ $telError = 'Please enter a valid phone'; $valid = false; } */
 if (!isset($region)) { $regionError = 'Please select a country'; $valid = false; }  
 if(empty($etat)){ $etatError ='Please select a job'; $valid= false; } 
 
 // si les données sont présentes et bonnes, on se connecte à la base 
 if ($valid) { $pdo = Database::connect(); $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO livreur (name,firstname,datee,tel, email, region, etat) values(?, ?, ?, ? , ? , ? , ? )";
            $q = $pdo->prepare($sql);
            $q->execute(array($name,$firstname, $datee, $tel, $email,$region, $etat));
            Database::disconnect();
            header("Location: livreur.php");
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Livreur</title>
        	<link href="css/bootstrap.min.css" rel="stylesheet">
        <img src="data:imdatee/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />
        
    </head>
    <body>



<br />
<div class="container">

<br />
<div class="row">

<br />
<h3>Ajouter un Livreur</h3>
<p>

</div>
<p>

<br />
<form method="post" action="livreur.php">

<br />
<div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Name</label>

<br />
<div class="controls">
                            <input name="name" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
</div>
<p>

</div>
<p>

                

<br />
<div class="control-group<?php echo !empty($firstnameError)?'error':'';?>">
                    <label class="control-label">firstname</label>

<br />
<div class="controls">
                            <input type="text" name="firstname" value="<?php echo !empty($firstname)?$firstname:''; ?>">
                            <?php if(!empty($firstnameError)):?>
                            <span class="help-inline"><?php echo $firstnameError ;?></span>
                            <?php endif;?>
</div>
<p>

</div>
<p>


<br />
<div class="control-group<?php echo !empty($dateeError)?'error':'';?>">
                    <label class="control-label">datee</label>

<br />
<div class="controls">
                            <input type="date" name="datee" value="<?php echo !empty($datee)?$datee:''; ?>">
                            <?php if(!empty($dateeError)):?>
                            <span class="help-inline"><?php echo $dateeError ;?></span>
                            <?php endif;?>
</div>
<p>

</div>
<p>

                 

<br />
<div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                        <label class="control-label">Email Address</label>

<br />
<div class="controls">
                            <input name="email" type="text" placeholder="Email Address" value="<?php echo !empty($email)?$email:'';?>">
                            <?php if (!empty($emailError)): ?>
                                <span class="help-inline"><?php echo $emailError;?></span>
                            <?php endif;?>
</div>
<p>

</div>
<p>

                

<br />
<div class="control-group <?php echo !empty($telError)?'error':'';?>">
                        <label class="control-label">Telephone</label>

<br />
<div class="controls">
                            <input name="tel" type="text" placeholder="Telephone" value="<?php echo !empty($tel) ? $tel:'';?>">
                            <?php if (!empty($telError)): ?>
                                <span class="help-inline"><?php echo $telError;?></span>
                            <?php endif;?>
</div>
<p>

</div>
<p>

                

<br />
<div class="control-group<?php echo !empty($regionError)?'error':'';?>">
                 <select name="region">

<option value="Tunis">Tunis</option>

<option value="Sousse">Sousse</option>

<option value="Nabeul">Nabeul</option>

</select>
                     <?php if (!empty($regionError)): ?>
                                <span class="help-inline"><?php echo $regionError;?></span>
                            <?php endif;?>
</div>
<p>

                

<br />
<div class="control-group<?php echo !empty($etatError)?'error':'';?>">
                    <label class="checkbox-inline">etat</label>

<br />
<div class="controls">
                        libre : <input type="checkbox" name="etat" value="libre" <?php if (isset($etat) && $etat == "lbre") echo "checked"; ?>>
                        encours <input type="checkbox" name="etat" value="encours" <?php if (isset($etat) && $etat == "encours") echo "checked"; ?>>
                        envoye <input type="checkbox" name="etat" value="envoye" <?php if (isset($etat) && $etat == "envoye") echo "checked"; ?>>
</div>
<p>

                     <?php if (!empty($etatError)): ?>
                                <span class="help-inline"><?php echo $etatError;?></span>
                            <?php endif;?>
</div>
<p>


                

<br />
<div class="form-actions">
                 <input type="submit" class="btn btn-success" name="submit" value="submit">
                 <a class="btn" href="livreur.php">Retour</a>
</div>
<p>

            </form>
<p>
            
            
            
</div>
<p>

        
    </body>
</html>