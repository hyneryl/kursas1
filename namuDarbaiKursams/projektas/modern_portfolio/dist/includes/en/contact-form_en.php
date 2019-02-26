<?php

    $msg = "";
    $msgClass = "";

    if(filter_has_var(INPUT_POST, 'submit')) {
        include('db.php');// CIA TAS FAILAS SU PRISIJUNGIMU PRIE DB
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

<div id="after_submit">
	<?php if($msg != ''): ?>
        	<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
	<?php endif; ?>
</div>	
	<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
	<div class="row">
		<label class="required" for="name">Your name:</label><br />
		<input id="name" class="input" name="name" type="text" value="<?php echo isset($_POST['name']) ? $name : ''; ?>" size="30" required /><br />
		<span id="name_validation" class="error_message"></span>
	</div>
	<div class="row">
		<label class="required" for="email">Your email:</label><br />
		<input id="email" class="input" name="email" type="text" value="<?php echo isset($_POST['message']) ? $name : ''; ?>" size="30" required /><br />
		<span id="email_validation" class="error_message"></span>
	</div>
	<div class="row">
		<label class="required" for="message">Your message:</label><br />
		<textarea id="message" class="input" name="message"><?php echo isset($_POST['message']) ? $message : ''; ?>rows="7" cols="30" required></textarea><br />
		<span id="message_validation" class="error_message"></span>
	</div>
	<div>
			<input id="submit_button" type="submit" value="Send email" />
	</div>
	</form>