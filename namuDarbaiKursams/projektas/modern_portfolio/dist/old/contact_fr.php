<?php ini_set('display_errors','1'); ?>

<?php
if(isset($_POST['submit']))
{
	if(!empty($_POST['name']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='De:"chrismarie.eu"<hyneryl@gmail.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<img src="../img/portrait.jpg"/>
					<br />
					<u>Nom de l\'expéditeur :</u>'.$_POST['name'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
					<br />
					<img src="../../img/portrait.jpg"/>
				</div>
			</body>
		</html>
		';

		mail("hyneryl@gmail.com", "CONTACT - Monsite.com", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">

  <link rel="stylesheet" href="css/main.css">
  <? php include('includes/fr/title_contact_fr.php'); ?>
</head>

<body>
	<?php include('includes/fr/header_fr.php'); ?>

  <?php include('includes/fr/main-contact_fr.php'); ?>
  
	<?php include('includes/fr/contact-form_fr.php'); ?>
 
  <?php include('includes/fr/footer_fr.php'); ?>

  <script src="js/main.js"></script>
</body>

</html>
		
