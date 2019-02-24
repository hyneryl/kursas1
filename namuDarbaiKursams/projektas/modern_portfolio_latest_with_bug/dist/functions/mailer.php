<?php
    function dbConnector() {
        try {
            return $pdo = new PDO('mysql:host=127.0.0.1; dbname=forma', 'root', '');
    }   catch (PDOException $e){
            die($e->getMessage());
    }
}
#pdo tiesiog kintamasis, o po ir klase
#PRISIJUNGIMAS PRIE DUOMENU BAZES
#UZKLAUSA I DB
    function visosUzduotys($pdo) {
        $teiginys = $pdo->prepare('select * from ndarbai');
        $teiginys->execute();
    
    return $teiginys->fetchAll(PDO::FETCH_CLASS, 'namuDarbas');
}


	if(isset($_POST['Submit'])) {
		include('db.php')
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$messsage = trim($_POST['message']);
	if (!empty($name) && !empty($email) && !empty($message)) {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$from = "$email";
			$to = "hyneryl@gmail.com";
			$subject = "New message";
			$autHor = 'From: ' . $name . ', ' . $email;
			$message = htmlspecialchars($message);
			mail($to, $subject, $author,$message, $from);
			echo "<script>alert('Thanks. Your message has been received. We will contact you back as soon as possible.');</script>";
		}
	}

	include('db.php');
	}