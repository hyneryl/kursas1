
<header>
	<div class="menu-btn">
		<div class="btn-line"></div>
		<div class="btn-line"></div>
		<div class="btn-line"></div>
	</div>
	<nav class="menu">
	<div class="menu-branding">
		<div class="portrait"></div>
	</div>
		<ul class="menu-nav">
			<li class="nav-item lang">
				<a href="index.php" class="nav-link lang">
					<?php
					 if($langue == 'en') {
							echo 'home';
					 } else if ($langue == 'fr') {
							echo 'Page d\'accueil';
					 } else if ($langue == 'lt') {
						 echo 'Pagrindinis';
					 }
					?>
			</a>
			</li>			
			<li class="nav-item lang">
				<a href="about.php" class="nav-link lang">
						<?php
						 if($langue == 'en') {
								echo 'About me';
						 } else if ($langue =='fr') {
								echo 'A propos de moi';
						 } else if ($langue == 'lt') {
							 echo 'Apie mane';
						 }
						?>
				</a>
			</li>
			<li class="nav-item lang">
				<a href="work.php" class="nav-link lang">
					<?php
					 if($langue == 'en') {
							echo 'My Work';
					 } else if ($langue == 'fr') {
							echo 'Mes Projets';
					 } else if ($langue == 'lt') {
						 echo 'Mano Projektai';
					 }
					?>
			</a>
			</li>
			<li class="nav-item lang">
				<a href="contact.php" class="nav-link lang">
					<?php
					 if($langue == 'en') {
							echo 'How to reach me';
					 } else if ($langue == 'fr') {
							echo 'Comment me contacter';
					 } else if ($langue == 'lt') {
						 echo 'Kaip susisiekti su Manimi';
					 }
					?>
				</a>			
			</li>
		</ul>
	</nav>
	<ul class="lang">
		<li>
			<a href='en.php' alt= 
				<?php
					 if($langue == 'en') {
							echo 'English'.'>EN';
					 } else if ($langue == 'fr') {
							echo 'Anglais'.'>AN';
					 } else if ($langue == 'lt') {
						 echo 'Anglų'.'>EN';
					 }
				?>
			</a>
		</li>
		<li>
			<a href='fr.php' alt=
					<?php
					 if($langue == 'fr') {
							echo 'Français'.'>FR';
					 } else if ($langue == 'en') {
							echo 'French'.'>FR';
					 } else if ($langue == 'lt') {
						 echo 'Prancūzų'.'>FR';
					 }
					?>
			</a>
		</li>
		<li>
			<a href='lt.php' alt=
					<?php
					 if($langue == 'lt') {
							echo 'Lietuvių'.'>LT';
					 } else if ($langue == 'en') {
							echo 'Lithuanian'.'>LT';
					 } else if ($langue == 'fr') {
						 echo 'Lituanien'.'>LT';
					 }
				?>
			</a>
		</li>
</ul>
</header>