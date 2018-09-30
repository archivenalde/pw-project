<?php


try {
	$bdd = new PDO('mysql:host=localhost;dbname=pw-project;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
	
}

$passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);

$succes = $req = $bdd->prepare("INSERT INTO Utilisateur(nomUtilisateur, prenomUtilisateur, sexe, datenaissance, adressemail, password) VALUES (:nomUtilisateur, :prenomUtilisateur, :sexe, :datenaissance, :adressemail, :password)");
$req->execute(array('nomUtilisateur' => $_POST['lastname'],
	                'prenomUtilisateur' => $_POST['firstname'],
	                'sexe' => $_POST['gender'],
	                'datenaissance' => $_POST['birthdate'],
	                'adressemail' => $_POST['mail'],
	                'password' => $passwordHash));

header("Location: ./accueil_page.php");

?>