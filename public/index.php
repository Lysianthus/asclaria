<?php

$title = "";
include 'includes/header.php';

?>

	<div id="welcome">
		<h1 id="welcome__site-name">Asclaria</h1>
		<p id="welcome__site-description">Lysianthus’s umbrella network</p>
	</div> <!-- #welcome -->
	<nav id="welcome__menu">
		<a id="openProjects" onclick="openProjects();" href="javascript:;">#projects</a>
		<a href="/about/">/about</a>
		<a href="/linkage/">/linkage</a>
		<a id="openContact" onclick="openContact();" href="javascript:;">#contact</a>
	</nav> <!-- #welcome__menu -->

	<nav id="projects">
		<h2>Choose a Category</h2>
		<ul>
			<li><a href="/projects/personal">Personal Projects</a></li>
			<li><a href="/projects/fan">Fan Projects</a></li>
			<li><a href="/projects/interactive">Interactive Projects</a></li>
			<li><a href="/projects/miscellaneous">Miscellaneous Projects</a></li>
		</ul>
		<p><button id="closeProjects" onclick="closeProjects();">Close</button></p>
	</nav> <!-- #projects-menu -->

	<div id="contact">
		<p>Send me your love at <a href="mailto:hello@asclaria.org">hello@asclaria.org</a>! ♥</p>
		<p>Or if you’re on a desktop, you can use the <a href="/contact/">contact form</a>.</p>
		<p><button id="closeContact" onclick="closeContact();">Close</button></p>
	</div> <!-- #contact -->

<?php include 'includes/footer.php'; ?>