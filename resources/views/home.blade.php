@extends('layouts.main')

@section('konten')


   <section class="hero d-flex align-items-end justify-content-center ">

      <div class="container">
         
         {{-- <div class="row hero-bg justify-content-center">
            <div class="hero-text col-md-6 pt-5">
               <div class="row " style="bottom:0">
                  <div class="col-md py-3">
                     <div class="pt-5">
                        <img src="image/hero-img.png" alt="" style="height:10em;max-width:22em;" width="100%">
                     </div>
                     <div class="">
                        <h4 class="display-5 fw-bolder">Selamat Datang</h4>
                     </div>
                     <div class="py-1">
                        <p style="text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam facere voluptatibus nemo, eaque unde dicta perspiciatis qui voluptatum laboriosam. Soluta vero officiis eaque numquam aut accusamus culpa eius, placeat dolore?</p>  
                     </div>
                     <div class="readMore">
                        <a href="#konten" class="text-decoration-none">
                           <button class="btn btn-outline-light icon-link  ">Get Started 
                              <span class="bi">&rarr;</span> 
                           </button>
                        </a>
                     </div>
                  </div>
                
            
               </div>
            </div>
            <div class="hero-model col-md-6 d-none d-md-block pt-2">
               <div class="hero-img" >
                  <img class="img-fluid" src="/image/model/model.png" alt=""  >

               </div>
            </div>
         </div> --}}

         <div class="row hero" style="">
            <div class="col-md-7 align-self-center justify-content-center" >
               <div class="row">
                  <div class="col-md pt-5 ">
                     <div class="hero__img pt-5">
                        <img class="img-fluid" src="image/hero-img.png" alt="" style="height:12rem;max-width:22rem" width="100%">
                        
                     </div>
                  </div>
          
               </div>
               <div class="row ">
                  <div class="col-md ">
                     <div class="card-text">
                        <h4 class="display-5 fw-bolder">Selamat Datang</h4>
                        <p class style="text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam facere voluptatibus nemo, eaque unde dicta perspiciatis qui voluptatum laboriosam. Soluta vero officiis eaque numquam aut accusamus culpa eius, placeat dolore?</p>  
                        <div class="readMore pb-3">
                           <a href="#konten" class="text-decoration-none">
                              <button class="btn btn-outline-light icon-link  ">Get Started 
                                 <span class="bi">&rarr;</span> 
                              </button>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-5 model__cover bg-white  align-self-end">
               <div class="row text-center ">
                  <div class="model__img   d-none d-md-block " >
                     <img class="img-fluid " src="/image/model/model.png" alt="" style="" width="100%">
      
                  </div>
               </div>
            </div>
         </div>

     


      
  
      
      </div>
      
   </section>
   <section class="banner">
      <div class="container">
         <div class="row  row-cols-3  d-flex" style="position: relative;top:-15px">
            <div class="col-md ">
               <div class="image bg-white text-center shadow"style="line-height:80px;border-radius:8px;">
                  <img class="img-fluid" src="/image/logo/logo-asus.png" alt="" style="width: 13em;height:4em;min-height:100%">
                  {{-- <p class="text-center"style="font-size:0.75em">ASUS</p> --}}
               </div>
            </div>
            <div class="col-md">
               <div class="image bg-white text-center shadow"style="line-height:80px;border-radius:8px;">
                  {{-- <p class="text-center" style="font-size:0.75em">Xiaomi</p> --}}
                  <img class="img-fluid" src="/image/logo/logo-xiaomi.png" alt="" style="width: 100%;height:4em;min-height:100%">

               </div>
            </div>
            <div class="col-md">
               <div class="image bg-white text-center shadow"style="line-height:80px;border-radius:8px;">
                  {{-- <p class="text-center" style="font-size:0.75em">Samsung</p> --}}
                  <img class="img-fluid" src="/image/logo/logo-samsung.png" alt="" style="width: 100%;height:4em;min-height:100%">

               </div>
            </div>
         </div>
      </div>
   </section>

   <main class="content py-5" id="konten">
      <div class="container" >
         <div  class="row justify-content-center align-items-center d-flex" >
            {{-- <h4></h4> --}}
            <div class="columns" style="background-color:#f6f9ff; ">
               <h5 class="text-primary ">Who We Are</h5>
               <h4 class="fs-3" style="color: #012970; text-align:justify">Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit</h4>
               <p class="display-8" style="text-align:justify;">Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corruption.</p>
               <div class="">
                  <button class="btn btn-outline-primary fs-6 icon-link">Read More 
                     <span class="bi">&rArr;</span> 
                  </button>
               </div>
            </div>
            <div class="columns ">
               <img class="" src="image/about.jpg" alt="" >
            </div>
         </div>
         <div class="py-5 ">
            <h4 class="text-center pt-3 pb-1 text-primary">Our Values</h4>
            <h2 class="text-center" style="color: #012970;">Odit est perspiciatis laborum et dicta</h2>
            <div class="row pt-4">
               <div class="col-md ">
                  <div class="column ">
                     {{-- <div class="card-body"> --}}
                        <div class="text-center">
                           <img  src="image/values-1.png" alt="">
                        </div>
                        <div class="card-body px-3">
                           <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
                        </div>

                     {{-- </div> --}}
                  </div>
               </div>
               <div class="col-md">
                  <div class="column">
                     <div class="text-center">
                        <img src="image/values-2.png" alt="">
                     </div>
                     <div class="card-body px-3">
                        <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md">
                  <div class="column">
                     <div class="text-center">
                        <img src="image/values-3.png" alt="">
                     </div>
                     <div class="card-body px-3">
                        <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      {{-- <div class="container">
         <div class="row justify-content-center mx-1">
            
               <div class="text-center  mx-auto" style="z-index :1;background-color:#ffffff;width:220px">
                  <h4 class="text-center" style="z-index: 1;">Berita Teknologi</h4>
               </div>
               <hr class="garis">
     
            @if ($posts->count())
            
            <div class="berita__hero col-md-12  py-2 mb-2" >
               <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.2);border-top-left-radius:8px;z-index:999">
                  <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none text-white" >
                     {{ $posts[0]->category->name }}
                  </a>
               </div>
               <div class="image">
                  <a class="text-decoration-none" href="/news_kamera/{{ $posts[0]->slug }}">
                     <img src="https://source.unsplash.com/random/600x200/?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}" style="width:100%">
                  </a>
               </div>
               <div class="card-body">
                  <div class="py-1" style="height:40px">

                     <h5><a class="text-decoration-none" href="/news_kamera/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h5>
                  </div>
                  <div class="py-2">
                     <p class="card-text">
                        <small style="font-size:0.8em;margin-bottom:5px">
                           By : <a class="text-decoration-none" href="/authors/{{ $posts[0]->author->username }}">
                              {{ $posts[0]->author->name }}</a> in 
                              <a class="text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}">
                              {{ $posts[0]->category->name }}</a> 
                              <span class="px-2">
                                 {{ $posts[0]->created_at->diffForHumans() }}
                              </span>
                             
                        </small>
                              <p>{{ $posts[0]->excerpt }}</p>  
                     </p>
                  </div>
                  <a  href="/news_kamera/{{ $posts[0]->slug }}" class="text-decoration-none">
                     <button class="btn btn-outline-primary icon-link">Read More 
                        <span class="bi">&rarr;</span> 
                     </button>
                  </a>
          
                  
                  <div class="card-text text-end p-2" style="bottom:0;right:0;position:absolute">
                     <h6 style="font-size:11px;font-weight:200">{{ $posts[0]->created_at->diffForHumans() }}</h6>
                  </div>
               </div>
            </div>

            @else
               <p class="text-center">No post found</p>

            @endif

    

         
         </div>
      </div> --}}

      {{-- <div class="container">

         <div class="row d-flex justify-content-center mx-1">
  

               @foreach ($posts->skip(1) as $post)
               <div class="flex berita col-md-3 py-2 mb-2 ">
                  <div class="contents ">
                     <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.3);border-top-left-radius:8px;z-index:999">
                        <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">
                           {{ $post->category->name }}
                        </a>
                     </div>
                     <div class="image">
                        <a class="text-decoration-none" href="/news_kamera/{{ $post->slug }}">
                           <img src="https://source.unsplash.com/random/320x150/?{{ $post->category->name }}" alt="">
                        </a>
                     </div>
                     <div class="card-body">
                        <div class="py-1" style="height:40px">
                           <h5><a class="text-decoration-none" href="/news_kamera/{{ $post->slug }}">{{ $post->title }}</a></h5>
                        </div>
                        <div class="py-1" style="min-height: 8rem">
                           <div class="card-text">
                              <label style="font-size:0.8em;margin-bottom:5px">By : <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></label>
                              <p style="font-size:1em;">{{ $post->excerpt }}</p>
                           </div>
                        </div>
                        <a  href="/news_kamera/{{ $post->slug }}" class="text-decoration-none">
                           <button class="btn btn-outline-primary icon-link">Read More 
                              <span class="bi">&rarr;</span> 
                           </button>
                        </a>
                
                        
                        <div class="card-text text-end p-2" style="bottom:0;right:0;position:absolute">
                           <h6 style="font-size:9px;font-weight:100">{{ $post->created_at->diffForHumans() }}</h6>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
           
               <div class="loadMore">
                  <a href="#" id="loadMore">Load More</a>
               </div>
         
         </div>
      </div> --}}

      <div class="container py-2" id="showKonten">
         <div class="row">
            <div class="text-center  mx-auto"  style="z-index :1;background-color:#ffffff;width:220px">
               <h4 class="text-center" style="z-index: 1;">Berita Populer</h4>
            </div>
            <hr class="garis">
            @if ($posts->count())
             <div class="col-md-12">
                 <div class="berita__hero">
                  <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.2);border-top-left-radius:8px;z-index:999">
                     <a href="/news?category={{ $posts[0]->category->slug }}" class="text-decoration-none text-white" >
                        {{ $posts[0]->category->name }}
                     </a>
                  </div>
                  <div class="image">
                     <a class="text-decoration-none" href="/show/{{ $posts[0]->slug }}">
                        @if ($posts[0]->image)
                        <div style="max-height:350px;overflow:hidden">
                           <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="" style="width: 100%">
                        </div>
                        @else
                           <img src="https://source.unsplash.com/random/450x200/?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}" style="width:100%">

                            
                        @endif
                     </a>
                  </div>
                    
                  <div class="card-body">
                     <h5 class="card-title" style="height: 40px">{{ $posts[0]->title }}</h5>
                     <div class="card-text" style="min-height: 3rem">
                        <label style="font-size:11px;margin-bottom:5px">
                            <a class="text-decoration-none" href="/news?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/news?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                            <span class="px-2">
                              {{ $posts[0]->created_at->diffForHumans() }}
                           </span>
                        </label>
                       
                       
                        <p>
                           {{ $posts[0]->excerpt }}
                        </p>
                     </div>
                     <div class="card-text text-end p-2" style="bottom:0;right:0;position:absolute">
                        <h6 style="font-size:11px;font-weight:100">{{ $posts[0]->created_at->diffForHumans() }}</h6>
                     </div>
                     <a href="/show/{{ $posts[0]->slug }}" class="btn btn-outline-primary icon-link">Read More 
                        <span class="bi">&rarr;</span> 
                     </a>
                  </div>
                 </div>
             </div>
         </div>
     </div>
     @else 
     <p class="text-center">No post found</p>
   @endif

     <div class="container">
         <div class="row row-cols-2">
             @foreach ($posts->skip(1) as $post)
               <div class="col-md-4 py-2">
                  <div class="berita flex" style="height: auto">
                     <div class="contents">
                        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.3);border-top-left-radius:8px;z-index:999">
                           <a href="/news?category={{ $post->category->slug }}" class="text-decoration-none text-white">
                              {{ $post->category->name }}
                           </a>
                        </div>
                        <div class="image">
                           <a class="text-decoration-none" href="/show/{{ $post->slug }}">
                              @if ($post->image)
                              <div style="max-width:320px; max-height:150px;overflow:hidden">
                                 <img src="{{ asset('storage/' . $post->image) }}" alt="" style="width: 100%">
                              </div>
                              @else
                                 <img src="https://source.unsplash.com/random/320x150/?{{ $post->category->name }}" alt="">
      
                                  
                              @endif
                           </a>
                        </div>
                        <div class="card-body">
                           <h5 class="card-title">{{ $post->title }}</h5>
                           <div class="card-text" style="height:3rem">
                              <label style="font-size:9px;margin-bottom:5px"><a class="text-decoration-none" href="/news?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/news?category={{ $post->category->slug }}">{{ $post->category->name }}</a></label>
                        
                              {{-- <p>
                                 {{ $post->excerpt }}
                              </p> --}}
                           </div>
                          
                           {{-- <a href="/news_kamera/{{ $post->slug }}" class="btn btn-outline-primary icon-link">Read More 
                              <span class="bi">&rarr;</span> 
                           </a> --}}
                        </div>
                         <div class="card-text text-end p-3" style="bottom:0;right:0;position:absolute">
                              <h6 style="font-size:9px;font-weight:100">{{ $post->created_at->diffForHumans() }}</h6>
                           </div>
                     </div>
                  </div>
               </div>
                 
             @endforeach
             
            </div>
            <div class="loadMore">
              <a href="#" id="loadMore">Load More</a>
           </div>
     </div>
   
      
   </main>


   @include('partials.footer')

@endsection

