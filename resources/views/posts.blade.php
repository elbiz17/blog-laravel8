
@extends('layouts.main')

@section('konten')

<section class="mt-5 pt-5" style="margin-top: 140px">
   
   <div class="container" >
      @foreach ($posts as $post)
      <article>
         <h2>
            <a href="posts/{{ $post["slug"] }}">
               {{ $post["title"] }}   
            </a>
         </h2>
         <h6>By : {{ $post["author"]  }}</h6>
         <p>{{ $post["body"] }}</p>
      </article>
      @endforeach
   </div>
</section>


@endsection