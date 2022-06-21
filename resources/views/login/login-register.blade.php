<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href='https://i.ibb.co/txmVDHG/RG-removebg-preview.png' rel='SHORTCUT ICON'/>

   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/home.css">
   <script src="https://kit.fontawesome.com/5c2c5b6638.js" crossorigin="anonymous"></script>
   
   
   {{-- css mdb bootstrap --}}

   <!-- Font Awesome -->
{{-- <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/> --}}
<!-- Google Fonts -->
{{-- <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/> --}}
<!-- MDB -->
{{-- <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
  rel="stylesheet"
/> --}}

   {{-- end of css bootstrap --}}
   
   <title>{{ $title }}</title>
</head>
<body>
   <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-white  fixed-top py-2">
         <div class="container">
            <a href="/" class="navbar-brand">
               <img src="image/NewLogo-2.png" alt=" " style="width: 11em">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav px-2 d-flex justify-content-center" style="flex:1">
                  <li class="nav-item ">
                     <a href="news" class="nav-link {{ ($title === "News") ? 'active' : '' }}">News</a>
                  </li>
                  <li class="nav-item  dropdown">
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
                  <li class="nav-item ">
                     <a href="gadget" class="nav-link {{ ($title === "Gadget") ? 'active' : '' }}">Gadget</a>
                  </li>
                  <li class="nav-item  dropdown">
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
                  <li class="nav-item ">
                     <a href="tutorial" class="nav-link {{ ($title === "Tutorial") ? 'active' : '' }}">Tutorial</a>
                  </li>
                  {{-- <li class="nav-item ">
                     <a href="" class="nav-link">Monitor</a>
                  </li> --}}
                  <li class="nav-item  dropdown">
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
                 {{-- <li class="nav-item px-5">
                     <a href="#" class="nav-link">Login</a>
                  </li> --}}
               </ul>
               <ul class="navbar-nav ms-auto px-2">
                  <li class="nav-item">
                     <a href="login-register" class="nav-link {{ ($title === "Login And Register") ? 'active' : '' }}">
                        <i class="fa-solid fa-user "></i>
                        Masuk
                     </a>
                  </li>
               </ul>
          
               {{-- <div class="" id="navbarSupportedContent">
                  <a href="login" class="rounded text-decoration-none  {{ ($title === "Login") ? 'active' : '' }}" style="font-family: 'Poppins', sans-serif;color:#787878">
                     <i class="fa-solid fa-user "></i>
                     Masuk
                      </a>
               </div> --}}
            </div>
         </div>

      </nav>
   </header>

   
   <section class="login d-flex align-items-center justify-content-center">
      <div class="container">
         <div class="row justify-content-center d-flex p-2">
            <div class="col-md-5">
               {{-- <div class="card"> --}}
                  <!-- Pills navs -->
                  <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                     <li class="nav-item" role="presentation">
                        <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#signIn" role="tab" aria-controls="pills-home" aria-selected="true">Login</a> 
   
                     </li>
                     <li class="nav-item" role="presentation">
                        <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#signUp" role="tab" aria-controls="pills-profile" aria-selected="false">Signup</a> 
   
                     </li>
                  </ul>
                  <!-- Pills navs -->
                  <div class="tab-content" >
                     <div class="signIn tab-pane fade show active" id="signIn">
                        <form action="" method="post">
                           <div class="pt-3">
                              {{-- <label for="username">Username :</label> --}}
                              <input type="text" name="username" id="username" placeholder="Email or Username" class="form-control"> 
                           </div>
                           <div class="pt-3">
                              {{-- <label for="username">Password :</label> --}}
                              <input type="text" name="username" id="username" placeholder="Password" class="form-control"> 
                           </div>
                           <div class="py-3">
                              <input type="checkbox" name="" id=""> Remember Me 
                           </div>
                           <div class="py-3">
                              <button class="btn btn-outline-primary form-control">Sign In</button>   
                           </div>
                       
                        </form>
                     </div>
                     <div class="signUp tab-pane fade " id="signUp">
                        <form action="#" method="post">
                           <div class="pt-3">
                              {{-- <label for="username">Username :</label> --}}
                              <input type="text" name="username" id="username" placeholder="Nama Lengkap" class="form-control"> 
                           </div>
                           <div class="pt-3">
                              {{-- <label for="username">Username :</label> --}}
                              <input type="text" name="username" id="username" placeholder="Username" class="form-control"> 
                           </div>
                           <div class="pt-3">
                              {{-- <label for="username">Username :</label> --}}
                              <input type="text" name="email" id="email" placeholder="Email" class="form-control"> 
                           </div>
                           <div class="pt-3">
                              {{-- <label for="username">Password :</label> --}}
                              <input type="text" name="username" id="username" placeholder="Password" class="form-control"> 
                           </div>
                           <div class="py-3">
                              <input type="checkbox" name="" id=""> I have read and agree to the terms
                           </div>
                           <div class="py-3">
                              <button class="btn btn-outline-primary form-control">Sign Up</button>   
                           </div>
                        </form>
                     </div>

                  </div>

               {{-- </div> --}}
            </div>
         </div>
      </div>
   </section>


{{-- @include('partials.footer') --}}



<!-- MDB -->
{{-- <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"
></script> --}}

<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

