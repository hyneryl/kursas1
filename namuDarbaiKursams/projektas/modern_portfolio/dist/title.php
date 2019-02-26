

	$menu = $_SESSION['menu'];
	switch($langue) {   
		case ('en'):
			switch($menu) {   
				case ('home'): $titlePage='Welcome to my Portfolio'; break;   
				case ('about'): $titlePage='About me'; break;   
				case ('work'): $titlePage='My Working experience &amp; Projects'; break;  
 				case ('contact'): $titlePage='How To Reach Me'; break;  
				default: $titlePage='Welcome to my Portfolio'; 
			}
			break;   
		case ('fr'): 
			switch($menu) {   
				case ('home'): $titlePage='Bienvenue sur mon Portefolio'; break;   
				case ('about'): $titlePage='A propos de moi'; break;   
				case ('work'): $titlePage='Experience professionnelle Mes Projets'; break;  
				case ('contact'): $titlePage='Comment Me Contacter'; break; 
				default: $titlePage='Bienvenue sur mon Portefolio';  
			}
			break;   
		case ('lt'): 
			switch($menu) {   
				case ('home'): $titlePage='Sveiki atvykį į mano portfolio'; break;   
				case ('about'): $titlePage='Apie Mane'; break;   
				case ('work'): $titlePage='Mano Darbo Patirtis ir Projektai'; break;   
				case ('contact'): $titlePage='Kaip Susisiekti Su Manimi'; break; 
				default: $titlePage='Sveiki atvykį į mano portfolio'; 
			}
			break;   
		default: $titlePage='Welcome to my Portfolio'; 
	}