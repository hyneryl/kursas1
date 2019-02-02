<DOCTYPE html>
<html>

<head>
</head>

<body>
	<?php 
		$cities3 = [
			'Tokijas' => [13.6, 1868,'Japonija'],
			'Vašingtonas' => [0.6, 1790, 'JAV'],
			'Maskva' => [11.5, 1147,'Rusija'],
		]
	?>
	<br>
	<?php 
			print_r($cities3);
		?>
		
		<br>
	<?php 
			$cities3['Londonas'] = [8.6, 43, 'Anglija'];
		?>
		<br>
	<?php 
			print_r($cities3);
		?>
		<br>
		
	
	<ul> 
		<li>Gyventojų skaičius: <?php echo $cities3['Londonas'][0] . ' mln.'; ?></li>
		<li>Įkurtas: <?php echo $cities3['Londonas'][1] . ' m.'; ?></li>
		<li>Šalis: <?php echo $cities3['Londonas'][2]; ?></li>
	</ul>
	
</body>
		
</html>