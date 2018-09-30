<?php
session_start();


try {
	$bdd = new PDO('mysql:host=localhost;dbname=pw-project;charset=utf8','root','');
} catch (Exception $e) {
	die('Erreur : '.$e->getMessage());
}


$query=$bdd->prepare('SELECT * FROM Utilisateur WHERE adressemail = :mail');
$success = $query->execute(array('mail' => $_POST['mail']));

$data = $query->fetch();

if (!isset($data['password']) || !password_verify($_POST['password'], $data['password']))
{
	header("Location: ./connexion_erreur_page.html");
}
else
{
	$_SESSION['idutilisateur'] = $data['idutilisateur'];
	$_SESSION['nomutilisateur'] = $data['nomutilisateur'];
	$_SESSION['prenomutilisateur'] = $data['prenomutilisateur'];
	$_SESSION['dateinscription'] = $data['dateinscription'];
	$_SESSION['sexe'] = $data['sexe'];
	$_SESSION['datenaissance'] = $data['datenaissance'];
	$_SESSION['adressemail'] = $data['adressemail'];
	$_SESSION['statut'] = $data['statut'];
	header("Location: ./accueil_page.php");
}

$query->CloseCursor();

?>