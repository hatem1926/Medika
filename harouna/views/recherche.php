
<form method="get" action="">
<meta charset="utf-8" />
<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=Harouna;charset=utf8','root','');

$name = $bdd->query('SELECT name FROM livreur ORDER BY id DESC');
if(isset($_GET['q']) AND !empty($_GET['q'])) {
   $q = htmlspecialchars($_GET['q']);
   $q_array = explode(' ',$q);
   var_dump($q_array);
   $name = $bdd->query('SELECT name FROM livreur WHERE name LIKE "%'.$q.'%" ORDER BY id DESC');
   if($name->rowCount() == 0) {
      $name = $bdd->query('SELECT name FROM livreur WHERE CONCAT(titre, contenu) LIKE "%'.$q.'%" ORDER BY id DESC');
   }
}
?>
<form method="GET">
   <input type="search" name="q" placeholder="Recherche..." />
   <input type="submit" value="Valider" />
</form>
<?php if($name->rowCount() > 0) { ?>
   <ul>
   <?php while($a = $name->fetch()) { ?>
      <li><?= $a['name'] ?></li>
   <?php } ?>
   </ul>
<?php } else { ?>
Aucun résultat pour: <?= $q ?>...
<?php } ?>
</form>