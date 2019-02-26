<?php ini_set('display_errors','1'); ?>

<?php
if(isset($_POST['submit']))
{
	if(!empty($_POST['name']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<img src="/img/portrait.jpg"/>
					<br />
					<u>Nom de l\'expéditeur :</u>'.$_POST['name'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
					<br />
					<img src="/img/portrait.jpg"/>
				</div>
			</body>
		</html>
		';

		mail("primfxtuto@gmail.com", "CONTACT - Monsite.com", $message, $header);
		$msg="Your message has well been sent !";
	}
	else
	{
		$msg="All the fields must be completed!";
	}
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
  <? php include('includes/en/title_contact_en.php'); ?>
</head>

<body>
	<?php include("includes/en/header_en.php"); ?>

  <?php include("includes/en/main-contact_en.php"); ?>
  
	<?php include("includes/en/contact-form_en.php"); ?>
 
  <?php include("includes/en/footer_en.php"); ?>

  <script src="js/main.js"></script>
</body>

</html>
		
