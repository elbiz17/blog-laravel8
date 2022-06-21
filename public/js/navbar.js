// var header = $('header');

// var range = 0;

// $(window).on('scroll', function () {

  

//   var scrollTop = $(this).scrollTop(),

//       height = header.outerHeight(),

//       offset = height / 2,

//       calc = 1 - (scrollTop - offset + range) / range;

//   header.css({ 'opacity': calc });

//   if (calc > '1') {

//     header.css({ 'opacity': 1 });

//   } else if ( calc < '0' ) {

//     header.css({ 'opacity': 0 });

//   }

  

// });

// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//   if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
//     document.getElementById("navbar").style.fontSize = "10px";
//   } else {
//     document.getElementById("navbar").style.fontSize = "30px";
//   }
// }


// $(function(){
//     var shrinkHeader = 600;
//      $(window).scroll(function() {
//        var scroll = getCurrentScroll();
//          if ( scroll >= shrinkHeader ) {
//               $('#header').addClass('shrink');
//            }
//            else {
//                $('#header').removeClass('shrink');
//            }
//      });
//    function getCurrentScroll() {
//        return window.pageYOffset;
//        }
//    });


// panggil navbar
const navBar = document.getElementById("navbar");
const navCont = document.getElementById("navCont");


function scroll() {
    let calc = window.scrollY; // mendapatkan posisi scroll dari atas ke bawah
    if (calc > 0) { // jika posisi scroll lebih dari 0 pixel
      navBar.classList.replace("bg-navbar", "bg-nav"); // ganti background navbar
      navBar.classList.replace("navbar-light", "navbar-nav"); // ganti tampilan navbar
      navCont.classList.replace("container-fluid", "container"); // ubah margin pada navbar
    } else if (calc <= 0) { // jika posisi scroll sama dengan 0 pixel
      navBar.classList.replace("bg-nav", "bg-navbar");
      navBar.classList.replace("navbar-nav", "navbar-light");
      navCont.classList.replace("container", "container-fluid");
    }
  }

  //panggil saat inisialisasi
scroll();

// panggil saat discroll
window.onscroll = () => { // jika tidak work untuk arrow function, coba pakai function biasa
  scroll();
};