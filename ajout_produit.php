<?php


$nbinput = 0;

foreach ($_POST as $inputid => $value) {
	$nbinput++;
}

if ($nbinput == 0)
{

}


header("Location: ./ajout_produit.html");
?>