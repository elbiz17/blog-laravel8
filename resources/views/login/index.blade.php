@extends('layouts.main')

@section('konten')


<section class="main vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-10">
                <strong class="text-center d-block py-3 fs-4" style="color: #03a9f4">Silahkan Login</strong>
                @if(session('status'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if(session('loginError'))
                <div class="alert alert-danger alert-dismissible fade show">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form action="/login" method="post">
                    @csrf
                    {{-- <div class="pt-2 form-floating">
                       <input type="text" name="name" id="name" placeholder="Nama Lengkap" class="form-control @error('name') is-invalid @enderror"> 
                       <label for="name">Name</label>
                       @error('name')
                       <div class="invalid-feedback">
                          {{ $message }}
                       </div>
                       @enderror
                    </div> --}}
                    <div class="pt-2 form-floating">
                       <input type="text" name="username" id="username" placeholder="Username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" autofocus required> 
                       <label for="username">Username</label>
                       @error('username')
                       <div class="invalid-feedback">
                          {{ $message }}
                       </div>
                       @enderror
                    </div>
                    {{-- <div class="pt-2 form-floating">
                       <input type="text" name="email" id="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror"> 
                       <label for="email">Email</label>
                       @error('email')
                       <div class="invalid-feedback">
                          {{ $message }}
                       </div>
                       @enderror
                    </div> --}}
                    <div class="pt-2 form-floating">
                       <input type="password" name="password" id="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror"> 
                       <label for="password">Password</label>
                       @error('password')
                       <div class="invalid-feedback">
                          {{ $message }}
                       </div>
                       @enderror
                    </div>
                    {{-- <div class="py-3">
                       <input type="checkbox" name="" id=""> I have read and agree to the terms
                    </div> --}}
                    <small class="text-center d-block pt-3 ">
                        Not have an account? <a href="/register" class="text-decoration-none">Sign Up</a>
                    </small>
                    <div class="py-3">
                       <button type="submit" class="btn btn-outline-primary form-control">Log In</button>   
                    </div>
                 </form>
            </div>
        </div>
    </div>
</section>

@endsection