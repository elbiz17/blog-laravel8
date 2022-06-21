@extends('layouts.main')

@section('konten')


<section class="hero py-3" style="margin-top: 100px">
   <div class="container mt-5">
      <div class="row d-flex align-items-center justify-content-start">
         <h5>Kategori : {{ $category }}</h5>
         @foreach ($posts as $post)
         <div class="berita col-md-3 p-3">
            <div class="card-body">
               <article>
                  <h5><a href="/news_kamera/{{ $post->slug }}">{{ $post->title }}</a></h5>
                  <h6>By : {{ $post["author"] }}</h6>
                  <p style="color: rgb(21, 20, 20);font-size:16px;font-weight:400">{{ $post->excerpt }}</p>
                  <a href="/news_kamera/{{ $post->slug }}" class="text-decoration-none">
                     <button class="btn btn-outline-primary icon-link">Read More 
                        <span class="bi">&rarr;</span> 
                     </button>
                  </a>
               </article>
            </div>
         </div>
         @endforeach
      </div>
   </div>


</section>
@endsection