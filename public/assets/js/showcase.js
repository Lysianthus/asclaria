/* data */

var categories = [
	'personal',
	'fan',
	'interactive',
	'miscellaneous'
];

var websites = [
	{
		"id": 1,
		"title": "Affelius",
		"url": "https://affeli.us",
		"description": "Affelius is my creative repository. This is where I archive, publish, and showcase my creative works, such as written articles, illustrations, attempts in color adjustment and image manipulation, personally-taken photographs, design concepts, website templates, simple to complex web programs, online experiments, and many other original creations.",
		"image": "/assets/images/affelius.png",
		"category": "1"
	},
	{
		"id": 2,
		"title": "Asclaria",
		"url": "https://asclaria.org",
		"description": "Asclaria is my umbrella network. All of my personal websites, cliques, fanlistings, fansites, shrines, tributes, and miscellaneous projects are under this umbrella.",
		"image": "/assets/images/asclaria.png?v=5",
		"category": "1"
	},
	{
		"id": 3,
		"title": "Lysianthus",
		"url": "https://lysianth.us",
		"description": "Lysianthus is my personal homepage. This is my “home base”. My accounts to other websites as well as my contact information can be found here.",
		"image": "/assets/images/lysianthus.png",
		"category": "1"
	},
	{
		"id": 4,
		"title": "Paper Carvings",
		"url": "https://papercarvings.lysianth.us",
		"description": "Lysianthus is a personal blog, subtitled “Introspection and a Character Study.”",
		"image": "/assets/images/papercarvings.png",
		"category": "1"
	},
	{
		"id": 5,
		"title": "Leprd",
		"url": "https://leprd.space",
		"description": "Leprd is a free web hosting service.",
		"image": "/assets/images/leprd.png?v=0",
		"category": "1"
	},
	{
		"id": 6,
		"title": "Power Couple",
		"url": "https://superwonder.asclaria.org",
		"description": "Power Couple is a TFL-approved fanlisting for the relationship between Clark Kent/Kal-El of Krypton (Superman) and Diana of Themyscira (Wonder Woman) of DC Comics.",
		"image": "/assets/images/superwonder.png",
		"category": "2"
	},
	{
		"id": 7,
		"title": "Superman/Wonder Woman Fan Fiction Index",
		"url": "https://smwwfics.asclaria.org",
		"description": "This is a comprehensive list of Superman &times; Wonder Woman fan fiction read and collected from all over the internet by various authors.",
		"image": "/assets/images/smwwfics.png",
		"category": "2"
	},
	{
		"id": 8,
		"title": "VERA FARMIGA EBOOKS",
		"url": "https://twitter.com/VeraFarmigaBot",
		"description": 'a progress in work, and a <a target="_blank" href="https://twitter.com/VeraFarmiga">@VeraFarmiga</a> bot',
		"image": "/assets/images/verafarmigabot.png",
		"category": "2"
	},
	{
		"id": 9,
		"title": "Verna Flamingo",
		"url": "https://vernaflamingo.isamotherfucking.ninja",
		"description": 'Verna Flamingo is a splash page dedicated to Vera Farmiga. This project is also categorized under <a target="_blank" href="http://th-hq.asclaria.org">Throwaway Projects</a>.',
		"image": "/assets/images/vernaflamingo.png",
		"category": "2"
	},
	{
		"id": 10,
		"title": "Smooth Sailing Listings",
		"url": "https://smoothsailing.asclaria.org",
		"description": "Smooth Sailing Listings is a web directory or listing for websites of any kind. It is an automated and safe way to list your website!",
		"image": "/assets/images/smoothsailing.png",
		"category": "3"
	},
	{
		"id": 11,
		"title": "Inner Buoyancy",
		"url": "https://twitter.com/InnerBuoyancy",
		"description": "Inner Buoyancy is a positivity bot that tweets reminders a couple of times a day.",
		"image": "/assets/images/innerbuoyancy.png",
		"category": "3"
	},
	{
		"id": 12,
		"title": "Tests",
		"url": "https://tests.asclaria.org",
		"description": "Tests is a subdomain for quizzes and tests for personal or external uses.",
		"image": "/assets/images/tests.png",
		"category": "3"
	},
	{
		"id": 13,
		"title": "Archives",
		"url": "https://archives.asclaria.org",
		"description": "Archives is the place for all things past. It serves as my personal mirror for some favorite things that no longer exist on the internet.",
		"image": "/assets/images/archives.png",
		"category": "4"
	},
	{
		"id": 14,
		"title": "VVVVVV",
		"url": "https://vvvvvv.asclaria.org",
		"description": "VVVVVV is a place of nonsense. Sometimes, I put temporary projects here. Most often, this is where I just mess around.",
		"image": "/assets/images/vvvvvv.png",
		"category": "4"
	},
	{
		"id": 15,
		"title": "Throwaway Headquarters",
		"url": "https://th-hq.asclaria.org",
		"description": "Throwaway Headquarters is the headquarters for all of my throwaway websites.",
		"image": "/assets/images/th-hq.png",
		"category": "4"
	}
];


/* functions */

function showInfo(w_id) {

	w_id -= 1;

	document.getElementById('showcaseContentTitle').innerHTML = websites[w_id].title;
	document.getElementById('showcaseContentDescription').innerHTML = websites[w_id].description;
	document.getElementById('showcaseContentUrl').setAttribute("target", "_blank");
	document.getElementById('showcaseContentUrl').setAttribute("href", websites[w_id].url);
	document.getElementById('showcaseContentUrl').innerHTML = 'Visit website &rarr;';
	document.getElementById('showcaseContentImage').setAttribute("src", websites[w_id].image);

}