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
	$metai = 1774;
	if ($metai >= $cities3['Vašingtonas'][1]) {
		echo 'Vašingtonas yra ' . $cities3['Vašingtonas'][2] .' sostines';
	} elseif ($metai == $cities3['Vašingtonas'][1]) {
		echo 'JAV sostine vis dar Filadelfijoje.';
		}
		else {
			echo 'Liko ' . ($cities3['Vašingtonas'][1] -= $metai) . ' metų iki Vašingtono ikurimo.';
		}
?>
	
</body>
		
</html>