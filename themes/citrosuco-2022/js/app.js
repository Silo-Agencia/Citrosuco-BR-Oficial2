
function fonte(e){
	var elemento = $(".acessibilidade");
	var fonte = elemento.css('font-size');
	if (e == 'a') {
		elemento.css("fontSize", parseInt(fonte) + 1);
	} else if('d'){
		elemento.css("fontSize", parseInt(fonte) - 1);
	}
}

function timeline63a84() {
	document.getElementById('btn-timeline-63-84').classList.add('active-timeline')
	document.getElementById('title-timeline-63-84').classList.add('active-timeline')
	document.getElementById('timeline-63-84').classList.add('active-timeline')


	if(document.getElementById('btn-timeline-63-84').classList.contains('active-timeline')) {

		document.getElementById('btn-timeline-89-12').classList.remove('active-timeline')
		document.getElementById('title-timeline-89-12').classList.remove('active-timeline')
		document.getElementById('timeline-89-12').classList.remove('active-timeline')

		document.getElementById('btn-timeline-12').classList.remove('active-timeline')
		document.getElementById('title-timeline-12').classList.remove('active-timeline')
		document.getElementById('timeline-12').classList.remove('active-timeline')
	}

}


function timeline89a12() {
	document.getElementById('btn-timeline-89-12').classList.add('active-timeline')
	document.getElementById('title-timeline-89-12').classList.add('active-timeline')
	document.getElementById('timeline-89-12').classList.add('active-timeline')


	if(document.getElementById('btn-timeline-89-12').classList.contains('active-timeline')) {

		document.getElementById('btn-timeline-63-84').classList.remove('active-timeline')
		document.getElementById('title-timeline-63-84').classList.remove('active-timeline')
		document.getElementById('timeline-63-84').classList.remove('active-timeline')

		document.getElementById('btn-timeline-12').classList.remove('active-timeline')
		document.getElementById('title-timeline-12').classList.remove('active-timeline')
		document.getElementById('timeline-12').classList.remove('active-timeline')
	}

}

function timeline12() {
		document.getElementById('btn-timeline-12').classList.add('active-timeline')
		document.getElementById('title-timeline-12').classList.add('active-timeline')
		document.getElementById('timeline-12').classList.add('active-timeline')


	if(document.getElementById('btn-timeline-12').classList.contains('active-timeline')) {

		document.getElementById('btn-timeline-63-84').classList.remove('active-timeline')
		document.getElementById('title-timeline-63-84').classList.remove('active-timeline')
		document.getElementById('timeline-63-84').classList.remove('active-timeline')

		document.getElementById('btn-timeline-89-12').classList.remove('active-timeline')
		document.getElementById('title-timeline-89-12').classList.remove('active-timeline')
		document.getElementById('timeline-89-12').classList.remove('active-timeline')
	}

}