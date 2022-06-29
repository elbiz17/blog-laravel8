@extends('layouts.main')

@section('konten')


<section class="main vh-100  align-items-center d-flex">
   <div class="container">
      <div class="row justify-content-center align-items-center">
         <div class="col-lg-5 mt-5">
            <form action="/register" method="post">
               @csrf
               <div class="pt-2 form-floating">
                  <input type="text" name="name" id="name" placeholder="Nama Lengkap" class="form-control"> 
                  <label for="name">Name</label>
               </div>
               <div class="pt-2 form-floating">
                  <input type="text" name="username" id="username" placeholder="Username" class="form-control"> 
                  <label for="username">Username</label>
               </div>
               <div class="pt-2 form-floating">
                  <input type="text" name="email" id="email" placeholder="Email" class="form-control"> 
                  <label for="email">Email</label>
               </div>
               <div class="pt-2 form-floating">
                  <input type="password" name="password" id="password" placeholder="Password" class="form-control"> 
                  <label for="password">Password</label>
               </div>
               {{-- <div class="py-3">
                  <input type="checkbox" name="" id=""> I have read and agree to the terms
               </div> --}}
               <div class="py-3">
                  <button type="submit" class="btn btn-outline-primary form-control">Sign Up</button>   
               </div>
            </form>
         </div>
         
      </div>
   </div>
</section>


@endsection