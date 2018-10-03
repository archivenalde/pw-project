<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="recherche.css"/>
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
        <title>Rollbacker</title>
    </head>
    <body>
		<div id="background-header">
	    	<header>
	    		<div id=pagename-user>
	    			<h1>Rollbacker</h1>
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

	    <div class="container">
	    	<div class="row">
	    		<div class="col-xs-6 col-offset-xs-3">
				    <form method="post" action="./rollback.php">
				    	<label for="rollback-date">Selectionner une date</label>
				    	<input type="date" name="rollback-date" id="rollback-date"/>

				    	<button type="submit">Rollbacker</button>
				    </form>
				</div>
			</div>
		</div>
    </body>
</html>
