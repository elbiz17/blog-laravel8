@extends('layouts.main')

@section('konten')


   

   <main class="content py-5 mt-5" id="konten">
     
      <div class="container py-5">
         <div class="row">
            {{-- <h6>Kategori : {{ $post->category->name }}</h6> --}}
               <div class="text-center  mx-auto" style="z-index :1;background-color:#ffffff;width:220px">
                  <h4 class="text-center" style="z-index: 1;">Berita Teknologi</h4>
               </div>
               <hr class="garis">
               {{-- <div class="garis py-1 bg-light"></div> --}}
               
            @foreach ($posts as $post)
        
            <div class="berita col-md-3 p-3">
               <div class="card-body ">
                  <article>
                     <div class="py-2" style="height: 60px">
                        <h4 ><a class="text-decoration-none" href="/news_kamera/{{ $post->slug }}">{{ $post->title }}</a></h4>
                     </div>
                     <div class="py-2" style="height: 120px">
                        <h6>By : <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
                        <p>{{ $post->excerpt }}</p>
                     </div>
                     <div class="py-2" style="left:0;bottom:0;position:relative">
                        <a  href="/news_kamera/{{ $post->slug }}" class="text-decoration-none">
                           <button class="btn btn-outline-primary icon-link">Read More 
                              <span class="bi">&rarr;</span> 
                           </button>
                        </a>
                     </div>
                  </article>
               </div>
            </div>
            @endforeach
            {{-- @foreach ($laptops as $laptop)
            <div class="flex berita col-md-3 p-1 ">
               <div class="contents card-body ">
                  <article>
                     <h5 class="display-8" ><a class="text-decoration-none" href="/acer_1/{{ $laptop->slug }}">{{ $laptop->title }}</a></h5>
                     <p>By : <a class="text-decoration-none" href="/authors/{{ $laptop->author->username }}">{{ $laptop->author->name }}</a> in <a class="text-decoration-none" href="/categories_laptop/{{ $laptop->category->slug }}">{{ $laptop->category->name }}</a></p>
                     <p>{{ $laptop->excerpt }}</p>
                     <a  href="/acer_1/{{ $laptop->slug }}" class="text-decoration-none">
                        <button class="btn btn-outline-primary icon-link">Read More 
                           <span class="bi">&rarr;</span> 
                        </button>
                     </a>
                  </article>
               </div>
            </div>
            @endforeach --}}

            
         </div>

      </div>
   
   </main>


   @include('partials.footer')

@endsection

