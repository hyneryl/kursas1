<DOCTYPE html>
<html>

<head>
</head>

<body>
	<?php 
		$temp = [-4,3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15,
19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
		
		//Get Highest Number    
   	rsort($temp);
   	$highest = array_slice($temp, -5, 5);   

   //Get Lowest Number
   	asort($temp);
   	$lowest = array_slice($temp, 5, 5);    
		echo $lowest;
   	//Get Average Number
   	$average = array_sum($temp) / count($temp);	
	
		
	?>
	 
	
</body>
		
</html>