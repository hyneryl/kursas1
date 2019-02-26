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
        //Get Form Data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        if(!empty($email) && !empty($name) && !empty($message)) {
            //Passed
            //Check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $msg = 'Please, use valid email address';
                $msgClass = 'alert-danger';
            } else {
                $toEmail = 'hyneryl@gmail.com';
                $subject = 'New Message from '.$name;
                $body = '<h2>New Message</h2>
                        <h4>Name</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        <h4>Message</h4><p>'.$message.'</p>';
                $headers = "Mime-Version: 1.0" ."\r\n";
                $headers .= "Content-Type:text/html;charset= UTF-8" . "\r\n";
                $headers .= "From: " .$name. "<".$email.">" . "\r\n";
                if(mail($toEmail, $subject, $body, $headers)) {
                    $msg = 'Your email successfully sent!';
                    $msgClass = 'alert-success';
                } else {
                    $msg = 'Something went wrong';
                    $msgClass = 'alert-danger';
                }
            }
        } else {
            $msg = 'Please, kindly fill all fields';
            $msgClass = 'alert-danger';
        }
    }
?>


<main id="contact">
	<h1 class="lg-heading">
		Contact
		<span class="text-secondary">Me</span>
	</h1>
	<h2 class="sm-heading">
		This is how you can reach me:
	</h2>
	<div class="boxes">
		<div>
			<span class="text-secondary">Email: </span> hyneryl@gmail.com
		</div>
		<div>
			<span class="text-secondary">Phone: </span> +(370) 602-47307
		</div>
		<div>
			<span class="text-secondary">Address: </span> Įsruties str., Vilnius, LT-06221, Lithuania
		</div>
		<div>
			<span class="text-secondary">Location map:</span><br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d576.2467158609022!2d25.181513129235913!3d54.70985307354736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTTCsDQyJzM1LjUiTiAyNcKwMTAnNTUuNCJF!5e0!3m2!1sfr!2slt!4v1550408355115" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</main>

<div id="after_submit">
	<?php if($msg != ''): ?>
        	<div class="after_submit alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
	<?php endif; ?>
</div>	
	<form id="contact_form" action="index.php" method="POST" enctype="multipart/form-data">
	<div class="row">
		<label class="required" for="name">Your name:</label><br />
		<input id="name" class="input" name="name" type="text" value="<?php echo isset($_POST['name']) ? $name : ''; ?>" size="30" required /><br />
		<span id="name_validation" class="error_message"></span>
	</div>
	<div class="row">
		<label class="required" for="email">Your email:</label><br />
		<input id="email" class="input" name="email" type="text" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" size="30" required /><br />
		<span id="email_validation" class="error_message"></span>
	</div>
	<div class="row">
		<label class="required" for="message">Your message:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30" required><?php echo isset($_POST['message']) ? $message : ''; ?> </textarea><br />
		<span id="message_validation" class="error_message"></span>
	</div>
	<div>
			<input id="submit_button" class="submit" type="submit" value="Send email" />
	</div>
	</form>