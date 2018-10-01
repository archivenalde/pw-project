<?php
session_start();
session_destroy();
header("Location: ./accueil_page.php");
?>