<?php

try {
	$bdd = new PDO('mysql:host=localhost;dbname=pw-project;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
	
}

$req = $bdd->prepare('INSERT INTO Produits(nom, categorie, date_ajout) VALUES (:nom, \'categorietest\', :date_ajout)');
$req->execute(array(
	'nom' => htmlspecialchars($_POST["product-name"]),
	'date_ajout' => date("Y-m-d")
	));

$req = $bdd->prepare('SELECT idprod FROM Produits WHERE nom= :nom');
$req->execute(array(
	'nom' => htmlspecialchars($_POST["product-name"])
));
$id = $req->fetch();


header("Location: ./ajout_composants_produit.php?product-name=".$_POST["product-name"]."&idprod=".$id["idprod"]);
?>