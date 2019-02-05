<?php ini_set('display_errors','1'); ?>

<!DOCTYPE html>
<html lang="lt">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Person name Surname</title>
</head>

<body>
		<?php 
			class Person {
				public $name;
				public $surname;
				
				public function labas() {
						return 'Lakas! As esu ' . $this -> name . ' ' . $this -> surname .'<br>';
				}
		}
	
		$zmogusA = new Person();
		$zmogusB = new Person();
	
		$zmogusA -> name = "Chris"; 
		$zmogusA -> surname = "Marie";
	
		$zmogusB -> name = "Karolis";
		$zmogusB -> surname = "Barakuda";
		echo $zmogusA -> labas();
		echo $zmogusB -> labas();
		?>
		
</body>
</html>
