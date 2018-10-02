<?php

try {
	$bdd = new PDO('mysql:host=localhost;dbname=pw-project;charset=utf8','root','');
} catch (Exception $e) {
	die('Erreur : '.$e->getMessage());
}

$req = $bdd->query("SELECT * FROM Produits WHERE idprod = ".$_GET['idprod']." ORDER BY dateajout DESC");

$data = $req->fetch();

echo "<h3>".$data['nomprod']."</h3><br/> Identifiant : ".$_GET['idprod'];
//$req->closeCursor();

$req = $bdd->query("SELECT * FROM Composants WHERE idprod = ".$_GET['idprod']." ORDER BY dateajoutcomp DESC");

$dejaajouter;
while ($data = $req->fetch())
{
	if (!isset($dejaajouter[$data['idcomp']]))
	{
		echo "<li>".$data['nomcomp']." : ".$data['valcomp']."</li>";
		$dejaajouter[$data['idcomp']] = $data['idcomp'];
	}
}

?>