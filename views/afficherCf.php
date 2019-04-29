<?PHP
include "../core/cfC.php";
$cf1C=new CfC();
$listeCfs=$cf1C->afficherCfs();

//var_dump($listeclient->fetchAll());
?>
<table border="1">
<tr>
<td>Username</td>
<td>Prenom</td>
<td>Nom</td>
<td>Rang</td>
<td>Email</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeCfs as $row){
	?>
	<tr>
	<td><?PHP echo $row['username']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['rang']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><form method="POST" action="supprimerCf.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['username']; ?>" name="username">
	</form>
	</td>
	<td><a href="modifierCf.php?username=<?PHP echo $row['username']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


