<?php

try {
	$bdd = new PDO('mysql:host=localhost;dbname=pw-project;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
	
}

$req = $bdd->prepare('INSERT INTO Composants(type, quantite, prod_associe) VALUES (:type, :quantite, :prod_associe)');
$req->execute(array(
	'type' => htmlspecialchars($_POST["comp"]),
	'quantite' => htmlspecialchars($_POST["val"]),
	'prod_associe' => $_GET["idprod"]
	));

header("Location: ./ajout_composants_produit.php?product-name=".$_GET["product-name"]."&idprod=".$_GET["idprod"]);


?>