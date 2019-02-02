<?php 
		$cities4 = ['Tokijas', 'Vašingtonas', 'Maskva'];
?>
	
<DOCTYPE html>
<html>

<head>
</head>

<body>
	<ul>
		<?php
			for ($i = 0; $i < count($cities4); $i++) {
			echo '<li>' . $cities4[$i] . '</li>';
			}
		?>
	</ul>
	
	<?php $cities4 = array('Tokijas', 'Vašingtonas', 'Maskva'); ?>
	<ul>
	<?php 
		foreach($cities4 as $city) { ?>
		<li><?php echo $city; ?></li>
	<?php } ?>
	</ul>

	
</body>
		
</html>