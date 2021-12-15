<?php

require '/home/asclaria/libraries/phpmailer/6.5.3/src/Exception.php';
require '/home/asclaria/libraries/phpmailer/6.5.3/src/PHPMailer.php';
require '/home/asclaria/libraries/phpmailer/6.5.3/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$alert = NULL;

if (isset($_POST['contact'])) {
	$security = $_POST['security'];

	if ($security == 'rats') {
		$name = filter_var(stripslashes($_POST['name']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		$url = filter_var($_POST['url'], FILTER_SANITIZE_URL);
		$subject = filter_var(stripslashes($_POST['subject']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$message = nl2br(filter_var(stripslashes($_POST['message']), FILTER_SANITIZE_FULL_SPECIAL_CHARS));

		$body = "<p><b>Name:</b> $name</p><p><b>Email Address:</b> $email</p><p><b>Website:</b> $url</p><p><b>Message:</b></p><p>$message</p><hr /><p>This message was sent through the contact form on Asclaria.</p>";

		// PHPMailer

		$mail = new PHPMailer(TRUE);

		try {
			$mail->isSMTP();
			$mail->Host = 'mail.asclaria.org';
			$mail->Port = 25;

			$mail->setFrom('noreply@asclaria.org', 'Asclaria');
			$mail->addAddress('hello@asclaria.org');

			$mail->isHTML(TRUE);
			$mail->Subject = "[Asclaria] $subject";
			$mail->Body = $body;

			$mail->send();

			$alert = "<p>Your message has been sent successfully. Thank you so much for your time. Hopefully, you will receive a reply within the week. Have a great day!</p>";

		} catch (Exception $e) {
			$alert = "<p>The message could not be sent. Mailer Error: {$mail->ErrorInfo}</p>";
		}
	} else {
		$alert = "<p>Something went wrong. Maybe you’re not human?</p>";
	}
}

$title = "Contact | ";
include 'includes/header.php';

?>

	<div class="page" id="page">
		
<?php include 'includes/page__menu.php'; ?>
		
		<h1 class="page__heading">Contact</h1>
		<article class="article">
			
			<?php echo $alert; ?>

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