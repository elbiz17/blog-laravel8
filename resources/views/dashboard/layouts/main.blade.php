<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>My Dashboard</title>


    <style>
/* body {
  font-size: .875rem;
}

.feather {
  width: 16px;
  height: 16px;
  vertical-align: text-bottom;
} */

/*
 * Sidebar
 */

.sidebar {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  z-index: 100; /* Behind the navbar */
  padding: 48px 0 0; /* Height of navbar */
  box-shadow: inset 1px 0 0 rgba(0, 0, 0, .1);
}

#sidebarMenu{
  /* transition: .5s ease-in-out; */
}

@media (max-width: 767.98px) {
  .sidebar {
    top: 5rem;
  }
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.sidebar .nav-link {
  font-weight: 500;
  color: #333;
}

.sidebar .nav-link .feather {
  margin-left: 4px;
  color: #727272;
}

.sidebar .nav-link.active {
  color: #2470dc;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: .75rem;
  text-transform: uppercase;
}

/*
 * Navbar
 */

.navbar-brand {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: 1rem;
  background-color: rgba(0, 0, 0, .25);
  box-shadow: inset 1px 0 0 rgba(0, 0, 0, .25);
}

/* .navbar .navbar-toggler {
  top: .25rem;
  left: 1rem;
} */

.navbar .form-control {
  padding: .75rem 1rem;
  /* width: 80px; */
  border-width: 0;
  border-radius: 0;
}

.form-control-dark {
  color: #fff;
  background-color: rgba(255, 255, 255, .1);
  border-color: rgba(255, 255, 255, .1);
}

.form-control-dark:focus {
  border-color: transparent;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
}

/* burger collapse */
.bar1, .bar2, .bar3 {
  width: 35px;
  height: 5px;
  background-color: #fff;
  margin: 6px 0;
  transition: 0.5s;
}

.change .bar1 {
  -webkit-transform: rotate(-45deg) translate(-9px, 6px);
  transform: rotate(-45deg) translate(-9px, 6px);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
  -webkit-transform: rotate(45deg) translate(-8px, -8px);
  transform: rotate(45deg) translate(-8px, -8px);
}

.notification {
  /* background-color: #555; */
  color: white;
  text-decoration: none;
  padding: 13px 6px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: 8px;
  right: -10px;
  padding: 3px 8px;
  border-radius: 50%;
  background: red;
  color: white;
}


/* search */


.search-box{
  width: fit-content;
  height: fit-content;
  position: relative;
}
.input-search{
  height: 50px;
  width: 50px;
  border-style: none;
  padding: 10px;
  font-size: 18px;
  letter-spacing: 2px;
  outline: none;
  border-radius: 25px;
  transition: all .5s ease-in-out;
  background-color: #22a6b3;
  padding-right: 40px;
  color:#fff;
}
.input-search::placeholder{
  color:rgba(255,255,255,.5);
  font-size: 18px;
  letter-spacing: 2px;
  font-weight: 100;
}
.btn-search{
  width: 50px;
  height: 50px;
  border-style: none;
  font-size: 20px;
  font-weight: bold;
  outline: none;
  cursor: pointer;
  border-radius: 50%;
  position: absolute;
  right: 0px;
  color:#ffffff ;
  background-color:transparent;
  pointer-events: painted;  
}
.btn-search:focus ~ .input-search{
  width: fit-content;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
.input-search:focus{
  width: fit-content;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}

/* 
input[type=text] {
  width: 50px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
} */
    </style>
</head>
<body>
    <header class="navbar navbar-dark sticky-top bg-dark  flex-md-nowrap p-0 shadow align-items-center d-flex" style="background-color: ">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">
          <img src="/image/logo/logo-1.png" alt=" " style="width: 7em;">
        </a>
        <button class="navbar-toggle border-0   d-md-none collapsed bg-dark  collapsed" type="submit" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <div class="container" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>
        </button>
        <div class="col-md w-100">

          
          <div class="search-box">
            <button class="btn-search"><i class="bi bi-search"></i></button>
            <input type="text" class="input-search" placeholder="Type to Search...">
            
          </div>
{{-- 
          <i class="bi bi-search position-absolute  " style="font-size: 1.4rem"></i>
          <input class="form-control form-control-dark  rounded border-none" type="text" placeholder="Search" aria-label="Search" > --}}
        </div>
    
        {{--         
        <div class="navbar-nav">
          <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="#">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"> <i class="fa fa-sign-out" aria-hidden="true"></i> Logout</button>
                 </form>
            </a>
          </div>

        </div> --}}



      {{-- <div class="container-fluid">
          
        <div class="navbar-nav ">
          <div class="nav-item">
              <a href="" class="nav-link notification">
                <span><i class="bi bi-chat-dots"></i></span>
                <span class="badge">3</span>
              </a>
          </div>
  
        </div>
        <div class="navbar-nav ">
          <div class="nav-item">
              <a href="" class="nav-link notification">
                <span><i class="bi bi-bell"></i></span>
                <span class="badge">3</span>
              </a>
          </div>
  
        </div>
          <div class="dropdown d-flex justify-content-center  ">    
     
              <a class="btn text-decoration-none text-white border-0 dropdown-toggle d-flex align-items-center " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-fluid rounded-circle" src="/image/users/1-old.jpg" alt="" style="width:2em">
                <span class="display-8 px-2">
                  {{ auth()->user()->name }}
                </span>
                 
                </a>
  
              <ul class="dropdown-menu dropdown-menu-md-end dropdown-menu-md-start " aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#"><i class="bi bi-person-square"></i> My Profile</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Setting</a></li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"> <i class="bi bi-box-arrow-right"></i> Logout</button>
                  </form>
              </ul>
          </div>
      </div> --}}

      <div class="d-flex me-4">
        <div class="navbar-nav px-2">
          <div class="nav-item">
            <a href="" class="nav-link notification pt-3">
              <span><i class="bi bi-chat-dots" style="font-size:1.2rem"></i></span>
              <span class="badge">4</span>
            </a>
          </div>
        </div>
        <div class="navbar-nav px-2">
          <div class="nav-item">
            <a href="" class="nav-link notification pt-3" >
              <span><i class="bi bi-bell" style="font-size:1.2rem"></i></span>
              <span class="badge">3</span>
            </a>
          </div>
        </div>
        <div class="dropdown d-flex justify-content-center  px-2">    
     
          <a class="btn text-decoration-none text-white border-0 dropdown-toggle d-flex align-items-center " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="img-fluid rounded-circle" src="/image/users/1-old.jpg" alt="" style="width:2em">
            <span class="display-8 px-2">
              {{ auth()->user()->name }}
            </span>
             
            </a>

          <ul class="dropdown-menu dropdown-menu-md-end dropdown-menu-md-start " aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#"><i class="bi bi-person-square"></i> My Profile</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Setting</a></li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"> <i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
          </ul>
      </div>


     
      </div>

      </header>
      


    <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse ">
            <div class="position-sticky" style="padding-top: 2rem">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="#">
                    <span data-feather="home"></span> <i class="bi bi-grid"></i>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="layers"></span>
                    <i class="bi bi-file-text"></i> Post
                  </a>
                </li>
              </ul>
            </div>
          </nav>
      
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Dashboard</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                  <span data-feather="calendar"></span>
                  This week
                </button>
              </div>
            </div>
      
           
    @yield('konten')
            
           
          </main>
        </div>
      </div>

      <script>
        function myFunction(x) {
          x.classList.toggle("change");
        }
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>