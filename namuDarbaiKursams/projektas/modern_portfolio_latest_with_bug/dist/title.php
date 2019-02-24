<?php
session_start ();
$langue = 'en';
if (isset($_COOKIE['langue']) ) {
$langue = $_COOKIE['langue'];
}
?>


<title>
	<?php 
		if($langue == 'en') {
			echo 'Welcome to my Portfolio';
	 } else if ($langue == 'fr') {
			echo 'Bienvenue sur mon Portefolio';
	 } else if ($langue == 'lt') {
		 echo 'Sveiki atvykę į mano Portfolio';
	 }
	; ?>
	
	
</title>