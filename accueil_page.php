<?php
session_start();

$logdock = '';
if(isset($_SESSION['nomutilisateur']))
{
    $logdock = '<div class="log-dock">
                    <button type="button" class="btn btn-link">
                    <h4>'.$_SESSION['prenomutilisateur'].' '.$_SESSION['nomutilisateur'].'</button>
                    </h4>
                    <div class="dropdown-child">
                    <a href="./deconnexion.php">Deconnexion</a>
                    </div>
                </div>';
}
else
{
     $logdock = '<div class="log-dock">
                    <h4><a href="./inscription_page.html" class="ref-signup-signin">Inscription</a></h4>
                    <h4>|</h4>
                    <h4><a href="./connexion_page.html" class="ref-signup-signin">Connexion</a></h4>
                </div>';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="accueil.css"/>
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
        <title>Prodhisto - Une nouvelle façon de consommer</title>
    </head>
    <body>
        <header class="index-header">
            <div class="header-dock">
                <h4>Menu</h4>
                <?php echo $logdock; ?>
            </div>
            <h1 class="website-name">Prodhisto</h1>
            <p>Une nouvelle façon de consommer</p>
            <form action="./recherche.php" method="GET">
                <input type="text" placeholder="Chercher un produit" name="search" id="search"/>
            </form>
        </header>

        <div id="body-page">
            <h3> Les derniers produits </h3>

            <div class="container">
                <section class="row">
                   <div class="col-md-4">
                        <article>
                            <h4>Piano</h4>
                            <p>01/01/01</p>
                            <p>Id : 11111</p>
                            <p>Quantité : 5</p>
                        </article>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>
