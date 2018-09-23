<?php

try {
	$bdd = new PDO('mysql:host=localhost;dbname=pw-project;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
	
}

$req = $bdd->prepare('INSERT INTO Produits(nom, categorie, date_ajout) VALUES (:nom, \'categorietest\', :date_ajout)');
$req->execute(array(
	'nom' => htmlspecialchars($_POST["product-name"]),
	'date_ajout' => date("Y-m-d")
	));

$nbinput = 0;

foreach ($_POST as $inputid => $value) {
	$nbinput++;
}

if ($nbinput == 0)
{

}

print_r($_POST);

//header("Location: ./ajout_produit.html");
?>