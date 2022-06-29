@extends('layouts.main')

@section('konten')



<section class="hero py-5" style="margin-top: 120px; background:white">
   <div class="container">
      <div class="row">
         <h5>All Categories</h5>
         @foreach ($categories as $category)
         @if(request('tutorial'))
            
         @endif
         <div class=" col-md-4 py-2">
            <a href="/categories/{{ $category->slug }}">
               <div class="berita p-0 position-relative" style="overflow: hidden">
                  <img class="img-fluid" src="https://source.unsplash.com/random/600x400/?{{ $category->name }}" alt="{{ $category->name }}" alt="">
                  <div class="position-absolute top-50 start-50 translate-middle" >
                     <h5  class="card-title text-center  flex-fill py-2" style="background-color:rgba(0,0,0,0.7);width:auto;min-width:25rem;color:white !important">
                        <a class="text-decoration-none text-white" href="/news?category={{ $category->slug }}">{{ $category->name }}</a></h5>
                  </div>
               </div>
            </a>
         </div>

         {{-- <div class="card bg-dark text-white">
            <img src="..." class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text">Last updated 3 mins ago</p>
            </div>
          </div> --}}
         @endforeach

         {{-- @foreach ($categories as $category)
         <div class="berita col-md-3 p-3">
            <div class="card-body text-center">
               <h5><a class="text-decoration-none" href="/categories_laptop/{{ $category->slug }}">{{ $category->name }}</a></h5>
            </div>
         </div>

         @endforeach --}}
      </div>
   </div>
</section>




@endsection