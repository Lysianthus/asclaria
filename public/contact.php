<?php
	$title = "Contact | ";
	include 'includes/header.php';
?>

	<main id="content">
		<h1 class="heading">Contact</h1>
		<article class="article">
<?php

		if (isset($_POST['contact'])) :
			$security = $_POST['security'];

			if ($security == 'rats') :
				$name = stripslashes($_POST['name']);
				$email = $_POST['email'];
				$url = $_POST['url'];
				$subject = stripslashes($_POST['subject']);
				$message = stripslashes($_POST['message']);

				$to = 'hello@asclaria.org';
				$subj = "[Asclaria] $subject";
				$body = "Name: $name\nE-mail address: $email\nWebsite: $url\n\nMessage:\n\n$message\n\n---\n\nThis message was sent through the contact form on Asclaria.";
				$header = "From: $name <bot@asclaria.org>";

				mail($to, $subj, $body, $header);

?>
			<p>Your message has been sent successfully. Thank you so much for your time. Hopefully, you will receive a reply within the week. Have a great day!</p>
<?php

			else :

?>
			<p>Something went wrong. Maybe you're not human?</p>
<?php

			endif;
		endif;

?>
			<p>Use this contact form to send me whatever!</p>
			<p>Marked (*) fields are required.</p>
			<form action="#" method="post">
				<ol class="form">
					<li>
						<label>Type &lsquo;star&rsquo; backwards *</label>
						<input name="security" type="text" placeholder="Hint: rats" required />
					</li>
					<li>
						<label>Name *</label>
						<input name="name" type="text" placeholder="Your amazing name" required />
					</li>
					<li>
						<label>E-mail Address *</label>
						<input name="email" type="text" placeholder="Your awesome e-mail address" required />
					</li>
					<li>
						<label>Website</label>
						<input name="url" type="text" placeholder="Your spiffy website" />
					</li>
					<li>
						<label>Subject *</label>
						<input name="subject" type="text" placeholder="A title to your speech" required />
					</li>
					<li>
						<label>Message *</label>
						<textarea name="message" rows="5" placeholder="Tell me your secrets!" required></textarea>
					</li>
					<li class="align-center">
						<button name="contact"><span class="fa fa-send-o"></span> Send message!</button>
					</li>
				</ol>
			</form>
		</article> <!-- .article -->
	</main> <!-- #content -->

<?php include 'includes/footer.php'; ?>