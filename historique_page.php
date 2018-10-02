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
        <link rel="stylesheet" href="recherche.css"/>
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
        <title>Ajout d'un produit</title>
    </head>
    <body>
        <div id="background-header">
            <header>
                <div id=pagename-user>
                    <h1>Historique de <?php echo $_GET['nomprod'];?> </h1>
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
        	<h3> <?php echo $_GET['nomprod']; ?></h3>

        	<div class="row">
        		<div class="col-xs-4" id="modif-nom-produit">

                    <?php
                        $req = $bdd->query("SELECT nomprod, DATE_FORMAT(dateajout, 'Le %W %d %M %Y à %Hh%i') as DA 
                                                FROM Produits 
                                                WHERE idprod = ".$_GET['idprod']." ORDER BY dateajout");
                        $data = $req->fetch();

                        echo "  <div class=\"col-xs-12\">
                                    <article>
                                        <h4>Premier nom donne lors de l'ajout</h4>
                                        <p>".$data['nomprod']."</p>
                                        <p>".$data['DA']."</p>
                                    </article>
                                </div>";
                        $ancienNom = $data['nomprod'];
                        while($data = $req->fetch())
                        {
                            echo "  <div class=\"col-xs-12\">
                                        <article>
                                            <h4>Modification du nom du produit</h4>
                                            <p>De ".$ancienNom." à ".$data['nomprod']."</p>
                                            <p>".$data['DA']."</p>
                                        </article>
                                     </div>";
                            $ancienNom = $data['nomprod'];
                        }
                    ?>
        			
        		</div>


        		<div class="col-xs-8" id="modif-composants">
        			<div class="row">

        				<?php
                            $req = $bdd->query("SELECT idcomp, nomcomp, valcomp, DATE_FORMAT(dateajoutcomp, 'Le %W %d %M %Y à %Hh%i') as DA 
                                                FROM Composants 
                                                WHERE idprod = ".$_GET['idprod']." ORDER BY dateajoutcomp");
                            while ($data = $req->fetch()) 
                            {
                                if (isset($ancienneValeur[$data['idcomp']]))
                                {
                                    echo "  <div class=\"col-xs-6\">
                                                <article>
                                                    <h4>Modification du composant ".$data['nomcomp']."</h4>
                                                    <p>".$ancienneValeur[$data['idcomp']]." modifie en ".$data['valcomp']."</p>
                                                    <p>".$data['DA']."</p>
                                                </article>
                                            </div>";
                                }
                                else
                                {
                                    echo "  <div class=\"col-xs-6\">
                                                <article>
                                                    <h4>Ajout du composant ".$data['nomcomp']."</h4>
                                                    <p>De valeur ".$data['valcomp']."</p>
                                                    <p>".$data['DA']."</p>
                                                </article>
                                            </div>";
                                }
                                $ancienneValeur[$data['idcomp']] = $data['valcomp'];

                            }
        				?>
        			</div>
        		</div>
        	</div>
        </div>

	</body>
</html>