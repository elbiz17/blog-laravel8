// const signUpButton = document.getElementById('signUp');
// const signInButton = document.getElementById('signIn');
// const container = document.getElementById('container');



// signUpButton.addEventListener('click', () => {
// 	container.classList.add("right-panel-active");
// });

// signInButton.addEventListener('click', () => {
// 	container.classList.remove("right-panel-active");
// });

function darkMode1() {
	var element = document.getElementById('cont');

	
	
	element.classList.toggle("dark-mode1");
	}
function darkMode2() {
	var element = document.getElementById('main');

	
	
	element.classList.toggle("dark-mode2");
	}
function darkMode3() {
	var element = document.getElementById('loGin');

	
	
	element.classList.toggle("dark-mode3");
	}
function darkMode4() {
	var element = document.getElementById('navbar');

	
	
	element.classList.toggle("dark-mode4");
	}

function toggleNav(){
	var x = document.getElementById('btnMode');
	if(x.style.display == "none"){
		
		
	}else{
		darkMode2();
		darkMode1();
		darkMode3();
		darkMode4();
	}
}


// + function($) {
// 	$('.palceholder').click(function() {
// 	  $(this).siblings('input').focus();
// 	});
	





// var container = document.getElementsByClassName('container-fluid')[0];
// document.getElementById('buton').addEventListener('change', (event) => {
//   console.log(buton)
//   event.target.checked ? container.removeAttribute('data-theme') : container.setAttribute('data-theme', 'dark');
// });

// function darkMode(isDark){
// 	var darkBtn = document.getElementById('main');
// 	var darkBtn2 = document.getElementById('cont');
// 	if(isDark){
// 		darkBtn.style.display = "none";
// 		darkBtn2.style.display = "block";
// 	}else{
// 		darkBtn.style.display = "block";
// 		darkbtn2.style.display = "none";
// 	}
// 	document.classlist.toggle("dark-mode");
// }