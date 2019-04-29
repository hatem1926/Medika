<?PHP
include "../core/clientC.php";
$client1C=new ClientC();
$listeClients=$client1C->afficherClients();

//var_dump($listeclient->fetchAll());
?>
<table border="1">
<tr>
<td>Username</td>
<td>Password</td>
<td>Age</td>
<td>Numtel</td>
<td>Email</td>
<td>Nom</td>
<td>Prenom</td>
<td>Supprimer</td>
<td>Modifier</td>
</tr>

<?PHP
foreach($listeClients as $row){
	?>
	<tr>
	<td><?PHP echo $row['username']; ?></td>
	<td><?PHP echo $row['password']; ?></td>
	<td><?PHP echo $row['age']; ?></td>
	<td><?PHP echo $row['numtel']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
    <td><?PHP echo $row['prenom']; ?></td>


	<td><form method="POST" action="supprimerClient.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['username']; ?>" name="username">
	</form>
	</td>
	<td><a href="modifierClient.php?username=<?PHP echo $row['username']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


