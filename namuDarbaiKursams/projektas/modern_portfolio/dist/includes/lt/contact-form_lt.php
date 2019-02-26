<?php
	if(isset($_POST['Submit'])) {
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$messsage = trim($_POST['message']);
	if (!empty($name) && !empty($email) && !empty($message)) {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$from = "$email";
			$to = "hyneryl@gmail.com";
			$subject = "new message";
			$autor = 'From: ' . $name . ', ' . $email;
			$mess = htmlspecialchars($message);
			mail($to, $subject, $autor,$mess, $from);
			echo "<script>alert('Thanks. Your message has been received. We will contact you back as soon as possible.');</script>";
		}
	}

	include('db.php');
	}
?>

<div id="after_submit"></div>
	<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
	<div class="row">
		<label class="required" for="name">Jūsų vardas:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" required /><br />
		<span id="name_validation" class="error_message"></span>
	</div>
	<div class="row">
		<label class="required" for="email">Jūsų el. pašto adresas:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" required /><br />
		<span id="email_validation" class="error_message"></span>
	</div>
	<div class="row">
		<label class="required" for="message">Jūsų žinūtė:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30" required></textarea><br />
		<span id="message_validation" class="error_message"></span>
	</div>
	<div>
			<input id="submit_button" type="submit" value="Siūsti el.laišką" />
	</div>
	</form>