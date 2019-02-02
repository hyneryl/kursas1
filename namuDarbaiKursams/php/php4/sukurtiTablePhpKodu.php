<DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Masyvai ir Ciklai</title>
	<style>
		tr {
			height: 40px;
			text-align: center;
		}
		td {
			width: 60px;
		}
		
	</style>
</head>

<body>
	
	<?php

	//daugybos lentele
	echo '<table border= "1" ';
// arba echo "<table border=\"1\";

// sukuriame daugbos lentele skaiciams 1-10.
// Pradedame nuo eiluciu.

	for ($row = 1; $row <= 10; $row++) {
			echo "<tr>\n";
		
		// kiekvienam skaiciui eiluteje sukuriame stulpteli.
		for ($col = 1; $col <=10; $col++) {
			// atliekame matematini veiksma
			$x = $col * $row;
			
			//siunciame rezultatta i atitinkama stulpeli.
			echo "<td>$x</td>\n";		
		}
		echo "</tr>";
	}
	echo "</table>";
?>

</body>
		
</html>
	
