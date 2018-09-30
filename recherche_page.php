<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="recherche.css"/>
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
        <title>Recherche d'un produit</title>
    </head>
    <body>
		<div id="background-header">
	    	<header>
	    		<div id=pagename-user>
	    			<h1>Produits</h1>
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

	    <?php
	    	try {
				$bdd = new PDO('mysql:host=localhost;dbname=pw-project;charset=utf8','root','');
			} catch (Exception $e) {
    			die('Erreur : '.$e->getMessage());
			}

			$req = $bdd->query("SELECT * FROM Produits WHERE nom LIKE '%".$_GET['search']."%'");
	    ?>

    	<div id=body-page class="container">
	    	<section id=research-section class="row">
	    		<div class="col-md-4 col-md-offset-4">
	    			<form action="./recherche.php" method="GET">
	    				<label for="search">Recherche</label>
	    				<input type="text" name="search" id="search"/>
	    			</form>
	    		</div>

	    	</section>

	    	<section id=results-section class="row">

	    		<?php
	    			while ($donnes = $req->fetch())
	    			{
	    				echo 	"
	    						<div class=\"col-md-4\">
	    						<article>
		    					<h4>".$donnes["nom"]."</h4>
		    					<p>".$donnes["date_ajout"]."</p>
		    					<p>Id : ".$donnes["idprod"]."</p>
	    						</article>
	    						</div>";
	    			}
	    		?>
	    		<!-- <div class="col-md-4">
	    			<article>
		    			<h4>Piano</h4>
		    			<p>01/01/01</p>
		    			<p>Id : 11111</p>
		    		</article>
	    		</div>
	    		<div class="col-md-4">
	    			<article>
		    			<h4>Blocs-Notes</h4>
		    			<p>01/01/01</p>
		    			<p>Id : 22222</p>
		    		</article>
	    		</div>
	    		<div class="col-md-4">
	    			<article>
		    			<h4>Clavier</h4>
		    			<p>01/01/01</p>
		    			<p>Id : 33333</p>
		    		</article>
	    		</div>
	    		<div class="col-md-4">
	    			<article>
		    			<h4>Piano</h4>
		    			<p>01/01/01</p>
		    			<p>Id : 11111</p>
		    		</article>
	    		</div>
	    		<div class="col-md-4">
	    			<article>
		    			<h4>Blocs-Notes</h4>
		    			<p>01/01/01</p>
		    			<p>Id : 22222</p>
		    		</article>
	    		</div>
	    		<div class="col-md-4">
	    			<article>
		    			<h4>Clavier</h4>
		    			<p>01/01/01</p>
		    			<p>Id : 33333</p>
		    		</article>
	    		</div>
	    		<div class="col-md-4">
	    			<article>
		    			<h4>Piano</h4>
		    			<p>01/01/01</p>
		    			<p>Id : 11111</p>
		    		</article>
	    		</div>
	    		<div class="col-md-4">
	    			<article>
		    			<h4>Blocs-Notes</h4>
		    			<p>01/01/01</p>
		    			<p>Id : 22222</p>
		    		</article>
	    		</div>
	    		<div class="col-md-4">
	    			<article>
		    			<h4>Clavier</h4>
		    			<p>01/01/01</p>
		    			<p>Id : 33333</p>
		    		</article>
	    		</div> -->
	    	</section>
	    </div>

    </body>
</html>
