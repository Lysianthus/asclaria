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
				<showcase-item
					v-for="i in websites"
					v-if="i.category == 1"
					v-bind:item="i"
					v-bind:key="i.id"
					v-on:click.native="showInfo(i.id)"
				>
				</showcase-item>
			</nav> <!-- .showcase__header__menu -->
			
			<?php elseif ($category == 'fan') : ?>

			<nav class="showcase__header__menu">
				<h2 class="showcase__header__menu__heading">&mdash; Fan Projects &mdash;</h2>
				<showcase-item
					v-for="i in websites"
					v-if="i.category == 2"
					v-bind:item="i"
					v-bind:key="i.id"
					v-on:click.native="showInfo(i.id)"
				>
				</showcase-item>
			</nav> <!-- .showcase__header__menu -->

			<nav class="showcase__header__menu">
				<h2 class="showcase__header__menu__heading">&mdash; Coming Soon &mdash;</h2>
				<a class="showcase__item" href="javascript:;">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/balalaika.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Balalaika</p>
						<p class="showcase__item__url">balalaika.asclaria.org</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
				<a class="showcase__item" href="javascript:;">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/bayonetta.png" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Bayonetta</p>
						<p class="showcase__item__url">bayonetta.asclaria.org</p>
					</div> <!-- .showcase__item__info -->
				</a> <!-- .showcase__item -->
				<a class="showcase__item" href="javascript:;">
					<img class="showcase__item__thumbnail" alt="" src="/assets/images/cornelia.png?v=2" />
					<div class="showcase__item__info">
						<p class="showcase__item__title">Cornelia li Britannia</p>
						<p class="showcase__item__url">cornelia.asclaria.org</p>
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
				<showcase-item
					v-for="i in websites"
					v-if="i.category == 3"
					v-bind:item="i"
					v-bind:key="i.id"
					v-on:click.native="showInfo(i.id)"
				>
				</showcase-item>
			</nav> <!-- .showcase__header__menu -->
			
			<?php elseif ($category == 'miscellaneous') : ?>

			<nav class="showcase__header__menu">
				<h2 class="showcase__header__menu__heading">&mdash; Miscellaneous Projects &mdash;</h2>
				<showcase-item
					v-for="i in websites"
					v-if="i.category == 4"
					v-bind:item="i"
					v-bind:key="i.id"
					v-on:click.native="showInfo(i.id)"
				>
				</showcase-item>
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

	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.min.js"></script>
	<script src="/assets/js/showcase-vue.js?v=1.5.4"></script>

<?php include 'includes/footer.php'; ?>