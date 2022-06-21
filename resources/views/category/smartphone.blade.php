@extends('layouts.main')

@section('konten')


<section class="hero py-3" style="margin-top: 100px">
   <div class="container mt-5">
      <div class="row d-flex align-items-center justify-content-start">
         <h5>Kategori : {{ $smartphone }}</h5>
         @foreach ($posts as $post)
         <div class="berita col-md-3 p-3">
            <div class="card-body">
               <h5><a class="text-decoration-none" href="/smartphones/{{ $smartphone->slug }}">{{ $smartphone->name }}</a></h5>
               
            </div>
         </div>
         @endforeach
      </div>
   </div>


</section>
@endsection