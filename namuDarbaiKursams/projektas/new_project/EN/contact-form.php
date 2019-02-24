<?php
	if(isset($_POST['Submit'])) {
	$vardas = trim($_POST['vardas']);
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
			echo "<script>alert('Dekojame. Jusu zinute gauta. Netrukus susisieksime.');</script>";
		}
	}

	include('db.php');
	}
?>

<div id="after_submit"></div>
	<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
	<div class="row">
		<label class="required" for="vardas">Your name:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" required /><br />
		<span id="name_validation" class="error_message"></span>
	</div>
	<div class="row">
		<label class="required" for="email">Your email:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" required /><br />
		<span id="email_validation" class="error_message"></span>
	</div>
	<div class="row">
		<label class="required" for="message">Your message:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30" required></textarea><br />
		<span id="message_validation" class="error_message"></span>
	</div>
	<div>
			<input id="submit_button" type="submit" value="Send email" />
	</div>
	</form>