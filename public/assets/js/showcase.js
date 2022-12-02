/* data */

var categories = [
	{ "id": 1, "name": "personal" },
	{ "id": 2, "name": "fan" },
	{ "id": 3, "name": "interactive" },
	{ "id": 4, "name": "miscellaneous" }
];

var websites = [
	{
		"id": 1,
		"title": "Affelius",
		"url": "https://affeli.us",
		"description": "Affelius is my creative repository. This is where I archive, publish, and showcase my creative works, such as written articles, illustrations, attempts in color adjustment and image manipulation, personally-taken photographs, design concepts, website templates, simple to complex web programs, online experiments, and many other original creations.",
		"image": "/assets/images/affelius.png",
		"thumbnail": "/assets/images/square_face.png",
		"category": 1
	},
	{
		"id": 2,
		"title": "Asclaria",
		"url": "https://asclaria.org",
		"description": "Asclaria is my umbrella network. All of my personal websites, cliques, fanlistings, fansites, shrines, tributes, and miscellaneous projects are under this umbrella.",
		"image": "/assets/images/asclaria.png?v=5",
		"thumbnail": "/assets/images/square_hands.png",
		"category": 1
	},
	{
		"id": 3,
		"title": "Lysianthus",
		"url": "https://lysianth.us",
		"description": "Lysianthus is my personal homepage. This is my “home base.” My accounts on other websites as well as my contact information can be found here.",
		"image": "/assets/images/lysianthus.png?v=2",
		"thumbnail": "/assets/images/square_face.png",
		"category": 1
	},
	{
		"id": 4,
		"title": "Paper Carvings",
		"url": "https://papercarvings.lysianth.us",
		"description": "Lysianthus is a personal blog, subtitled “Introspection and a Character Study.”",
		"image": "/assets/images/papercarvings.png",
		"thumbnail": "/assets/images/square_hands.png",
		"category": 1
	},
	{
		"id": 5,
		"title": "Leprd",
		"url": "https://leprd.space",
		"description": "Leprd is a free web hosting service geared towards website hobbyists.",
		"image": "/assets/images/leprd.png?v=0",
		"thumbnail": "/assets/images/square_face.png",
		"category": 1
	},
	{
		"id": 6,
		"title": "Bouvardia",
		"url": "https://bouvardia.blue",
		"description": "Bouvardia is my personal storage box.",
		"image": "/assets/images/bouvardia.png?v=4",
		"thumbnail": "/assets/images/square_hands.png",
		"category": 1
	},
	{
		"id": 7,
		"title": "Power Couple",
		"url": "https://superwonder.asclaria.org",
		"description": "Power Couple is a TFL-approved fanlisting for the relationship between Clark Kent/Kal-El of Krypton (Superman) and Diana of Themyscira (Wonder Woman) of DC Comics.",
		"image": "/assets/images/superwonder.png",
		"thumbnail": "/assets/images/superwonder_thumb.png",
		"category": 2
	},
	{
		"id": 8,
		"title": "Superman/Wonder Woman Fan Fiction Index",
		"url": "https://smwwfics.asclaria.org",
		"description": "This is a comprehensive list of Superman &times; Wonder Woman fan fiction read and collected from all over the internet by various authors.",
		"image": "/assets/images/smwwfics.png?v=1",
		"thumbnail": "/assets/images/smwwfics_thumb.png",
		"category": 2
	},
	{
		"id": 9,
		"title": "Balalaika GIF Bot",
		"url": "https://twitter.com/motelhoscow",
		"description": "a Twitter bot that tweets at least one animated GIF of Balalaika from Black Lagoon per day",
		"image": "/assets/images/motelhoscow.png",
		"thumbnail": "/assets/images/motelhoscow_thumb.png",
		"category": 2
	},
	{
		"id": 10,
		"title": "VERA FARMIGA EBOOKS",
		"url": "https://twitter.com/VeraFarmigaBot",
		"description": 'a progress in work, and a <a target="_blank" href="https://twitter.com/VeraFarmiga">@VeraFarmiga</a> bot, with words scrambled from her tweets',
		"image": "/assets/images/verafarmigabot.png",
		"thumbnail": "/assets/images/verafarmigabot_thumb.png",
		"category": 2
	},
	{
		"id": 11,
		"title": "Verna Flamingo",
		"url": "https://vernaflamingo.asclaria.org",
		"description": "Verna Flamingo is a splash page dedicated to Vera Farmiga.",
		"image": "/assets/images/vernaflamingo.png",
		"thumbnail": "/assets/images/vernaflamingo_thumb.png",
		"category": 2
	},
	{
		"id": 12,
		"title": "Smooth Sailing Listings",
		"url": "https://smoothsailing.asclaria.org",
		"description": "Smooth Sailing Listings is a web directory or listing for websites of any kind. It is an automated and safe way to list your website!",
		"image": "/assets/images/smoothsailing.png",
		"thumbnail": "/assets/images/square_face.png",
		"category": 3
	},
	{
		"id": 13,
		"title": "Manila",
		"url": "https://up.haliya.net",
		"description": "Manila lets you store files temporarily for 24 hours.",
		"image": "/assets/images/manila.png",
		"thumbnail": "/assets/images/square_face.png",
		"category": 3
	},
	{
		"id": 14,
		"title": "Paste",
		"url": "https://paste.haliya.net",
		"description": "Paste is an encrypted pastebin.",
		"image": "/assets/images/paste.png",
		"thumbnail": "/assets/images/square_hands.png",
		"category": 3
	},
	{
		"id": 15,
		"title": "Tests",
		"url": "https://tests.asclaria.org",
		"description": "Tests is a subdomain for quizzes and tests for personal or external uses.",
		"image": "/assets/images/tests.png",
		"thumbnail": "/assets/images/square_face.png",
		"category": 3
	},
	{
		"id": 16,
		"title": "Archives",
		"url": "https://archives.asclaria.org",
		"description": "Archives is the place for all things past. It serves as my personal mirror for some favorite things that no longer exist on the internet.",
		"image": "/assets/images/archives.png",
		"thumbnail": "/assets/images/square_face.png",
		"category": 4
	},
	{
		"id": 17,
		"title": "VVVVVV",
		"url": "https://vvvvvv.asclaria.org",
		"description": "VVVVVV is a place of nonsense. Sometimes, I put temporary projects here. Most often, this is where I just mess around.",
		"image": "/assets/images/vvvvvv.png",
		"thumbnail": "/assets/images/square_hands.png",
		"category": 4
	},
	{
		"id": 18,
		"title": "Throwaway Headquarters",
		"url": "https://th-hq.asclaria.org",
		"description": "Throwaway Headquarters is the headquarters for all of my throwaway websites.",
		"image": "/assets/images/th-hq.png",
		"thumbnail": "/assets/images/square_face.png",
		"category": 4
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