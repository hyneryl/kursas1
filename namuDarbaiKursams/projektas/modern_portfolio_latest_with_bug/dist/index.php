<?php
session_start ();
//$menu = ['home', 'about', 'work', 'contact'];
$langue = 'en';
if (isset($_COOKIE['langue']) ) {
$langue = $_COOKIE['langue'];
}
?>

<!DOCTYPE html>
<html <?php include('includes/'.$langue.'/lang_'.$langue. '.php'); ?> >
 <head>
 <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"> 
 <link rel="stylesheet" href="css/main.css">
 
 <?php include('includes/'.$langue.'/title_'.$langue. '.php'); ?>
 </head>
 <body id="bg-img">
 <?php include('includes/header.php'); ?>


<?php
if (!isset($_SESSION['menu']) ) {
$_SESSION['menu'] = 'home';
}
include('includes/'.$langue.'/main-'.$_SESSION['menu'].'_'.$langue.'.php');

include('includes/'.$langue.'/footer_'.$langue.'.php');

?>

 <script src="js/main.js"></script>


</body> 
</html>


<?php
// On détruit les variables de notre session
session_unset ();
?>