function showInfo(s_info) {

	s_title = s_info[0];
	s_description = s_info[1];
	s_url = s_info[2];
	s_image = s_info[3];

	document.getElementById('showcaseContentTitle').innerHTML = s_title;
	document.getElementById('showcaseContentDescription').innerHTML = s_description;
	document.getElementById('showcaseContentUrl').setAttribute("target", "_blank");
	document.getElementById('showcaseContentUrl').setAttribute("href", s_url);
	document.getElementById('showcaseContentUrl').innerHTML = 'Visit website &rarr;';
	document.getElementById('showcaseContentImage').setAttribute("src", s_image);

}

function sAffelius() {
	var s_title = "Affelius";
	var s_description = "Affelius is a creative website owned and managed by Lysianthus. This is where she archives, publishes, and showcases her creative works, such as written articles, illustrations, attempts in color adjustment and image manipulation, personally-taken photographs, design concepts, website templates, simple to complex web programs, online experiments, and many other original creations. Simply put, Affelius is Lysianthus’s creative repository.";
	var s_url = 'https://affeli.us';
	var s_image = './assets/images/affelius.png';

	var s_info = [s_title, s_description, s_url, s_image];

	showInfo(s_info);
}

function sAsclaria() {
	var s_title = "Asclaria";
	var s_description = "Asclaria is Lysianthus’s umbrella network. All of her personal websites, cliques, fanlistings, fansites, shrines, tributes, and miscellaneous projects are under this umbrella.";
	var s_url = 'https://asclaria.org';
	var s_image = './assets/images/asclaria.png';

	var s_info = [s_title, s_description, s_url, s_image];

	showInfo(s_info);
}

function sLysianthus() {
	var s_title = "Lysianthus";
	var s_description = "Lysianthus is Lysianthus’s personal homepage. This is her “home base”. Her accounts to other websites as well as her contact information can be found here.";
	var s_url = "https://lysianth.us";
	var s_image = './assets/images/lysianthus.png';

	var s_info = [s_title, s_description, s_url, s_image];

	showInfo(s_info);
}

function sPaperCarvings() {
	var s_title = "Paper Carvings";
	var s_description = "Lysianthus is a personal blog, subtitled “Introspection and a Character Study.”";
	var s_url = "https://papercarvings.lysianth.us";
	var s_image = './assets/images/papercarvings.png';

	var s_info = [s_title, s_description, s_url, s_image];

	showInfo(s_info);
}

function sLeprd() {
	var s_title = "Leprd";
	var s_description = "Leprd is a free web hosting service.";
	var s_url = "https://leprd.space";
	var s_image = './assets/images/leprd.png';

	var s_info = [s_title, s_description, s_url, s_image];

	showInfo(s_info);
}

function sPowerCouple() {
	var s_title = "Power Couple";
	var s_description = "Power Couple is a TFL-approved fanlisting for the relationship between Clark Kent/Kal-El of Krypton (Superman) and Diana of Themyscira (Wonder Woman) of DC Comics.";
	var s_url = "https://superwonder.asclaria.org";
	var s_image = './assets/images/superwonder.png';

	var s_info = [s_title, s_description, s_url, s_image];

	showInfo(s_info);
}

function sSMWWFF() {
	var s_title = "Superman/Wonder Woman Fan Fiction Index";
	var s_description = "This is a comprehensive list of Superman &times; Wonder Woman fan fiction read and collected from all over the internet by various authors.";
	var s_url = "https://smwwfics.asclaria.org";
	var s_image = './assets/images/smwwfics.png';

	var s_info = [s_title, s_description, s_url, s_image];

	showInfo(s_info);
}

function sVeraFarmigaEbooks() {
	var s_title = "VERA FARMIGA EBOOKS";
	var s_description = 'a progress in work, and a <a target="_blank" href="https://twitter.com/VeraFarmiga">@VeraFarmiga</a> bot';
	var s_url = "https://twitter.com/VeraFarmigaBot";
	var s_image = './assets/images/verafarmigabot.png';

	var s_info = [s_title, s_description, s_url, s_image];

	showInfo(s_info);
}

function sVernaFlamingo() {
	var s_title = "Verna Flamingo";
	var s_description = 'Verna Flamingo is a splash page dedicated to Vera Farmiga. This project is also categorized under <a target="_blank" href="http://th-hq.asclaria.org">Throwaway Projects</a>.';
	var s_url = "https://vernaflamingo.isamotherfucking.ninja";
	var s_image = './assets/images/vernaflamingo.png';

	var s_info = [s_title, s_description, s_url, s_image];

	showInfo(s_info);
}

function sSmoothSailing() {
	var s_title = "Smooth Sailing Listings";
	var s_description = "Smooth Sailing Listings is a web directory or listing for websites of any kind. It is an automated and safe way to list your website!";
	var s_url = "https://smoothsailing.asclaria.org";
	var s_image = './assets/images/smoothsailing.png';

	var s_info = [s_title, s_description, s_url, s_image];

	showInfo(s_info);
}

function sInnerBuoyancy() {
	var s_title = "Inner Buoyancy";
	var s_description = "Inner Buoyancy is a positivity bot that tweets reminders a couple of times a day.";
	var s_url = "https://twitter.com/InnerBuoyancy";
	var s_image = './assets/images/innerbuoyancy.png';

	var s_info = [s_title, s_description, s_url, s_image];

	showInfo(s_info);
}

function sTests() {
	var s_title = "Tests";
	var s_description = "Tests is a subdomain for quizzes and tests for personal or external uses.";
	var s_url = "https://tests.asclaria.org";
	var s_image = './assets/images/tests.png';

	var s_info = [s_title, s_description, s_url, s_image];

	showInfo(s_info);
}

function sChocobear() {
	var s_title = "Chocobear";
	var s_description = "Chocobear is a temporary file hosting service.";
	var s_url = "https://chocobear.site";
	var s_image = './assets/images/chocobear.png';

	var s_info = [s_title, s_description, s_url, s_image];

	showInfo(s_info);
}

function sArchives() {
	var s_title = "Archives";
	var s_description = "Archives is the place for all things past.";
	var s_url = "https://archives.asclaria.org";
	var s_image = './assets/images/archives.png';

	var s_info = [s_title, s_description, s_url, s_image];

	showInfo(s_info);
}

function sVVVVVV() {
	var s_title = "VVVVVV";
	var s_description = "VVVVVV is a place of nonsense. Sometimes, Lysianthus puts temporary projects here. Most often, this is where she just messes around.";
	var s_url = "https://vvvvvv.asclaria.org";
	var s_image = './assets/images/vvvvvv.png';

	var s_info = [s_title, s_description, s_url, s_image];

	showInfo(s_info);
}

function sTHHQ() {
	var s_title = "Throwaway Headquarters";
	var s_description = "Throwaway Headquarters is the headquarters for all of Lysianthus’s throwaway websites.";
	var s_url = "https://th-hq.asclaria.org";
	var s_image = './assets/images/th-hq.png';

	var s_info = [s_title, s_description, s_url, s_image];

	showInfo(s_info);
}