<?php

try {
	$bdd = new PDO('mysql:host=localhost;dbname=pw-project;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
	
}

$bdd->exec('INSERT INTO Produits(nom, categorie, date_ajout) VALUES (\'testphpexec\', \'categorietest\', \'2018-09-03\');');

$req = $bdd->prepare('INSERT INTO Produits(nom, categorie, date_ajout) VALUES (:nom, \'categorietest\', :date_ajout)');
$req->execute(array(
	'nom' => $_POST["product-name"],
	'date_ajout' => date("Y-m-d")
	));
?>