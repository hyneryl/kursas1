<!DOCTYPE html>
<html lang="lt">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Funkcijos su parametrais</title>
</head>

<body>
		<?php
			function sudetis($num1, $num2) {
				$suma = $num1 + $num2;
				return $suma;
			}
	
			$atsakymas = sudetis(10, 20);
			echo "Atsakymas: $atsakymas ";
		?>
</body>
</html>
