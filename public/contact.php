<?php

require_once '/home/asclaria/libraries/swiftmailer/lib/swift_required.php';

$title = "Contact | ";
include 'includes/header.php';

?>

	<div class="page" id="page">
		
<?php include 'includes/page__menu.php'; ?>
		
		<h1 class="page__heading">Contact</h1>
		<article class="article">
<?php

		if (isset($_POST['contact'])) :
			$security = $_POST['security'];

			if ($security == 'rats') :
				$name = stripslashes($_POST['name']);
				$email = $_POST['email'];
				$url = $_POST['url'];
				$subject = stripslashes($_POST['subject']);
				$message = nl2br(stripslashes($_POST['message']));

				$body = "<p><b>Name:</b> $name</p>
<p><b>Email Address:</b> $email</p>
<p><b>Website:</b> $url</p>
<p><b>Message:</b></p>
<p>$message</p>
<hr />
<p>This message was sent through the contact form on Asclaria.</p>";

				// Swiftmailer

				$transport = Swift_SmtpTransport::newInstance('mail.asclaria.org', 25);
				$mailer = Swift_Mailer::newInstance($transport);

				$message = Swift_Message::newInstance();

				$message->setSubject("[Asclaria] $subject");
				$message->setBody($body, 'text/html');
				$message->setTo('hello@asclaria.org');
				$message->setFrom(array($email => $name));

				$numSent = $mailer->send($message);

?>
			<p>Your message has been sent successfully. Thank you so much for your time. Hopefully, you will receive a reply within the week. Have a great day!</p>
<?php

			else :

?>
			<p>Something went wrong. Maybe you’re not human?</p>
<?php

			endif;
		endif;

?>
			<p>Use this contact form to send me whatever! If you prefer direct email, you can send me your love at <a href="mailto:hello@asclaria.org">hello@asclaria.org</a>.</p>
			<p>Marked (*) fields are required.</p>
			<form action="#" method="post">
				<p><b><label>Type &lsquo;star&rsquo; backwards *</label></b></p>
				<p><input name="security" type="text" placeholder="Hint: rats" required /></p>
				<p><b><label>Name *</label></b></p>
				<p><input name="name" type="text" placeholder="Your amazing name" required /></p>
				<p><b><label>Email Address *</label></b></p>
				<p><input name="email" type="text" placeholder="Your awesome email address" required /></p>
				<p><b><label>Website</label></b></p>
				<p><input name="url" type="text" placeholder="Your spiffy website" /></p>
				<p><b><label>Subject *</label></b></p>
				<p><input name="subject" type="text" placeholder="A title to your speech" required /></p>
				<p><b><label>Message *</label></b></p>
				<p><textarea name="message" rows="5" placeholder="Tell me your secrets!" required></textarea></p>
				<p style="text-align: center;">
					<button name="contact"><span class="fa fa-send-o"></span> Send message!</button>
				</p>
			</form>
		</article> <!-- .article -->
		
	</div> <!-- .page -->

<?php include 'includes/footer.php'; ?>