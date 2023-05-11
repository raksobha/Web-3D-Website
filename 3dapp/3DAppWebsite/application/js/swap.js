// JavaScript Document
var counter = 0;
$(document).ready(function() {
	
	selectContent();
});

function selectContent() {

	document.getElementById('gallery').style.display = 'block';
	document.getElementById('advert').style.display = 'none';
	document.getElementById('colacoka').style.display = 'none';
	document.getElementById('gallery_btn').classList.add("active");
	document.getElementById('advert_btn').classList.remove('active');
	document.getElementById('colacoka_btn').classList.remove('active');

	$('#gallery_btn').click(function(){
		//Make whatever is active inactive
		if(document.querySelector('#ajax_content a.active') !== null) {
			document.querySelector('#ajax_content a.active').classList.remove('active');
		}
		document.getElementById('gallery_btn').classList.add("active");
	
		$('#gallery').css('display','block');
		$('#advert').css('display','none');
		$('#colacoka').css('display','none');
	});

	$('#advert_btn').click(function(){
		if(document.querySelector('#ajax_content a.active') !== null) {
			document.querySelector('#ajax_content a.active').classList.remove('active');
		}
		document.getElementById('advert_btn').classList.add("active");

		$('#gallery').css('display','none');
		$('#advert').css('display','block');
		$('#colacoka').css('display','none');
	});

	$('#colacoka_btn').click(function(){
		if(document.querySelector('#ajax_content a.active') !== null) {
			document.querySelector('#ajax_content a.active').classList.remove('active');
		}
		document.getElementById('colacoka_btn').classList.add("active");

		$('#gallery').css('display','none');
		$('#advert').css('display','none');
		$('#colacoka').css('display','block');
	});
}

function changeLook() {
	
    document.getElementById('bodyColor').style.backgroundColor = '#000000';
	document.getElementById('headerColor').style.backgroundColor = '#301414';
	document.getElementById('footerColor').style.backgroundColor = '#122426';
}

function changeBack() {
	document.getElementById('bodyColor').style.backgroundColor = '#dddded';
	document.getElementById('headerColor').style.backgroundColor = '#bfa1a1';
	document.getElementById('footerColor').style.backgroundColor = '#bdd9bd';
}