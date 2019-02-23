<footer id="main-footer">
    <?php
    $name = 'chrismarie.eu';
		$fromYear = 2019;
    $thisYear = (int)date('Y');
    if($fromYear >= $thisYear) {
        echo $name . " Copyright &copy; $thisYear All rights reserved";
    } elseif ($fromYear <= $thisYear) {
        echo $name . 'Copyright &copy;' .$fromYear. '-' .$thisYear. ' All rights reserved<br>';
    }
?>

</footer>