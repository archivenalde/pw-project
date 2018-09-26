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
				$bdd = new PDO('mysql:host=localhost;dbname=pw-project;charset=utf8', 'root', 'root');
			} catch (Exception $e) {
    			die('Erreur : '.$e->getMessage());
			}

			$query = $bdd->query("SELECT *
                                  FROM Produits p NATURAL JOIN Composants c
                                  WHERE NOT EXISTS (SELECT *
                                                    FROM Produits pp
                                                    WHERE p.idprod LIKE pp.idprod
                                                    AND p.date_ajout < pp.date_ajout)
                                  AND NOT EXISTS (SELECT *
                                                  FROM Composants cc
                                                  WHERE c.idcomp LIKE cc.idcomp
                                                  AND c.date_ajout < cc.date_ajout)
                                  AND idprod LIKE ".$_POST['idprod']
                                );
	    ?>

    	<div id=body-page class="container">
            <form>
    	    	<?php
                    $donnes = $query->fetch();
                    echo "<div class=\"form-group\">
                                <input type=\"hidden\" value=\"".$donnes['idprod']."\" name=\"idprod\"/>
                                <input type=\"text\" class=\"form-control col-lg-4\" value=\"".$donnes['nom']."\" disabled/>
                                <button id=\"change-name\" type=\"button\" class=\"btn btn-primary btn-sm col-lg-2\">Modifier</button>
                          </div>";
                    $i = 0;
                    do {
                        $i++;
        	    		echo "<div class=\"form-group\">
                                    <input type=\"hidden\" value=\"".$donnes['idcomp']."\" name=\"idcomp-".$i."\"/>
                                    <input id=\"comp-name-".$i."\" type=\"text\" class=\"form-control col-lg-2\" value=\"".$donnes['type']."\" disabled/>
                                    <input id=\"comp-value-".$i."\" type=\"text\" class=\"form-control col-lg-2\" value=\"".$donnes['quantite']."\" disabled/>
                                    <button id=\"alter-comp-".$i."\" type=\"button\" class=\"btn btn-primary btn-sm col-lg-2\">Modifier</button>
                                    <button id=\"delete-comp-".$i."\" type=\"button\" class=\"btn btn-primary btn-sm col-lg-2\">Supprimer</button>
                              </div>";
        	    	} while ($donnes = $query->fetch());
    	    	?>
                <div class="form-group">
                    <button type="button" class="btn btn-primary" id="add-component">Ajouter un composant</button>
                </div>
                <button id="validate-modif" type="submit" class="btn btn-primary btn-lg col-lg-offset-5">Valider l'inscription</button>
            </form>
	    </div>
    </body>
</html>
