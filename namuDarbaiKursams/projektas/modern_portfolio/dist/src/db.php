<?php
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'chris');
        // Connexion
    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
       // Test de la connexion
    if($mysqli->connect_error) {
        echo 'Sorry, there seems to be a connection issue.\n';
        echo 'Error: ' .$mysqli->connect_error . '\n';
        exit();
    }
    // Attempt insert query execution
    $sql = "INSERT INTO form (name, email, message)VALUES('$_POST[name]', '$_POST[email]', '$_POST[message]')";
    if(mysqli_query($mysqli, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
    }
 
    // Close connection
    mysqli_close($mysqli);

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

//	define("DB_USER", "chris");
//	define("DB_PASSWORD", "mariechris258");
//	define("DB_NAME", "form");


?>