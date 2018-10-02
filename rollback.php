<?php
try {
	$bdd = new PDO('mysql:host=localhost;dbname=pw-project;charset=utf8','root','');
} catch (Exception $e) {
	die('Erreur : '.$e->getMessage());
}


$bdd->query("DELETE FROM Produits WHERE dateajout > '".$_POST['rollback-date']."'");
$bdd->query("DELETE FROM Composants WHERE dateajoutcomp > '".$_POST['rollback-date']."'");

echo $_POST['rollback-date'];

//header('Location: ./accueil_page.php');
?>