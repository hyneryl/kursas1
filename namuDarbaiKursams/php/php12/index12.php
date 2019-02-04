<?php
    if(isset($_POST['submit'])) {
        echo 'Welcome, ' . $_POST['name'] . ' ' . $_POST['surname'];
        exit();
    }
?>


<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formos spauzdinimui</title>
</head>

<body>
      <form action="<?php $_PHP_SELF; ?>" method="POST">
       <input type="text" name="name" placeholder="insert your Name">
       <input type="text" name="surname" placeholder="insert your Surname">
       <button type="submit" name="submit" style="padding:20px 40px">Let's watch your datas</button>
       </form>
    
</body>
</html>