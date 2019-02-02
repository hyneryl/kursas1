<DOCTYPE html>
<html>

<head>
</head>

<body>
	<?php
		$cities = ['Berlynas','Roma','Londonas']; 
		print_r($cities);
	?>
	
	<ul>
		<li><?php echo $cities[2]?></li>
	</ul>

	
	<?php
		$cities = ['Berlynas','Roma','Londonas']; 
		$cities[] = 'Tokijas';
			print_r($cities);
	?>

	
	<?php 
		$cities2 = [
			'tokijas' => 13.6,
			'Vašingtonas' => 0.6,
			'Maskva' => 11.5,
		]
	?>
	<br>
		<?php print_r($cities2);
		?>
		
		<?php 
			$cities2['Londonas'] = 8.6;
		?>
	<br>
		<?php print_r($cities2);
		?>
	<br>
	
	<ul> 
	<?php 
		$cities2 = [
			'tokijas' => 13.6,
			'Vašingtonas' => 0.6,
			'Maskva' => 11.5,
			'Londonas' => 8.6,
		];		
		foreach ($cities2 as $gyventoju_skaicius) {
			echo '<li>Gyventojų skaičius: ' . $gyventoju_skaicius . 'mln.</li>';
		}
	?>
	</ul>
	
</body>
		
</html>
