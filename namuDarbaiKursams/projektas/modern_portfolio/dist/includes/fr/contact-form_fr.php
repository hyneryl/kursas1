<div id="after_submit"></div>
	<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
	<div class="row">
		<label class="required" for="name">Votre nom:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" required /><br />
		<span id="name_validation" class="error_message"></span>
	</div>
	<div class="row">
		<label class="required" for="email">Votre adresse email:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" required /><br />
		<span id="email_validation" class="error_message"></span>
	</div>
	<div class="row">
		<label class="required" for="message">Votre message:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30" required></textarea><br />
		<span id="message_validation" class="error_message"></span>
	</div>
	<div>
			<input id="submit_button" type="submit" value="Envoyer un email" />
	</div>
	</form>