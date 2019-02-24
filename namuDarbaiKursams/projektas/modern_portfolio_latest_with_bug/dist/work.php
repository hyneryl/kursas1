<?php
session_start ();
$_SESSION['menu'] = 'work';
// On redirige le visiteur vers la page d'accueil mais avec le menu changé
header ('location: index.php');
?>