<?php

$subpage = $_GET['subpage'];

switch ($subpage) {
	case 'lysianthus':
		$title = 'About &rsaquo; Lysianthus | ';
		break;

	case 'credits':
		$title = 'About &rsaquo; Credits | ';
		break;
	
	default:
		$title = 'About | ';
		break;
}

include 'includes/header.php';

?>

	<div class="page" id="page">
		
<?php include 'includes/page__menu.php'; ?>

		<?php if ($subpage == 'lysianthus') : ?>

		<h1 class="page__heading">Lysianthus</h1>
		<article class="article">
			<h2>Not A Wonder Woman</h2>
			<p>Hi! I go by Lysianthus. I’m presently (5 &times; 4) years old. I was born and still live in the Pearl of the Orient Seas. I am a materials engineering student in the morning, a fake psychologist in the afternoon, and a hobbyist web designer-developer in the evening. I am a closet fangirl and an unapologetic shipper.</p>
			<p>And to continue this about me page, here are five interesting facts about me:</p>
			<ul>
				<li>I’m near-sighted.</li>
				<li>I’m into personality typology! In the MBTI, I have the functions Ni-Se and Ti-Fe, I just don’t know in what order. In the Enneagram, I’m a 9w1 with the tritype 954 and instinctual variants self-preservation-social (sp/so). I’m somewhere between phlegmatic and melancholic.</li>
				<li>I am probably shorter than you!</li>
				<li>My favorite fruit is the rambutan.</li>
				<li>My wildest yet impossible dream is to become a person with multiple identities!</li>
			</ul>
			<h2>Parting Words</h2>
			<p>If you want to talk, you can easily do that by hopping on the <a href="/contact">contact form</a>. If you want more of me, see the links below!</p>
			<ul>
				<li><a target="_blank" href="https://lysianth.us">Personal Homepage</a></li>
				<li><a target="_blank" href="https://twitter.com/lysnths">Twitter</a></li>
				<li><a target="_blank" href="http://whereisthenuance.tumblr.com">Tumblr</a></li>
				<li><a target="_blank" href="https://www.goodreads.com/lysianthus">Goodreads</a></li>
				<li><a target="_blank" href="https://letterboxd.com/Lysianthus/">Letterboxd</a></li>
				<li><a target="_blank" href="http://archiveofourown.org/users/aretaic">Archive of Our Own</a></li>
				<li><a target="_blank" href="https://www.fanfiction.net/u/2155870/">FanFiction.Net</a></li>
				<li><a target="_blank" href="https://github.com/Lysianthus">Github</a></li>
				<li><a target="_blank" href="https://keybase.io/lysianthus">Keybase</a></li>
			</ul>
		</article> <!-- .article -->

		<?php elseif ($subpage == 'credits') : ?>
		
		<h1 class="page__heading">Credits</h1>
		<article class="article">
			<p>Special thanks to these sources whose works I have used in making this website:</p>
			<ul>
				<li><b><a target="_blank" href="https://keary23.deviantart.com/art/Render-14-Girl-519711064">keary23</a></b> for the render</li>
			</ul>
			<p>Many thanks!</p>
		</article> <!-- .article -->

		<?php else: ?>

		<h1 class="page__heading">About</h1>
		<article class="article">
			<h2>Hello!</h2>
			<p>Welcome to <i>Asclaria</i>, my (<a href="/about/lysianthus">Lysianthus</a>’s) umbrella network. All of my personal websites, cliques, fanlistings, fansites, shrines, tributes, and miscellaneous projects are under this umbrella.</p>
			<h2>Umbrella? What?</h2>
			<p>I decided to call Asclaria an &ldquo;umbrella&rdquo; network, because it does exactly what an umbrella does. It is a thing that &ldquo;includes or contains many different elements or parts&rdquo;. In this context, the elements referred to are my various online projects.</p>
			<h2>What’s in a name?</h2>
			<p>The network name &ldquo;<i>asclaria</i>&rdquo; came from nothing; it is a random combination of my favorite letters, sounds, and syllables from the English alphabet.</p>
			<p>Asclaria didn’t start as asclaria, however. It had undergone many name revamps. This umbrella network was once called <i>Lyffae</i>, <i>Lyqei</i>, <i>Ephevatic</i>, <i>Lascuvia</i>, <i>Clyre</i>, <i>Clyris</i>, and <i>Clyrant</i>. It was the unending search for the original name that both looks and sounds good. <i>Asclaria</i> was chosen for its first launch.</p>
			<h2>Domains</h2>
			<p>This network runs on a few domains. They are:</p>
			<ul>
				<li>affeli.us</li>
				<li>asclaria.org</li>
				<li>lysianth.us</li>
				<li>leprd.space</li>
				<li>meowandsparkle.party</li>
				<li>bouvardia.blue</li>
				<li>chocobear.site</li>
				<li>sparklet.space</li>
			</ul>
			<p>Each domain is a sub-umbrella.</p>
			<h2>Content Breakdown</h2>
			<p>Ideally, Asclaria is...</p>
			<ul>
				<li>25% personal &mdash; websites directly related to me</li>
				<li>25% fangirling &mdash; fanlistings, fansites, shrines, and tributes</li>
				<li>25% interactive &mdash; cliques and communities</li>
				<li>25% nonsense &mdash; miscellaneous</li>
			</ul>
			<p>Browse the network to be enlightened.</p>
			<h2>Credits</h2>
			<p>Special thanks to these sources whose works I have used in making this website:</p>
			<ul>
				<li><b><a target="_blank" href="https://keary23.deviantart.com/art/Render-14-Girl-519711064">keary23</a></b> for the render</li>
			</ul>
		</article> <!-- .article -->

		<?php endif; ?>

	</div> <!-- .page -->

<?php include 'includes/footer.php'; ?>