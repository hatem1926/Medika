<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gestion Livreur</title>
        
        	<link href="css/bootstrap.min.css" rel="stylesheet">
        	<link href="css/responsive.css" rel="stylesheet">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />
        

    </head>
    <body>

<br />
<div class="container">

<br />
<div class="row">

<br />
<h2>Gestion Livreur</h2>
<p>

</div>
<p>


<br />
<div class="row">
                
                    <a href="addlivreur.php" class="btn btn-success">Ajouter un Livreur</a>
                

<br />
<div class="table-responsive">

<br />
<table class="table table-hover table-bordered">

<br />
<thead>

<th>ID</th>
<p>

<th>Name</th>
<p>



<th>Firstname</th>
<p>



<th>Date</th>
<p>



<th>Tel</th>
<p>



<th>Region</th>
<p>



<th>Email</th>
<p>






<th>Etat</th>
<p>


</thead>
<p>


<br />
<tbody>
                        <?php 
                        include 'database.php'; 
                        //on inclut notre fichier de connection 
                        $pdo = Database::connect(); 
                        //on se connecte à la base 
                        $sql = 'SELECT * FROM livreur ORDER BY id DESC';
                         //on formule notre requete 
                         foreach ($pdo->query($sql) as $row) 
                         { 
                            //on cree les lignes du tableau avec chaque valeur retournée
                            echo '
<br />
<tr>';
                        echo'

<td>' . $row['id'] . '</td>
<p>
';
       
                            echo'

<td>' . $row['name'] . '</td>
<p>
';
                            echo'

<td>' . $row['firstname'] . '</td>
<p>
';
                            echo'

<td>' . $row['datee'] . '</td>
<p>
';
                            echo'

<td>' . $row['tel'] . '</td>
<p>
';
                            echo'

<td>' . $row['email'] . '</td>
<p>
';
                            echo'

<td>' . $row['region'] . '</td>
<p>
';
                        

                            echo'

<td>' . $row['etat'] . '</td>
<p>
';
                           echo '

<td>';
                            echo '<a class="btn btn-success" href="updatelivreur.php?id=' . $row['id'] . '">Modifier</a>';// un autre td pour le bouton d'update
                            echo '</td>
<p>
';
                            echo'

<td>';
                            echo '<a class="btn btn-danger" href="deletelivreur.php?id=' . $row['id'] . ' ">Supprimer</a>';// un autre td pour le bouton de suppression
                            echo '</td>
<p>
';
                            echo '</tr>
<p>
';
                        }
                                                Database::disconnect(); //on se deconnecte de la base
                        ;
                        ?>    
</tbody>
<p>

</table>
<p>

</div>
<p>


</div>
<p>


</div>
<p>

    </body>
</html>