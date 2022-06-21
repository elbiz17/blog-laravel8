<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="/css/home.css">
   <script src="https://kit.fontawesome.com/5c2c5b6638.js" crossorigin="anonymous"></script>
   <title>{{ $title }}</title>
</head>
<body>
   <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-white  fixed-top py-2">
         <div class="container">
            <a href="/" class="navbar-brand">
               <img src="/image/NewLogo-2.png" alt=" " style="width: 11em">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav px-2 d-flex justify-content-center" style="flex:1;">
                  <li class="nav-item ">
                     <a href="/news" class="nav-link {{ ($title === "News") ? 'active' : '' }}">News</a>
                  </li>
                  <li class="nav-item  btn-group dropdown">
                     {{-- <a href="" class="nav-link">Smartphone</a> --}}
                     <a href="" class="nav-link dropdown-toggle {{ ($title === "Smartphone") ? 'active' : '' }}" data-bs-toggle="dropdown">Smartphone</a>
                     <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Asus</a>
                        <a href="/smartphone_xiaomi" class="dropdown-item">Xiaomi</a>
                        <a href="#" class="dropdown-item">Samsung</a>
                        <a href="#" class="dropdown-item">Realme</a>
                        <a href="#" class="dropdown-item">Vivo</a>
                        <a href="#" class="dropdown-item">Sony Xperia</a>

                     </div>
                  </li>
                  <li class="nav-item ">
                     <a href="/gadget" class="nav-link {{ ($title === "Gadget") ? 'active' : '' }}">Gadget</a>
                  </li>
                  <li class="nav-item  dropdown">
                     <a href="" class="nav-link dropdown-toggle {{ ($title === "Laptop") ? 'active' : '' }}" data-bs-toggle="dropdown">Laptop</a>
                     <div class="dropdown-menu">
                        <a href="/laptop_acer" class="dropdown-item">Acer</a>
                        <a href="#" class="dropdown-item">Asus</a>
                        <a href="#" class="dropdown-item">Axioo</a>
                        <a href="#" class="dropdown-item">Dell</a>
                        <a href="#" class="dropdown-item">Huawei</a>
                        <a href="#" class="dropdown-item">Lenovo</a>
                        <a href="#" class="dropdown-item">MSI</a>
                        <a href="#" class="dropdown-item">HP</a>
                        <a href="#" class="dropdown-item">Xiaomi</a>
                     </div>
                  </li>
                  <li class="nav-item ">
                     <a href="/tutorial" class="nav-link {{ ($title === "Tutorial") ? 'active' : '' }}">Tutorial</a>
                  </li>
                  {{-- <li class="nav-item ">
                     <a href="" class="nav-link">Monitor</a>
                  </li> --}}
                  <li class="nav-item  dropdown">
                     <a href="#" class="nav-link dropdown-toggle {{ ($title === "About") ? 'active' : '' }}" data-bs-toggle="dropdown">About</a>
                     <div class="dropdown-menu">
                         <a href="/about_us" class="dropdown-item">Tentang Kami</a>
                         <a href="#" class="dropdown-item">Kerja Sama</a>
                         <a href="#" class="dropdown-item">Daftar Isi</a>
                         <div class="dropdown-divider"></div>
                         <a href="#" class="dropdown-item">Privacy</a>
                         <a href="#" class="dropdown-item">Disclaimer</a>
                         {{-- <a href="#" class="dropdown-item">Privacy</a> --}}
                     </div>
                 </li>
                 {{-- <li class="nav-item px-5">
                     <a href="#" class="nav-link">Login</a>
                  </li> --}}
               </ul>
               <ul class="navbar-nav ms-auto px-2">
                  <li class="nav-item">
                     <a href="/login-register" class="nav-link {{ ($title === "Login") ? 'active' : '' }}">
                        <i class="fa-solid fa-user "></i>
                        Masuk
                     </a>
                  </li>
               </ul>
          
               {{-- <div class="ms-auto" id="navbarSupportedContent">
                  <a href="login" class=" rounded text-decoration-none {{ ($title === "Login") ? 'active' : '' }}" style="font-family: 'Poppins', sans-serif;color:#787878">
                     <i class="fa-solid fa-user "></i>
                     Masuk
                      </a>
               </div> --}}
            </div>
         </div>

      </nav>
   </header>

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
</body>
</html>