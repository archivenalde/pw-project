<?php

if (isset($_POST['mail']))
{

	try {
		$bdd = new PDO('mysql:host=localhost;dbname=pw-project;charset=utf8', 'root', 'root');
	} catch (Exception $e) {
	    die('Erreur : '.$e->getMessage());
		
	}
	$req = $bdd->query("SELECT * FROM Utilisateur WHERE adressemail = \"".$_POST['mail']."\"");

	if ($req->rowCount() == 0)
	{
		$req = $bdd->prepare("INSERT INTO Utilisateur(nomUtilisateur, prenomUtilisateur, sexe, datenaissance, adressemail, password) VALUES (:nomUtilisateur, :prenomUtilisateur, :sexe, :datenaissance, :adressemail, :password)");
		$req->execute(array('nomUtilisateur' => $_POST['lastname'],
		                'prenomUtilisateur' => $_POST['firstname'],
		                'sexe' => $_POST['gender'],
		                'datenaissance' => $_POST['birthdate'],
		                'adressemail' => $_POST['mail'],
		                'password' => $passwordHash));

		header("Location: ./connexion_page.html");
	}
	else {
		echo "L'adresse mail demandée existe déjà";
	}
}


?>