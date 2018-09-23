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

        <form action=<?php echo "./ajout_composants_produit_bdd.php?product-name=".$_GET["product-name"]."&idprod=".$_GET["idprod"]; ?> 
        method="post" id="add-component-form">
                
                <fieldset id="component-fieldset">
                    <legend>Composants de <?php echo $_GET["product-name"]; ?>
                    </legend>

                    <input type="text" placeholder="Composant" id="comp" name="comp"/>
                    <input type="text" placeholder="Valeur" id="val" name="val"/>
                </fieldset>
                <button type="submit" class="btn btn-primary" id="add-component">Ajouter le composant</button>
            </form>
        </div>

        <script type="text/javascript" src="ajout_composants_produit.js">
            

        </script>
    </body>
</html>

