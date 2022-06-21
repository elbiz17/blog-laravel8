@extends('layouts.main')

@section('konten')



<section class="hero py-5" style="margin-top: 120px">
   <div class="container">
      <div class="row">
         <h5>All Categories</h5>
         @foreach ($laptops as $laptop)
         <div class="berita col-md-3 p-3">
            <div class="card-body text-center">
               <h5><a class="text-decoration-none" href="/categories_laptop/{{ $laptop->category->slug }}">{{ $laptop->category->name }}</a></h5>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</section>




@endsection