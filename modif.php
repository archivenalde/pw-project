<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
        <title>Recherche d'un produit</title>
    </head>
    <body>
	    <?php
	    	try {
				$bdd = new PDO('mysql:host=localhost;dbname=pw-project;charset=utf8', 'root', 'password');
			} catch (Exception $e) {
    			die('Erreur : '.$e->getMessage());
			}

			$query = $bdd->query("SELECT *
                                  FROM Produits p JOIN Composants c USING(idprod)
                                  WHERE NOT EXISTS (SELECT *
                                                    FROM Produits pp
                                                    WHERE p.idprod = pp.idprod
                                                    AND p.dateajout < pp.dateajout)
                                  AND NOT EXISTS (SELECT *
                                                  FROM Composants cc
                                                  WHERE c.idcomp = cc.idcomp
                                                  AND c.dateajoutcomp < cc.dateajoutcomp)
                                  AND idprod = ".$_GET['idprod']
                                );
	    ?>

    	<div id="body-page" class="container">
            <form>
    	    	<?php
                    $donnes = $query->fetch();
                    echo "<div class=\"form-group\">
                                <input type=\"hidden\" value=\"".$donnes['idprod']."\" name=\"idprod\"/>
                                <input id=\"name\" type=\"text\" class=\"form-control col-lg-4\" value=\"".$donnes['nomprod']."\" disabled/>
                                <button id=\"change-name\" type=\"button\" class=\"btn btn-primary btn-sm col-lg-2\">Modifier</button>
                          </div>";
                    $i = 0;
                    do {
                        $i++;
        	    		echo "<div class=\"form-group\">
                                    <input type=\"hidden\" value=\"".$donnes['idcomp']."\" name=\"idcomp-".$i."\"/>
                                    <input id=\"comp-name-".$i."\" type=\"text\" class=\"form-control col-lg-2\" value=\"".$donnes['nomcomp']."\" disabled/>
                                    <input id=\"comp-value-".$i."\" type=\"text\" class=\"form-control col-lg-2\" value=\"".$donnes['valcomp']."\" disabled/>
                                    <button id=\"alter-comp-".$i."\" type=\"button\" class=\"btn btn-primary btn-sm col-lg-2\">Modifier</button>
                                    <!--<button id=\"delete-comp-".$i."\" type=\"button\" class=\"btn btn-primary btn-sm col-lg-2\">Supprimer</button>-->
                              </div>";
        	    	} while ($donnes = $query->fetch());
                    echo "<input type=\"hidden\" id=\"nb-comp\" value=\"".$i."\"/>";
    	    	?>
                <div class="form-group">
                    <button type="button" class="btn btn-primary" id="add-component">Ajouter un composant</button>
                </div>
                <button id="validate-modif" type="submit" class="btn btn-primary btn-lg col-lg-offset-5">Valider l'inscription</button>
            </form>
	    </div>
        <script src="modif.js" type="text/javascript"></script>
    </body>
</html>
