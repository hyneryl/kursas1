<?php
	$country = 'Lietuva'; 
	$city = 'Vilnius'; 
	$population = 574221;
?>

<!--exercice 1.1-->
<ul>
	<li><?php echo $country  ; ?></li>
	<li><?php echo $city  ; ?></li>
	<li><?php echo $population  ; ?></li>
</ul>

<!--exercice 2.1-->
<p><?php echo $city . ' - Lietuvos sostinė' ; ?></p>

<!--exercice 2.2-->

<p><?php echo " $city ". "ir " . $country . " sparčiai auga." ; ?></p>

<!--exercice 2.3-->
  
<?php 
	$largest_population = "true";
	echo $largest_population; 
?>

<!--exercice 3.1-->
<br>
<?php 
	$x = 10; 
	$y = 7;
	$z = $x + $y;
	echo "$x + $y =  . $z <br />"; 
	
	$z = $x - $y;
	echo "$x - $y =  . $z <br />";

	$z = $x * $y;
	echo "$x * $y = . $z <br />";

	$z = $x / $y;
	echo "$x / $y = . $z <br />";

	$z = $x % $y;
	echo "$x % $y = . $z <br />";
	
?> 