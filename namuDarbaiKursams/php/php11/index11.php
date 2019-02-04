<?php
    if(isset($_POST['submit'])) {
        function result($num1, $num2) {
            $plotis = $num1 * $num2;
            return $plotis;
        };
        $rezultatas = result($_POST['ilgis'], $_POST['plotis']);
        echo "The Rectangle area is: $rezultatas m2";
        exit();
    };
?>


<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submit form insert</title>
</head>

<body>
      <form action="<?php $_PHP_SELF; ?>" method="POST">
       <input type="text" name="ilgis" value="" placeholder="insert length">
       <input type="text" name="plotis" value="" placeholder="insert width">
       <button type="submit" style="padding:20px 40px" name="submit">Lets See the Area function result</button>
      </form>
    
</body>
</html>