<footer id="main-footer">
    <?php
    $name = 'chrismarie.eu';
		$fromYear = 2019;
    $thisYear = (int)date('Y');
    if($fromYear >= $thisYear) {
        echo $name . " Copyright &copy; $thisYear Visos teises rezervuotos";
    } elseif ($fromYear <= $thisYear) {
        echo $name . 'Copyright &copy;' .$fromYear. '-' .$thisYear. ' Visos teises rezervuotos<br>';
    }
?>

</footer>