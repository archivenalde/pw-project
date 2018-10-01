<?php
session_start();
$nomprod = $_GET['nomprod'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="recherche.css"/>
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
        <title>Ajout d'un produit</title>
    </head>
    <body>
        <div id="background-header">
            <header>
                <div id=pagename-user>
                    <h1>Historique de <?php echo $nomprod;?> </h1>
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
        	<h3> <?php echo $nomprod; ?></h3>

        	<div class="row">
        		<div class="col-md-4">
	    			<article>
		    			<h4>Ajout du composant</h4>
		    			<p>YYYYY</p>		    			
		    			<p>Le XXXXX à XXXXXX</p>
		    		</article>
	    		</div>
        	</div>

        	<div class="row">
        		<div class="col-md-4">
	    			<article>
		    			<h4>Modification du composant</h4>
		    			<p>YYYY modifie en ZZZZ</p>
		    			<p>Le XXXXX à XXXXXX</p>
		    		</article>
	    		</div>
        	</div>

	</body>
</html>