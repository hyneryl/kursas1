<?php ini_set('display_errors','1'); ?>

<?php
session_start ();
$_SESSION['menu'] = 'about';
// On redirige le visiteur vers la page d'accueil mais avec le menu changé
header ('location: index.php');
?>

