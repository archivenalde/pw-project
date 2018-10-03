<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="ajout_produit.css"/>
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
        <title>Ajout d'un produit</title>
    </head>
    <body>
        <div id="background-header">
            <header>
                <div id=pagename-user>
                    <h1>Ajout d'un produit</h1>
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

        <div id="body-page">

            <form action="./ajout_nom_produit_bdd.php" method="post" id="add-product-form">
                <fieldset class="product-name">

                    <div class="form-group">
                        <label for="product-name">
                            Nom du produit
                        </label>
                        <input type="text" placeholder="Nom" id="product-name" name="product-name" class="form-control" required/>
                        <button type="submit" id="add-product">Valider le nom du produit</button>
                    </div>

                </fieldset>
            </form>

        </div>
            

        </script>
    </body>
</html>
