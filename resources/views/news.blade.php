@extends('layouts.main')

@section('konten')


<main class="main py-5 " style="margin-top: 50px" >

   <div class="container ">
      <div class="py-3 ">
         <h4 class="display-8">{{ $title }}</h4>
      </div>
      <div class="row">
         <div class="col-md-8">
            <div class="px-1">
               <div class="row">
                  @if($posts->count())
                  <div class="col-md-12 px-1">
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
                         <h5 class="card-title">{{ $posts[0]->title }}</h5>
                         <div class="card-text">
                            <label style="font-size:0.8em;margin-bottom:5px">By :
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
                            <h6 style="font-size:9px;font-weight:100">{{ $posts[0]->created_at->diffForHumans() }}</h6>
                         </div>
                         <a href="/show/{{ $posts[0]->slug }}" class="btn btn-outline-primary icon-link">Read More 
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
              
                  {{-- @foreach($posts->skip(1) as $post)
                  <div class="col-md-3 news   py-2">
                     <div class="news-wrap">
                        <a href="/news_kamera/{{ $post->slug }}" class="text-decoration-none text-black">
                           <div class="image">
                              <img src="image/phone-108.jpg" alt="" >
                           </div>
                           <div class="card-body">
                              <div class="py-2">
                                 <h5 style="font-weight: 800;font-size:18px">{{ $post->title }}</h5>
                                
                              </div>
                        
                           </div>
                        </a>
                     </div>
                  </div>
                  @endforeach --}}
               </div>
            </div>
            <div class="px-1">
               <div class="row row-cols-2">
                  @foreach ($posts->skip(1) as $post)
                  <div class="col-md-4 pt-2 px-1">
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
                              <div class="card-text" style="min-height: 4rem">
                                 <label style="font-size:0.7em;margin-bottom:5px">By : 
                                    <a class="text-decoration-none" href="/news?author={{ $post->author->username }}">
                                       {{ $post->author->name }}
                                    </a> in
                                    <a class="text-decoration-none" href="/news?category={{ $post->category->slug }}">
                                       {{ $post->category->name }}
                                    </a>
                                 </label>
                           
                                 {{-- <p>
                                    {{ $post->excerpt }}
                                 </p> --}}
                              </div>
                              <div class="card-text text-end p-2" style="bottom:0;right:0;position:absolute">
                                 <h6 style="font-size:9px;font-weight:100">{{ $post->created_at->diffForHumans() }}</h6>
                              </div>
                              {{-- <a href="/news_kamera/{{ $post->slug }}" class="btn btn-outline-primary icon-link">Read More 
                                 <span class="bi">&rarr;</span> 
                              </a> --}}
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
         </div>
     
         <div class="col-md-4 p-0">
            <div class="col-md  sidebar px-4">
               <h5 class="py-2">Cari Artikel</h5>
               <div class="row">
                  <div class="col-md">
                     <form action="/news" >
                        @if(request('category'))
                           <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if(request('author'))
                           <input type="hidden" name="author" value="{{ request('author') }}">
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
                           <img class="rounded-circle " width="100%" src="image/pf.jpg" alt="" style="border:1px solid blue">
                        </div>
                        <div class="about text-start ">
                           <div><label class=""  for="" style="font-size: 16px">Lukman Budiman</label></div>
                           <a href="" class="text-decoration-none text-black " style="font-size: 14px"> Kunjungi Profil </a>
      
                        </div>
                     </div>
                     <div class="row row-cols-2 pb-3 px-3">
   
                        <div class="avatar  d-flex align-items-center ">
                           <img class="rounded-circle " width="100%" src="image/RG.gif" alt="" style="border:1px solid blue">
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
                        <input type="email" value="gmail@lukman.com" disabled class="form-control"> 
                     </div>
                     <div class="py-2">
                        <label for="">Instagram</label>
                        <a href="" class="text-decoration-none"><div >@elbiz17</div></a>
                     </div>
                  </div>
               </div>
               {{-- <div class="row">
                  <h5>All Categories</h5>
                  @foreach ($categories as $category)
                  <ul>
                     <li class="">
                        <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                     </li>
                  </ul>
                  @endforeach
               </div> --}}
            </div>
         </div>
      </div>
      
   </div>

   {{-- <div class="container">
      <div class="sidebar">
         <div class="col-md-3">
            <input type="search" name="" id="" value="Search..." class="form-control">
            <div>
               <h4>About Me</h4>
   
            </div>
         </div>
      </div>
   </div> --}}
</main>


@include('partials/footer')



@endsection