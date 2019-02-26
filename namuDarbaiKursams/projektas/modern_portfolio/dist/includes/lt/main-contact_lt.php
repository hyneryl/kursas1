<?php
		ini_set('display_errors','1');
    $msg = '';
    $msgClass = '';

    if(filter_has_var(INPUT_POST, 'submit')) {
    //setup
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'chris');
        // Connexion
    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
       // Test de la connexion
    if($mysqli->connect_error) {
        echo 'Sorry, there seems to be a connection issue.\n';
        echo 'Error: ' .$mysqli->connect_error . '\n';
        exit();
    }
    // Attempt insert query execution
    $sql = "INSERT INTO form (name, email, message)VALUES('$_POST[name]', '$_POST[email]', '$_POST[message]')";
    if(mysqli_query($mysqli, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
    }
 
    // Close connection
    mysqli_close($mysqli);;// CIA TAS FAILAS SU PRISIJUNGIMU PRIE DB
        //Get Form Data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        if(!empty($email) && !empty($name) && !empty($message)) {
            //Passed
            //Check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $msg = 'Veuillez, utiliser une adresse email valide, svp!';
                $msgClass = 'alert-danger';
            } else {
                $toEmail = 'hyneryl@gmail.com';
                $subject = 'Nouveau Message de '.$name;
                $body = '<h2>Nouveau Message</h2>
                        <h4>Nom</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        <h4>Message</h4><p>'.$message.'</p>';
                $headers = "Mime-Version: 1.0" ."\r\n";
                $headers .= "Content-Type:text/html;charset= UTF-8" . "\r\n";
                $headers .= "De : " .$name. "<".$email.">" . "\r\n";
                if(mail($toEmail, $subject, $body, $headers)) {
                    $msg = 'Votre email a été envoyé avec succès !';
                    $msgClass = 'alert-success';
                } else {
                    $msg = 'Quelque chose ne s\'est pas bien passé !';
                    $msgClass = 'alert-danger';
                }
            }
        } else {
            $msg = 'Veuillez remplir tous les champs svp !';
            $msgClass = 'alert-danger';
        }
    }
?>


<main id="contact">
	<h1 class="lg-heading">
		Susisiekite su
		<span class="text-secondary">Manimi</span>
	</h1>
	<h2 class="sm-heading">
		Štai kaip galite:
	</h2>
	<div class="boxes">
		<div>
			<span class="text-secondary">El. pašto adresas: </span> hyneryl@gmail.com
		</div>
		<div>
			<span class="text-secondary">Mob. Nr: </span> +(370) 602-47307
		</div>
		<div>
			<span class="text-secondary">Adresas: </span> Įsruties str., Vilnius, LT-06221, Lithuania
		</div>
		<div>
			<span class="text-secondary">Žiemialiapis:</span><br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d576.2467158609022!2d25.181513129235913!3d54.70985307354736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTTCsDQyJzM1LjUiTiAyNcKwMTAnNTUuNCJF!5e0!3m2!1sfr!2slt!4v1550408355115" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
<div id="after_submit"></div>
	<form id="contact_form" action="index.php" method="POST" enctype="multipart/form-data">
	<div class="row">
		<label class="required" for="name">Jūsų vardas:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" required /><br />
		<span id="name_validation" class="error_message"></span>
	</div>
	<div class="row">
		<label class="required" for="email">Jūsų el. pašto adresas:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" required /><br />
		<span id="email_validation" class="error_message"></span>
	</div>
	<div class="row">
		<label class="required" for="message">Jūsų žinūtė:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30" required></textarea><br />
		<span id="message_validation" class="error_message"></span>
	</div>
	<div>
			<input id="submit_button" type="submit" value="Siūsti el.laišką" />
	</div>
	</form>
</main>
