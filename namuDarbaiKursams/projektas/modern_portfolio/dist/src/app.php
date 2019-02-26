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
			echo "<script>alert('Dekojame. Jusu zinute gauta. Netrukus susisieksime.');</script>";
		}
	}

	include('db.php');
	}