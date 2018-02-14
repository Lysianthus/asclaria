function openProjects() {
	document.getElementById('projects').style.display = "block";
	document.getElementById('projects').classList.add('fadeIn');
	document.getElementById('welcome__site-name').classList.add('fadeOut');
	document.getElementById('welcome__site-description').classList.add('fadeOut');
	setTimeout(function(){
		document.getElementById('projects').classList.remove('fadeIn');
	}, 1000);
}

function closeProjects() {
	document.getElementById('projects').classList.add('fadeOut');
	document.getElementById('welcome__site-name').classList.remove('fadeOut');
	document.getElementById('welcome__site-description').classList.remove('fadeOut');
	document.getElementById('welcome__site-name').classList.add('fadeIn');
	document.getElementById('welcome__site-description').classList.add('fadeIn');
	setTimeout(function(){
		document.getElementById('projects').classList.remove('fadeOut');
		document.getElementById('welcome__site-name').classList.remove('fadeIn');
		document.getElementById('welcome__site-description').classList.remove('fadeIn');
		document.getElementById('projects').style.display = "none";
	}, 1000);
}

function toggleHeader() {
	document.getElementById('showcase').classList.toggle('mobile__show-header');
}

function togglePageMenu() {
	document.getElementById('page').classList.toggle('mobile__show-page-menu');
}