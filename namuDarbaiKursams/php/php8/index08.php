<?php
   $temp = [4,3,9,19,19,9,12,20,24,20,12,14,18,21,20,23,16,16,15,19,19,17,17,15,12,13,13,15,19,21];
   //Get Average Number
   $average = array_sum($temp) / count($temp);
   rsort($temp);
   echo "Vidutine temperatura: $average Celcius degrees <br>";    
   $sum = array_unique($temp);
  echo "Penkios šilčiausios temperatūros: ";
  $highest = array_slice($sum, 0, 5);
  foreach ($highest as $temperature) {
    echo "$temperature, Celcius degrees ";
  }
  echo '<br>';
  echo "Penkios šalčiausios temperatūros: ";
  $lowest = array_slice($sum, -5, 5);
  foreach ($lowest as $temperature) {
    echo "$temperature, Celcius degrees ";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP8</title>
</head>

<body>
              
</body>
</html>