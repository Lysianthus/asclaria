<?php

$category = $_GET['category'];

if (empty($category)) {
	http_response_code(404);
	exit;
}

switch ($category) {
	case 'personal':
		$title = 'Personal Projects | ';
		break;

	case 'fan':
		$title = 'Fan Projects | ';
		break;

	case 'interactive':
		$title = 'Interactive Projects | ';
		break;

	case 'miscellaneous':
		$title = 'Miscellaneous Projects | ';
		break;
	
	default:
		$title = 'Projects | ';
		break;
}

include 'includes/header.php';

?>

	<div class="showcase" id="showcase">
		<button id="toggleHeader" onclick="toggleHeader();">Menu</button>
		<header class="showcase__header" id="showcase__header">
			<div class="showcase__header__banner">
				<h1 class="showcase__header__site-name"><a href="/">Asclaria</a></h1>
				<p class="showcase__header__site-description">Lysianthus's umbrella network</p>
			</div> <!-- .showcase__header__banner -->

			<?php if ($category == 'personal') : ?>

			<nav class="showcase__header__menu">
				<h2 class="showcase__header__menu__heading">&mdash; Personal Projects &mdash;</h2>
				<a class="showcase__item" href="javascript:;" onclick="showInfo(1);">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/square_face.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Affelius</p>
						<p class="showcase__item__url">affeli.us</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
				<a class="showcase__item" href="javascript:;" onclick="showInfo(2);">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/square_hands.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Asclaria</p>
						<p class="showcase__item__url">asclaria.org</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
				<a class="showcase__item" href="javascript:;" onclick="showInfo(3);">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/square_face.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Lysianthus</p>
						<p class="showcase__item__url">lysianth.us</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
				<a class="showcase__item" href="javascript:;" onclick="showInfo(4);">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/square_hands.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Paper Carvings</p>
						<p class="showcase__item__url">papercarvings.lysianth.us</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
				<a class="showcase__item" href="javascript:;" onclick="showInfo(5);">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/square_face.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Leprd</p>
						<p class="showcase__item__url">leprd.space</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
			</nav> <!-- .showcase__header__menu -->
			
			<?php elseif ($category == 'fan') : ?>

			<nav class="showcase__header__menu">
				<h2 class="showcase__header__menu__heading">&mdash; Fan Projects &mdash;</h2>
				<a class="showcase__item" href="javascript:;" onclick="showInfo(6);">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/superwonder_thumb.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Power Couple</p>
						<p class="showcase__item__url">superwonder.asclaria.org</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
				<a class="showcase__item" href="javascript:;" onclick="showInfo(7);">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/smwwfics_thumb.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Superman/Wonder Woman Fan Fiction Index</p>
						<p class="showcase__item__url">smwwfics.asclaria.org</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
				<a class="showcase__item" href="javascript:;" onclick="showInfo(8);">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/motelhoscow_thumb.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Balalaika GIF Bot</p>
						<p class="showcase__item__url">twitter.com/motelhoscow</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
				<a class="showcase__item" href="javascript:;" onclick="showInfo(9);">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/verafarmigabot_thumb.png?v=2" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">VERA FARMIGA EBOOKS</p>
						<p class="showcase__item__url">twitter.com/verafarmigabot</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
				<a class="showcase__item" href="javascript:;" onclick="showInfo(10);">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/vernaflamingo_thumb.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Verna Flamingo</p>
						<p class="showcase__item__url">vernaflamingo.isamotherfucking.ninja</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
			</nav> <!-- .showcase__header__menu -->

			<nav class="showcase__header__menu">
				<h2 class="showcase__header__menu__heading">&mdash; Coming Soon &mdash;</h2>
				<a class="showcase__item" href="javascript:;">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/cornelia.png?v=2" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Cornelia li Britannia</p>
						<p class="showcase__item__url">cornelia.asclaria.org</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
				<a class="showcase__item" href="javascript:;">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/balalaika.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Balalaika</p>
						<p class="showcase__item__url">balalaika.asclaria.org</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
				<a class="showcase__item" href="javascript:;">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/norma.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Norma Louise Bates</p>
						<p class="showcase__item__url">norma.asclaria.org</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
			</nav> <!-- .showcase__header__menu -->
			
			<?php elseif ($category == 'interactive') : ?>

			<nav class="showcase__header__menu">
				<h2 class="showcase__header__menu__heading">&mdash; Interactive Projects &mdash;</h2>
				<a class="showcase__item" href="javascript:;" onclick="showInfo(11);">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/square_face.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Smooth Sailing Listings</p>
						<p class="showcase__item__url">smoothsailing.asclaria.org</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
				<a class="showcase__item" href="javascript:;" onclick="showInfo(12);">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/square_hands.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Inner Buoyancy</p>
						<p class="showcase__item__url">twitter.com/InnerBuoyancy</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
				<a class="showcase__item" href="javascript:;" onclick="showInfo(13);">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/square_face.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Cat FTP</p>
						<p class="showcase__item__url">cat.ftp.sh</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
				<a class="showcase__item" href="javascript:;" onclick="showInfo(14);">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/square_hands.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Tests</p>
						<p class="showcase__item__url">tests.asclaria.org</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
			</nav> <!-- .showcase__header__menu -->
			
			<?php elseif ($category == 'miscellaneous') : ?>

			<nav class="showcase__header__menu">
				<h2 class="showcase__header__menu__heading">&mdash; Miscellaneous Projects &mdash;</h2>
				<a class="showcase__item" href="javascript:;" onclick="showInfo(15);">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/square_face.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Archives</p>
						<p class="showcase__item__url">archives.asclaria.org</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
				<a class="showcase__item" href="javascript:;" onclick="showInfo(16);">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/square_hands.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">VVVVVV</p>
						<p class="showcase__item__url">vvvvvv.asclaria.org</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
				<a class="showcase__item" href="javascript:;" onclick="showInfo(17);">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/square_face.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Throwaway Headquarters</p>
						<p class="showcase__item__url">th-hq.asclaria.org</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
			</nav> <!-- .showcase__header__menu -->
			
			<?php endif; ?>

		</header> <!-- .showcase__header -->

		<main class="showcase__content">
			<h1 class="showcase__heading" id="showcaseContentTitle">Projects</h1>
			<figure class="showcase__preview">
				<img class="" alt="" src="/assets/images/asclaria.png?v=5" id="showcaseContentImage" />
			</figure> <!-- .showcase__preview -->
			<p id="showcaseContentDescription">Choose a project on the left for an overview.</p>
			<p><a class="button alt" href="#" id="showcaseContentUrl">Pick First!</a></p>
		</main> <!-- .showcase__content -->
	</div> <!-- .showcase -->

	<script src="/assets/js/showcase.js?v=5.2.3"></script>

<?php include 'includes/footer.php'; ?>