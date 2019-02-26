<?php ini_set('display_errors','1'); ?>

<?php
	if(isset($_POST['Submit'])) {
	$vardas = trim($_POST['name']);
	$email = trim($_POST['email']);
	$messsage = trim($_POST['message']);
	if (!empty($vardas) && !empty($email) && !empty($message)) {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$from = "$email";
			$to = "hyneryl@gmail.com";
			$subject = "nauja zinute";
			$autorius = 'Nuo: ' . $vardas . ', ' . $email;
			$zinute = htmlspecialchars($message);
			mail($to, $subject, $autorius,$zinute, $from);
			echo "<script>alert('Thanks. Your message has been received. We will contact you back as soon as possible.');</script>";
		}
	}

	include('../src/db.php');
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">

  <link rel="stylesheet" href="css/main.css">
   <? php include('includes/lt/title_contact_lt.php'); ?>
</head>

<body>
	<?php include("includes/lt/header_lt.php"); ?>

  <?php include("includes/lt/main-contact_lt.php"); ?>
  
	<?php include("includes/lt/contact-form_lt.php"); ?>
 
  <?php include("includes/lt/footer_lt.php"); ?>

  <script src="js/main.js"></script>
</body>

</html>
		
