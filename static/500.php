<?php
	$title = "500 Internal Server Error | ";
	include 'includes/header.php';
?>

	<div id="content">
		<h1 class="heading">500 Internal Server Error</h1>
		<article class="article">
			<h2><span>Sorry!</span></h2>
			<p>This is a <b>500 error</b>. <u>An internal server error occurred while processing your request.</u> This may be because of the following reasons:</p>
			<ul>
				<li>There was an error in the <code>.htaccess</code> file in the server.</li>
				<li>A server misconfiguration happened.</li>
				<li>The requested URL ends with a slash when it should not.</li>
				<li>Two files of the same file name are in the directory.</li>						
			</ul>
			<p>If you strongly believe that you should not be seeing this error page, please contact Lysianthus so this problem can be addressed.</p>
			<h2><span>What to do now?</span></h2>
			<p>You can choose from the following options to continue surfing the site:</p>
			<ul>
				<li><strong>Report this problem to Lysianthus via <a href="http://asclaria.org/contact">contact</a>.</strong> This error is critical.</li>
				<li><a href="javascript:history.go(-1)">Go back</a> to the previously accessed page. (You can also press <code>BACKSPACE</code> on your keyboard.)</li>						
			</ul>
			<p>If you have come upon this error <u>more than once</u>, it is <em>strongly</em> recommended that you report this problem to Lysianthus as soon as possible. This is a critical error that if not solved, it might affect not only this page, but all of the pages in the directory or server.</p>
		</article> <!-- .article -->
	</div> <!-- #content -->

<?php include 'includes/footer.php'; ?>