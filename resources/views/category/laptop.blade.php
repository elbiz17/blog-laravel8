@extends('layouts.main')

@section('konten')


<main class="main py-5 " style="margin-top: 50px" >

   <div class="container ">
      <div class="py-3 ">
         <h4 class="display-8">Kategori | {{ $title }}</h4>
      </div>
      <div class="row">
         <div class="col-md-8">
            <div class="px-1">
               <div class="row">
                  @if($posts->count())
                  <div class="col-md-12 px-1">
                     <div class="berita__hero">
                      <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.2);border-top-left-radius:8px;z-index:999">
                         <a href="/laptop?category={{ $posts[0]->category->slug }}" class="text-decoration-none text-white" >
                            {{ $posts[0]->category->name }}
                         </a>
                      </div>
                      <div class="image">
                         <a class="text-decoration-none" href="/postLaptop/{{ $posts[0]->slug }}">
                            <img class="img-fluid" src="https://source.unsplash.com/random/400x200/?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}" style="width:100%">
                         </a>
                      </div>
                        
                      <div class="card-body">
                         <h5 class="card-title">{{ $posts[0]->title }}</h5>
                         <div class="card-text">
                            <label style="font-size:0.8em;margin-bottom:5px">By :
                                <a class="text-decoration-none" href="/laptop?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/laptop?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                                <span class="px-2">
                                  {{ $posts[0]->created_at->diffForHumans() }}
                               </span>
                            </label>
                           
                           
                            <p>
                               {{ $posts[0]->excerpt }}
                            </p>
                         </div>
                         <div class="card-text text-end p-2" style="bottom:0;right:0;position:absolute">
                            <h6 style="font-size:9px;font-weight:100">{{ $posts[0]->created_at->diffForHumans() }}</h6>
                         </div>
                         <a href="/postLaptop/{{ $posts[0]->slug }}" class="btn btn-outline-primary icon-link">Read More 
                            <span class="bi">&rarr;</span> 
                         </a>
                      </div>
                     </div>
                 </div>
                 @else 
                 <div class="container text-center">
                    <div class="row">
                       <div class="col-md">
                          
                          <p class="text-center">No post found</p>
                       </div>
                       <div class="">
              
                       </div>
                    </div>
                 </div>
                 @endif
               </div>
            </div>
            <div class="px-1">
               <div class="row">
                  @foreach ($posts->skip(1) as $post)
                  <div class="col-md-4 py-2 px-1">
                     <div class="berita flex" style="height: auto">
                        <div class="contents">
                           <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.3);border-top-left-radius:8px;z-index:999">
                              <a href="/laptop?category={{ $post->category->slug }}" class="text-decoration-none text-white">
                                 {{ $post->category->name }}
                              </a>
                           </div>
                           <div class="image">
                              <a class="text-decoration-none" href="/postLaptop/{{ $post->slug }}">
                                 <img src="https://source.unsplash.com/random/200x100/?{{ $post->category->name }}" alt="">
                              </a>
                           </div>
                           <div class="card-body">
                              <h5 class="card-title">{{ $post->title }}</h5>
                              <div class="card-text" style="min-height: 4rem">
                                 <label style="font-size:0.7em;margin-bottom:5px">By : <a class="text-decoration-none" href="/laptop?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/laptop?category={{ $post->category->slug }}">{{ $post->category->name }}</a></label>
                              </div>
                              <div class="card-text text-end p-2" style="bottom:0;right:0;position:absolute">
                                 <h6 style="font-size:9px;font-weight:100">{{ $post->created_at->diffForHumans() }}</h6>
                              </div>
                           
                           </div>
                        </div>
                     </div>
                  </div>
                    
                @endforeach
                <div class="loadMore">
                  <a href="#" id="loadMore">Load More</a>
               </div>
               </div>
            </div>
         </div>
     
         <div class="col-md-4 p-0">
            <div class="col-md  sidebar px-4">
               <h5 class="py-2">Cari Artikel</h5>
               <div class="row">
                  <div class="col-md">
                     <form action="/laptop" >
                        @if(request('category'))
                           <input type="hidden" name="category" class="form-control" placeholder="Search..." value="{{ request('category') }}">
                         @endif
                        @if(request('author'))
                           <input type="hidden" name="author" class="form-control" placeholder="Search..." value="{{ request('author') }}">
                         @endif
                        <input type="search" name="search" id="" class="form-control" placeholder="Search..." value="{{ request('search') }}">
                        <button class="btn btn-outline-primary mt-2 me-auto" type="submit">Search</button>
                     </form>
                  </div>
               </div>
               <div class="py-3 mt-2">
                  <h5>About Me</h5>
                  <div class="bg-white border">
                     <div class="row row-cols-2 px-3 py-3">
                        
                        <div class="avatar  d-flex align-items-center text-md-start text-center justify-content-center">
                           <img class="rounded-circle " width="100%" src="/image/pf.jpg" alt="" style="border:1px solid blue">
                        </div>
                        <div class="about text-start ">
                           <div><label class=""  for="" style="font-size: 16px">Lukman Budiman</label></div>
                           <a href="" class="text-decoration-none text-black " style="font-size: 14px"> Kunjungi Profil </a>
      
                        </div>
                     </div>
                     <div class="row row-cols-2 pb-3 px-3">
   
                        <div class="avatar  d-flex align-items-center ">
                           <img class="rounded-circle " width="100%" src="/image/RG.gif" alt="" style="border:1px solid blue">
                        </div>
                        <div class=" about text-start ">
                           <div><label class="" style="font-size: 16px" for="">Review Gadget</label></div>
                           <a href="" class="text-decoration-none text-black " style="font-size: 14px"> Kunjungi Profil </a>
      
                        </div>
                     </div>

                  </div>
              
                 
      
               </div>
               <div class="kontak row py-2 mt-2">
                  <h5>Kontak</h5>
                  <div class="bg-light">
                     <div class="py-2">
                        <label for="">Email</label>
                        <input type="email" value="lukmanbudimantrue@gmail.com" disabled class="form-control"> 
                     </div>
                     <div class="py-2">
                        <label for="">Instagram</label>
                        <a href="" class="text-decoration-none"><div >@elbiz17</div></a>
                     </div>
                  </div>
               </div>
  
            </div>
         </div>
      </div>
      
   </div>


</main>


@include('partials/footer')



@endsection