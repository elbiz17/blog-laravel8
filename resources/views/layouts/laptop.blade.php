<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/laptop.css">
   <script src="https://kit.fontawesome.com/5c2c5b6638.js" crossorigin="anonymous"></script>
   <title>{{ $title }}</title>
</head>
<body>
   <header>
      <nav class="navbar navbar-expand-md navbar-light bg-white  fixed-top">
         <div class="container">
            <a href="/" class="navbar-brand py-3">
               <img src="image/logos.png" alt=" " style="width: 7em">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a href="news" class="nav-link {{ ($title === "News") ? 'active' : '' }}">News</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a href="" class="nav-link dropdown-toggle {{ ($title === "Smartphone") ? 'active' : '' }}" data-bs-toggle="dropdown">Smartphone</a>
                     <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Asus</a>
                        <a href="smartphone_xiaomi" class="dropdown-item">Xiaomi</a>
                        <a href="#" class="dropdown-item">Samsung</a>
                        <a href="#" class="dropdown-item">Realme</a>
                        <a href="#" class="dropdown-item">Vivo</a>
                        <a href="#" class="dropdown-item">Sony Xperia</a>

                     </div>
                  </li>
                  <li class="nav-item">
                     <a href="gadget" class="nav-link {{ ($title === "Gadget") ? 'active' : '' }}">Gadget</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a href="" class="nav-link dropdown-toggle {{ ($title === "Laptop") ? 'active' : '' }}" data-bs-toggle="dropdown">Laptop</a>
                     <div class="dropdown-menu">
                        <a href="laptop_acer" class="dropdown-item">Acer</a>
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
                  <li class="nav-item">
                     <a href="tutorial" class="nav-link {{ ($title === "Tutorial") ? 'active' : '' }}">Tutorial</a>
                  </li>
                  {{-- <li class="nav-item">
                     <a href="" class="nav-link">Monitor</a>
                  </li> --}}
                  <li class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle {{ ($title === "About") ? 'active' : '' }}" data-bs-toggle="dropdown">About</a>
                     <div class="dropdown-menu">
                         <a href="about_us" class="dropdown-item">Tentang Kami</a>
                         <a href="#" class="dropdown-item">Kerja Sama</a>
                         <a href="#" class="dropdown-item">Daftar Isi</a>
                         <div class="dropdown-divider"></div>
                         <a href="#" class="dropdown-item">Privacy</a>
                         <a href="#" class="dropdown-item">Disclaimer</a>
                         {{-- <a href="#" class="dropdown-item">Privacy</a> --}}
                     </div>
                 </li>
               </ul>
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




   {{-- <footer class="border-top">
      <section class="footer p-3 bg-white ">
         <div class="container">
            <div class="row row-cols-4 text-center">
               <div class="col-md">
                  <a href="">
                     <i class="fa-brands fa-youtube fa-2xl text-danger"></i>
                  </a>
               </div>
               <div class="col-md">
                  <a href="">
                     <i class="fa-brands fa-instagram fa-2xl"></i>
                  </a>
               </div>
               <div class="col-md">
                  <a href="">
                     <i class="fa-brands fa-tiktok fa-2xl text-black"></i>
                  </a>
               </div>
               <div class="col-md">
                  <a href="">
                     <i class="fa-brands fa-twitter fa-2xl text-primary"></i>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <section class="footer bg-light d-flex align-items-center text-md-start text-center justify-content-center p-5">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md">
                  <h4 class="border-bottom">InfoTech</h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nesciunt inventore quis cumque? Incidunt vitae magnam voluptate cum repellendus porro, impedit corporis iusto blanditiis saepe architecto fugiat accusantium deleniti dignissimos!</p>
               </div>
               <div class="col-md">
                  <h4 class="border-bottom">About Us</h4>
                  <p>InfoTech adalah sebuah website informasi yang bergerak di bidang teknologi</p>
               </div>
               <div class="col-md">
                  <h4 class="border-bottom">Contact Us</h4>
                  <p>Whatsapp : +6288+++</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure temporibus, reiciendis dignissimos a laboriosam quaerat vel fuga amet ducimus aperiam assumenda cupiditate minus nobis. Qui facilis illum dicta in est.</p>
               </div>
            </div>
         </div>
      </section>
   </footer> --}}



<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>