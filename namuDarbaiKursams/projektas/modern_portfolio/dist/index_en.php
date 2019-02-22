<?php 

$session_start();

$session['lang'] = 'en';
$session['title'] = 'title_en.php';
$session['main'] = 'main_en.php';

?>

<!DOCTYPE html>
<html <?php include('includes/en/lang_en.php'); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">

  <link rel="stylesheet" href="css/main.css">
  <title><?php include('includes/en/title.php'); ?></title>
</head>

<body id="bg-img">
	<?php include("includes/en/header.php"); ?>

  <?php include("includes/en/main-home.php"); ?>
  
  <?php include("includes/en/footer.php"); ?>

  <script src="js/main.js"></script>
  <script src="js/own.js"></script>
  
</body>

</html>