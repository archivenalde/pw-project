<?php
session_start();
try {
	$bdd = new PDO('mysql:host=localhost;dbname=pw-project;charset=utf8','root','');
} catch (Exception $e) {
	die('Erreur : '.$e->getMessage());
}
?>

<!DOCTYPE html>
<html>
	 <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="connexion.css"/>
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
        <title>Prodhisto - Connexion</title>
    </head>
	<body>
		<div id="body-connexion-page">
			<h3> Connexion </h3>

			<form action="connexion.php" method="post">
				<div class="form-group">
					<label for="login">E-mail</label>
					<input type="email" name="mail" id="mail" class="form-control" />
				</div>

				<div class="form-group">
					<label for="password">Mot de passe</label>
					<input type="password" name="password" id="password" class="form-control">
				</div>

				<button type="submit" class="btn btn-primary">Connexion</button>
			</form>
		</div>

<?php

$message='';
if (empty($_POST['login']) || empty($_POST['password']) ) //Oublie d'un champ
{
    $message = '<p>une erreur s\'est produite pendant votre identification.
				Vous devez remplir tous les champs</p>
				<p>Cliquez <a href="./connexion.php">ici</a> pour revenir</p>';
}
else //On check le mot de passe
{
    $query=$db->prepare('SELECT * FROM Utilisateur WHERE mail = :mail');
    $query->bindValue(':mail',$_POST['mail'], PDO::PARAM_STR);
    $query->execute();
    $data=$query->fetch();
    $message = '<p>Bienvenue '.$data['prenom'].', 
			vous êtes maintenant connecté!</p>
			<p>Cliquez <a href="./accueil.html">ici</a> 
			pour revenir a la page d accueil</p>';
	if (password_verify(password, $data['password']))
	{
		$_SESSION['nom'] = $data['nomutilisateur'];
		$_SESSION['prenom'] = $data['prenomutilisateur'];
		$_SESSION['mail'] = $data['mail'];
	}
	else // Acces pas OK !
	{
	    $message = '<p>Une erreur s\'est produite 
	    pendant votre identification.<br /> Le mot de passe ou le pseudo 
	        entré n\'est pas correcte.</p><p>Cliquez <a href="./connexion.php">ici</a> 
	    pour revenir à la page précédente
	    <br /><br />Cliquez <a href="./accueil.php">ici</a> 
	    pour revenir à la page d accueil</p>';
	}
	$query->CloseCursor();

}

echo $message.'</body></html>';



?>