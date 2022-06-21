@extends('layouts.main')

@section('konten')



<section class="hero py-5" style="margin-top: 120px">
   <div class="container">
      <div class="row">
         <h5>All Smartphone</h5>
         @foreach ($smartphones as $smartphone)
         <div class="news col-md-3 p-3">
            <div class="card-body text-center">
               <h5><a class="text-decoration-none" href="/smartphones/{{ $smartphone->slug }}">{{ $smartphone->name }}</a></h5>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</section>




@endsection