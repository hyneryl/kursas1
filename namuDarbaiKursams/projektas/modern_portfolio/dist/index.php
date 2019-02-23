<?php
/**
* Détection automatique de la langue du navigateur
*
* Les codes langues du tableau $aLanguages doivent obligatoirement être sur 2 caractères
*
* Utilisation : $langue = autoSelectLanguage(array('fr','en','es','it','de','cn'), 'en')
*
* @param array $aLanguages Tableau 1D des langues du site disponibles (ex: array('fr','en','es','it','de','cn')).
* @param string $sDefault Langue à choisir par défaut si aucune n'est trouvée
* @return string La langue du navigateur ou bien la langue par défaut
* @author chris marie
* @version 0.1
*/
function autoSelectLanguage($aLanguages, $sDefault = 'en') {
 if(!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
   $aBrowserLanguages = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
   foreach($aBrowserLanguages as $sBrowserLanguage) {
     $sLang = strtolower(substr($sBrowserLanguage,0,2));
     if(in_array($sLang, $aLanguages)) {
       return $sLang;
     }
   }
 }
 return $sDefault;
}
/** trying to figure out how to use menu value to use in the same index.php 
different home menu content .php within index.php or 'about_' .$langue. '.php' or same thing with work or contact' **/
/** according to the language and the menu the user will click on the website when he will navigate... **/

/**function autoSelectMenu($menu, $mDefault = 'home'. '_' $langue) {
	return $mDefault; 
	}**/
?>

<?php 
	session_start ();
		$langue = autoSelectLanguage(array('fr','en','lt'), 'en');
		$menu = array('home', 'about', 'work', 'contact', );
?>

<!DOCTYPE html>
<html <?php 
			if (!isset($_SESSION['menu']) ) {
					$_SESSION['menu'] = 'home';
			}
			echo ('includes/' .$langue. '/lang_'.$langue. '.php'); ?>>
 <head>
 <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"> 
 <link rel="stylesheet" href="css/main.css">
 <?php 
	 if (!isset($_SESSION['menu']) ) {
		 $_SESSION['menu'] = 'home';
	 }
	 include('includes/'.$langue.'/title_'.$langue. '.php'); 
	?>
 </head>
 <body id="bg-img">
 <?php include('includes/'.$langue.'/header_'.$langue.'.php'); ?>


<?php
if (!isset($_SESSION['menu']) ) {
$_SESSION['menu'] = 'home';
}
include('includes/'.$langue.'/main-'.$_SESSION['menu'].'_'.$langue.'.php');

include('includes/'.$langue.'/footer_'.$langue.'.php');

?>
 <script src="js/main.js"></script>


</body> 
</html>