<?php 
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME", "chris");

//	define("DB_USER", "chris");
//	define("DB_PASSWORD", "mariechris258");
//	define("DB_NAME", "form");
//

	$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
	if($mysqli->connect_error) {
		echo "Sorry, there seems to be a connection issue.\n";
		echo 'Error: ' .$mysqli->connect_error . '\n';
		exit();
		}
//	
//$sql = "SELECT * FROM klientai";
//	$result = $mysqli->query($sql);
//	$array = $result->fetch_assoc();
//	var_dump($array);
	mysqli_query($mysqli, "INSERT INTO form (name, email, message)VALUES('$_POST[name]', '$_POST[email]', '$_POST[message]')");

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