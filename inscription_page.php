<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="inscription.css"/>
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
        <title>Inscription</title>
    </head>
    <body>
        <div id="background-header">
	    	<header>
	    		<div id=pagename-user>
	    			<h1>Inscription</h1>
	    			<h3>user</h3>
				</div>
	    		<nav>
	    			<ul>
	    				<li><a href="#">Recherche par mots-clefs</a></li>
	    				<li><a href="#">Recherche avancée</a></li>
	    				<li><a href="#">Ajout produit</a></li>
	    			</ul>
	    		</nav>
	    	</header>
	    </div>
        <div id="body-page" class="container">
            <?php
                if (isset($_POST['message-mail-existant']))
                {
                    echo $_POST['message-mail-existant'];
                } else {
                    echo "non";
                }
            ?>
            <form class="form-horizontal" method="POST" action="inscription_page.php" id="signup-form">
                <div class="form-group">
                    <label for="lastname" class="col-lg-2 control-label" >Nom</label>
                    <div class="col-lg-4">
                        <input type="text" placeholder="Nom" id="lastname" class="form-control" name="lastname" />
                    </div>

                    <label for="firstname" class="col-lg-1 control-label">Prénom</label>
                    <div class="col-lg-4">
                        <input type="text" placeholder="Prénom" id="firstname" class="form-control" name="firstname"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-2 control-label">Sexe</label>
                    <label for="male" class="col-lg-1 col-lg-offset-1 radio-inline">
                        <input type="radio" name="gender" id="male" value="homme">
                        Homme
                    </label>
                    <label for="female" class="col-lg-1 radio-inline">
                        <input type="radio" name="gender" id="female" value="femme">
                        Femme
                    </label>
                    <label for="other" class="col-lg-1 radio-inline">
                        <input type="radio" name="gender" id="other" value="autre" checked="checked">
                        Autre
                    </label>
                </div>

                <div class="form-group">
                    <label class="col-lg-2 control-label" for="birthdate">Date de naissance</label>
                    <div class="col-lg-2">
                        <input type="date" id="birthdate" class="form-control" name="birthdate"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="mail" class="col-lg-2 control-label" >Adresse mail</label>
                    <div class="col-lg-4">
                        <input type="email" placeholder="Adresse mail" id="mail" class="form-control" name="mail"/>
                    </div>

                    <div class="col-lg-5">
                        <input type="email" placeholder="Confirmez votre adresse mail" id="mail-confirmation" class="form-control" name="mail-confirmation"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-2 control-label" for="password">Mot de passe</label>
                    <div class="col-lg-4">
                        <input type="password" placeholder="Mot de passe" id="password" class="form-control" name="password" />
                    </div>
                    <div class="col-lg-5">
                        <input type="password" placeholder="Confirmez votre mot de passe" id="password-confirmation" class="form-control" name="password-confirmation" />
                    </div>
                </div>

                <input id="validate-signup" type="button" class="btn btn-primary btn-lg col-lg-offset-5" value="Valider l'inscription"/>
            </form>

            <?php include 'inscription.php'; ?>
        </div>

        <script type="text/javascript" src="inscription.js"></script>
    </body>
</html>
