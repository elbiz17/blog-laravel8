@extends('layouts.main')

@section('konten')



<section class="hero py-5" style="margin-top: 120px; background:white">
   <div class="container">
      <div class="row">
         <h5>All Categories</h5>
         @foreach ($categories as $category)
         <div class=" col-md-4 py-2">
            <div class="berita">
               <div class="p-0 image">
                  <img class="img-fluid" src="https://source.unsplash.com/random/600x400/?{{ $category->name }}" alt="{{ $category->name }}" alt="">
               </div>
               <div class="card-body text-center">
                  <h5><a class="text-decoration-none" href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h5>
                 
                  {{-- <h5><a class="text-decoration-none" href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h5> --}}
               </div>
            </div>
         </div>
         @endforeach
{{-- 
         @foreach ($categories as $category)
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