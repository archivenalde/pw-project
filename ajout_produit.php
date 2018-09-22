<?php

try {
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
	
}

$req = $bdd->prepare('INSERT INTO produits(nom, categorie, date_ajout) VALUES (:nom, categorietest, CURDATE())');
$req->execute(array(
	'nom' => $_POST["product-name"]
	));
?>