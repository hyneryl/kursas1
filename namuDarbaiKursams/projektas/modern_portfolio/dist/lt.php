<?php 
	header('location: index.php');
	ini_set('display_errors','1');
 ?>

<?php
session_start ();
// On redirige le visiteur vers la page d'accueil mais avec le menu changé
setcookie('langue', 'lt')
?> 
