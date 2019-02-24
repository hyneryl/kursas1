<footer id="main-footer">
    <?php
    $name = 'chrismarie.eu';
		$fromYear = 2019;
    $thisYear = (int)date('Y');
    if($fromYear >= $thisYear) {
        echo $name . " Copyright &copy; $thisYear Tous droits réservés";
    } elseif ($fromYear <= $thisYear) {
        echo $name . 'Copyright &copy;' .$fromYear. '-' .$thisYear. ' Tous droits réservés<br>';
    }
?>

</footer>