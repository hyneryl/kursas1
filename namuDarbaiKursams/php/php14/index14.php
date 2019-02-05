<?php ini_set('display_errors','1'); ?>

<!DOCTYPE html>
<html lang="lt">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>php14 - copyright</title>
</head>

<body>
		&copy; <?php echo date("Y")-1; ?> <br>
		&copy; <?php
  $fromYear = 2015; 
  $thisYear = (int)date('Y')-1; 
  echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Chris's company's Copyrights <br>
  
		&copy; <?php
		$fromYear = 2019; // Set your website start date
		$thisYear = date('Y'); // Keeps the second year updated
		if ($fromYear >= $thisYear) {
			echo $thisYear;

		} else if ($fromYear <= $thisYear) {
			echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');
		}
			else {
			echo '<br>' . $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : ''); 
		}
	
	// try with function copyright()
	$name = 'chrismarie.eu';
	$fromYear = 2051; // Set your website start date
	$thisYear = date('Y'); // Keeps the second year updated
	function copyright($name, $fromYear = null){
			$thisYear = date("Y");
			if(is_null($fromYear) || $thisYear == $fromYear) {
					return "&copy; ". date("Y") . " $name All Rights Reserved";
			} else if ($fromYear >= $thisYear) {
				return "&copy; ". date("Y") . " $name All Rights Reserved";
			}
			return "&copy; $fromYear-" . date("Y") . " $name All Rights Reserved";
	}

	//Example
	echo '<br>' . copyright($name, $fromYear);
?>
	<?php
	// try simplier version
    $name = 'chrismarie.eu';
		$fromYear = 2011;
    $thisYear = (int)date('Y');
    if($fromYear >= $thisYear) {
        echo $name . " &copy; $thisYear";
    } else {
        echo $name . ' &copy;' .$fromYear. '-' .$thisYear. '<br>';
    }
?>

	
	
  
</body>
</html>
