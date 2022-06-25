<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href='https://i.ibb.co/txmVDHG/RG-removebg-preview.png' rel='SHORTCUT ICON'/>

   <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="/css/home.css">
   <script src="https://kit.fontawesome.com/5c2c5b6638.js" crossorigin="anonymous"></script>
   <title>Review Gadget | {{ $title }}</title>
</head>
<body>
   <header id="navbar">
      <nav class="navbar navbar-expand-lg navbar-light bg-navbar fixed-top py-2" >
         <div class="container-fluid" id="navCont">
            <a href="/" class="navbar-brand">
               <img src="/image/logo/logo-1.png" alt=" " style="width: 10em;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
               <span class="navbar-toggler-icon"></span>
            </button>
     
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav px-2 d-flex justify-content-center" style="flex:1;">
                  <li class="nav-item ">
                     <a href="/news" class="nav-link {{ ($active === "news") ? 'active' : '' }}">News</a>
                  </li>
                  <li class="nav-item  btn-group dropdown">
                    
                     <a href="" class="nav-link dropdown-toggle {{ ($active === "smartphone") ? 'active' : '' }}" data-bs-toggle="dropdown">Smartphone</a>
                     <div class="dropdown-menu">
                        <a href="/categories/asus" class="dropdown-item">Asus</a>
                        <a href="/categories/xiaomi" class="dropdown-item">Xiaomi</a>
                        <a href="/categories/samsung" class="dropdown-item">Samsung</a>
             

                     </div>
                  </li>
                  <li class="nav-item ">
                     <a href="/gadget" class="nav-link {{ ($active === "gadget") ? 'active' : '' }}">Gadget</a>
                  </li>
                  <li class="nav-item  dropdown">
                     <a href="" class="nav-link dropdown-toggle {{ ($active === "laptop") ? 'active' : '' }}" data-bs-toggle="dropdown">Laptop</a>
                     <div class="dropdown-menu">
                        <a href="/categories/laptop-acer" class="dropdown-item">Acer</a>
                        <a href="/categories/laptop-asus" class="dropdown-item">Asus</a>
                        <a href="/categories/laptop-axioo" class="dropdown-item">Axioo</a>
            
                     </div>
                  </li>
                  <li class="nav-item ">
                     <a href="/categories" class="nav-link {{ ($active === "categories") ? 'active' : '' }}">Kategori</a>
                  </li>
                  <li class="nav-item ">
                     <a href="/tutorial" class="nav-link {{ ($active === "tutorial") ? 'active' : '' }}">Tutorial</a>
                  </li>
          
                  <li class="nav-item  dropdown">
                     <a href="#" class="nav-link dropdown-toggle {{ ($active === "about") ? 'active' : '' }}" data-bs-toggle="dropdown">About</a>
                     <div class="dropdown-menu">
                         <a href="/about_us" class="dropdown-item">Tentang Kami</a>
                         <a href="#" class="dropdown-item">Kerja Sama</a>
                         <a href="#" class="dropdown-item">Daftar Isi</a>
                         <div class="dropdown-divider"></div>
                         <a href="#" class="dropdown-item">Privacy</a>
                         <a href="#" class="dropdown-item">Disclaimer</a>
        
                     </div>
                 </li>
       
               </ul>
               <ul class="navbar-nav ms-auto px-2">
                  <li class="nav-item">
                     <a href="/login-register" class="nav-link {{ ($active === "login") ? 'active' : '' }}">
                        <i class="fa-solid fa-user "></i>
                        Masuk
                     </a>
                  </li>
               </ul>
          
      
            </div>
         </div>

      </nav>

      {{-- <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top" id="navbar">
         <div class="container" id="navCont">
         <a class="navbar-brand" href="#">Navbar</a>
         <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
         >
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
               <a class="nav-link active" aria-current="page" href="#">Home</a>
               <a class="nav-link" href="#">Features</a>
               <a class="nav-link" href="#">Pricing</a>
               <a
               class="nav-link disabled"
               href="#"
               tabindex="-1"
               aria-disabled="true"
               >
               Disabled
               </a>
            </div>
         </div>
         </div>
      </nav> --}}
   </header>
   <div id='nav-bg'></div>
      

{{-- 
   <section class="hero d-flex align-items-center justify-content-center">
      <div class="container">
         <div class="row">
            <div class="col-md bg-warning">
               p
            </div>
            <div class="col-md bg-info">
               p
            </div>
         </div>
      </div>
   </section> --}}

  @yield('konten')

{{-- @include('partials.footer') --}}






<script src="/bootstrap/js/bootstrap.min.js"></script>

{{-- untuk load more --}}




<script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
<script src="/js/loadMore.js"></script>
<script src="/js/navbar.js"></script>
{{-- <script>
$(document).ready (function () {
  $(".contents").slice(0, 3).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".contents:hidden").slice(0, 3).slideDown();
    if ($(".contents:hidden").length == 0) {
      $("#loadMore").text("No Content").addClass("noContent");
    }
  });
  })
</script> --}}
</body>
</html>