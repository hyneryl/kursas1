<?php 
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME", "forma");


	$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
	if($mysqli->connect_error) {
		echo "Sorry, there seems to be a connection issue.\n";
		echo 'Error: ' .$mysqli->connect_error . '\n';
		exit();
	}

	mysqli_query($mysqli, "INSERT INTO clients (vardas, email, message)VALUES('$_POST[name]', '$_POST[email]', '$_POST[message]')");

// tikriname ar sujungimas prie db rasant arba virsutine eilute arba apacioje paragrafus priklausianti ar viena eilute ar daugiau visas eilutes

//// jei viena eilute
//	$sql = "SELECT * FROM klientai";
//	$result = $mysqli->query($sql);
//	$array = $result->fetch_assoc();
//	var_dump($array);
//
////
////jei visas eilutes
//	$sql = "SELECT * FROM klientai";
//	$result = $mysqli->query($sql);
//	while($array = $result->fetch_assoc()){
//		var_dump($array);
//	}
////