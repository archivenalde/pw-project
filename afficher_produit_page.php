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
        <link rel="stylesheet" href="afficher_produit.css"/>
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
        <title>Blocs-notes</title>
    </head>
    <body>
        <div id="background-header">
	    	<header>
	    		<div id=pagename-user>
	    			<h1>Prodhisto</h1>
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
            <div class="row">

                <?php
                    $req = $bdd->query("SELECT * FROM Produits WHERE idprod = ".$_GET['idprod']." ORDER BY dateajout DESC");
                    $data = $req->fetch();
                ?>

                <div class="col-lg-8">
                    <div class="row">
                        <h3><?php echo $data['nomprod']; $nomprod = $data['nomprod']?></h3><br/>
                        Identifiant : <?php echo $data['idprod'];?>
                    </div>

                    <h3> Attributs </h3>
                    <div>
                        <ul>
                            <?php
                            $req = $bdd->query("SELECT * FROM Composants WHERE idprod = ".$_GET['idprod']." ORDER BY dateajoutcomp DESC");
                            $dejaajouter;
                            while ($data = $req->fetch())
                            {
                                if (!isset($dejaajouter[$data['idcomp']]))
                                {
                                    echo "<li>".$data['nomcomp']." : ".$data['valcomp']."</li>";
                                    $dejaajouter[$data['idcomp']] = $data['idcomp'];
                                }
                            }?>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <form <?php echo 'action="./modification_page.php?idprod='.$_GET["idprod"].'"';?> method="get" >
                        <input type="hidden" name="idprod" value="<?php echo $_GET["idprod"]; ?>"></input>
                        <button class="btn btn-primary" type="submit">Modifier</button>
                    </form>
                    
                
                    <form <?php echo "action=\"./historique_page.php?idprod=".$_GET['idprod']."\""; ?> method="get">
                        <input type="hidden" name="idprod" value="<?php echo $_GET["idprod"]; ?>"></input>
                        <input type="hidden" name="nomprod" value="<?php echo $nomprod; ?>"></input>
                        <button class="btn btn-primary" type="submit">Consulter l'historique</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
