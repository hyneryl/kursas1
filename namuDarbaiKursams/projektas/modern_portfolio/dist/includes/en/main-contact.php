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

		mail("hyneryl@gmail.com", "CONTACT - Monsite.com", $message, $header);
		$msg="Your message has well been sent !";
	}
	else
	{
		$msg="All the fields must be completed!";
	}
}
?>

<?= include('text_contact_en.php'); ?>
</head>
<body id="bg-img">

<main id="contact">
	<h1 class="lg-heading">
		Contact
		<span class="text-secondary">Me</span>
	</h1>
	<h2 class="sm-heading">
		This is how you can reach me:
	</h2>
	<div class="boxes">
		<div>
			<span class="text-secondary">Email: </span> hyneryl@gmail.com
		</div>
		<div>
			<span class="text-secondary">Phone: </span> +(370) 602-47307
		</div>
		<div>
			<span class="text-secondary">Address: </span> Įsruties str., Vilnius, LT-06221, Lithuania
		</div>
		<div>
			<span class="text-secondary">Location map:</span><br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d576.2467158609022!2d25.181513129235913!3d54.70985307354736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTTCsDQyJzM1LjUiTiAyNcKwMTAnNTUuNCJF!5e0!3m2!1sfr!2slt!4v1550408355115" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</main>

<?php include('includes/' .$langue. '/contact_form_'.$langue. '.php')