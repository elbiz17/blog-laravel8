@extends('layouts.main')

@section('konten')


   <section class="hero d-flex align-items-center justify-content-center ">
      <div class="container">
         {{-- flex-column-reverse flex-md-row --}}
         <div class="row hero-bg justify-content-center">
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
               <div class="hero-img">
                  <img src="/image/model/model.png" alt=""  >

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
             
               <button class="btn btn-primary fs-6 icon-link">Read More 
                  <span class="bi">&rArr;</span> 
               </button>
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
      <div class="container py-5">
         <div class="row">
            
               <div class="text-center  mx-auto" style="z-index :1;background-color:#ffffff;width:220px">
                  <h4 class="text-center" style="z-index: 1;">Berita Teknologi</h4>
               </div>
               <hr class="garis">
               {{-- <div class="garis py-1 bg-light"></div> --}}
               {{-- <div class="p-3">
                  <h6>{{ $title }}</h6>
               </div> --}}
            @foreach ($posts as $post)
            <div class="flex berita col-md-3 p-1 ">
               <div class="contents">
                  <div class="image">
                     <a class="text-decoration-none" href="/news_kamera/{{ $post->slug }}">
                        <img src="/image/ipad.jpeg" alt="">
                     </a>
                  </div>
                  <div class="card-body">
                     <div class="py-1" style="height:40px">
                        <h5><a class="text-decoration-none" href="/news_kamera/{{ $post->slug }}">{{ $post->title }}</a></h5>
                     </div>
                     <div class="py-2">
                        <div class="card-text">
                           <label style="font-size:0.8em;margin-bottom:5px">By : <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></label>
                           <p>{{ $post->excerpt }}</p>
                        </div>
                     </div>
                     {{-- <a  href="/news_kamera/{{ $post->slug }}" class="text-decoration-none">
                        <button class="btn btn-outline-primary icon-link">Read More 
                           <span class="bi">&rarr;</span> 
                        </button>
                     </a> --}}
             
                     
                     <div class="card-text text-end p-2" style="bottom:0;right:0;position:absolute">
                        <h6 style="font-size:11px;font-weight:200">update 2 mins ago</h6>
                     </div>
                  </div>
            </div>
            </div>
            @endforeach
            {{-- @foreach ($laptops as $laptop)
            <div class="flex berita col-md-3 p-1 ">
               <div class="contents">
                  <div class=" image ">
                     <a class="text-decoration-none" href="/acer_1/{{ $laptop->slug }}">
                        <img class="text-center" src="/image/1.png"  alt="">   
                     </a>
                  </div>
                  <div class="card-body">
                     <div>
                        <h5><a class="text-decoration-none" href="/acer_1/{{ $laptop->slug }}">{{ $laptop->title }}</a></h5>
                     </div>
                     <div class="py-1">
                        <label  style="font-size:0.8em;margin-bottom:5px">By : <a class="text-decoration-none" href="/authors/{{ $laptop->author->username }}">{{ $laptop->author->name }}</a> in <a class="text-decoration-none" href="/categories_laptop/{{ $laptop->category->slug }}">{{ $laptop->category->name }}</a></label>
                        <p>{{ $laptop->excerpt }}</p>
                     </div>
                
                  </div>
               </div>
            </div>
            @endforeach --}}
            <div class="loadMore">
               <a href="#" id="loadMore">Load More</a>
            </div>

            {{-- @foreach ($posts as $post)
                
           
            <div class="berita col-md p-3">
               <div class="card-body ">
                  <h4> <a href="news_kamera_2/{{ $post["slug"] }}"></a>{{ $post['title'] }}</h4>
                  <h6>By : {{ $post["author"] }}</h6>

                  <p>{{ $post['body'] }}</p>
                  <button class="btn btn-outline-primary icon-link">Read More 
                     <span class="bi">&rarr;</span> 
                  </button>
               </div>
               
            </div>
            @endforeach --}}
            {{-- <div class="berita col-md p-3">
               <div class="card-body ">
                  <h4>Smartphone dengan kamera 100 MP terbaik tahun 2022</h4>
                  <p>Magni perspiciatis nihil earum ea veniam possimus, quos minus modi error cupiditate ab nobis voluptatem asperiores debitis! Quia obcaecati unde corporis ab?</p>
                  <button class="btn btn-outline-primary icon-link">Read More 
                     <span class="bi">&rarr;</span> 
                  </button>
               </div>
               
            </div> --}}
            {{-- <div class="berita col-md p-3">
               <div class="card-body ">
                  <h4>Smartphone dengan kamera 100 MP terbaik tahun 2022</h4>
                  <p>Magni perspiciatis nihil earum ea veniam possimus, quos minus modi error cupiditate ab nobis voluptatem asperiores debitis! Quia obcaecati unde corporis ab?</p>
                  <button class="btn btn-outline-primary icon-link">Read More 
                     <span class="bi">&rarr;</span> 
                  </button>
               </div>
               
            </div>
            <div class="berita col-md p-3">
               <div class="card-body ">
                  <h4>Smartphone dengan kamera 100 MP terbaik tahun 2022</h4>
                  <p>Magni perspiciatis nihil earum ea veniam possimus, quos minus modi error cupiditate ab nobis voluptatem asperiores debitis! Quia obcaecati unde corporis ab?</p>
                  <button class="btn btn-outline-primary icon-link">Read More 
                     <span class="bi">&rarr;</span> 
                  </button>
               </div>
               
            </div>
            <div class="berita col-md p-3">
               <div class="card-body ">
                  <h4>Smartphone dengan kamera 100 MP terbaik tahun 2022</h4>
                  <p>Magni perspiciatis nihil earum ea veniam possimus, quos minus modi error cupiditate ab nobis voluptatem asperiores debitis! Quia obcaecati unde corporis ab?</p>
                  <button class="btn btn-outline-primary icon-link">Read More 
                     <span class="bi">&rarr;</span> 
                  </button>
               </div>
            </div>
            <div class="berita col-md p-3">
               <div class="card-body ">
                  <h4>Smartphone dengan kamera 100 MP terbaik tahun 2022</h4>
                  <p>Magni perspiciatis nihil earum ea veniam possimus, quos minus modi error cupiditate ab nobis voluptatem asperiores debitis! Quia obcaecati unde corporis ab?</p>
                  <button class="btn btn-outline-primary icon-link">Read More 
                     <span class="bi">&rarr;</span> 
                  </button>
               </div>
            </div>
            <div class="berita col-md p-3">
               <div class="card-body ">
                  <h4>Smartphone dengan kamera 100 MP terbaik tahun 2022</h4>
                  <p>Magni perspiciatis nihil earum ea veniam possimus, quos minus modi error cupiditate ab nobis voluptatem asperiores debitis! Quia obcaecati unde corporis ab?</p>
                  <button class="btn btn-outline-primary icon-link">Read More 
                     <span class="bi">&rarr;</span> 
                  </button>
               </div>
            </div>
            <div class="berita col-md p-3">
               <div class="card-body ">
                  <h4>Smartphone dengan kamera 100 MP terbaik tahun 2022</h4>
                  <p>Magni perspiciatis nihil earum ea veniam possimus, quos minus modi error cupiditate ab nobis voluptatem asperiores debitis! Quia obcaecati unde corporis ab?</p>
                  <button class="btn btn-outline-primary icon-link">Read More 
                     <span class="bi">&rarr;</span> 
                  </button>
               </div>
            </div> --}}
            {{-- <a href="#" class="py-3 px-4">Lainnya...</a> --}}
         </div>

      </div>
      {{-- <div class="container">
         <div class="row justify-content-center">
            <div class="text-center">
               <h4 class="py-4">Review</h4>
            </div>
            <div class="col-md-3 review">
               <img src="image/burung.jpg" alt="" >
               <div class="card-body caption">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo cupiditate perspiciatis reiciendis doloremque nostrum consequuntur iure assumenda exercitationem cumque dolor quo nesciunt repellendus sed, molestiae vitae beatae aperiam at perferendis?</p>
               </div>
            </div>
            <div class="col-md-3 review">
               <img src="image/burung.jpg" alt="" >
               <div class="card-body caption">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo cupiditate perspiciatis reiciendis doloremque nostrum consequuntur iure assumenda exercitationem cumque dolor quo nesciunt repellendus sed, molestiae vitae beatae aperiam at perferendis?</p>
               </div>
            </div>
            <div class="col-md-3 review">
               <img src="image/burung.jpg" alt="" >
               <div class="card-body caption">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo cupiditate perspiciatis reiciendis doloremque nostrum consequuntur iure assumenda exercitationem cumque dolor quo nesciunt repellendus sed, molestiae vitae beatae aperiam at perferendis?</p>
               </div>
            </div>
            <div class="col-md-3 review">
               <img src="image/burung.jpg" alt="" >
               <div class="card-body caption">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo cupiditate perspiciatis reiciendis doloremque nostrum consequuntur iure assumenda exercitationem cumque dolor quo nesciunt repellendus sed, molestiae vitae beatae aperiam at perferendis?</p>
               </div>
            </div>
            <div class="col-md-3 review">
               <img src="image/burung.jpg" alt="" >
               <div class="card-body caption">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo cupiditate perspiciatis reiciendis doloremque nostrum consequuntur iure assumenda exercitationem cumque dolor quo nesciunt repellendus sed, molestiae vitae beatae aperiam at perferendis?</p>
               </div>
            </div>
            <div class="col-md-3 review">
               <img src="image/burung.jpg" alt="" >
               <div class="card-body caption">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo cupiditate perspiciatis reiciendis doloremque nostrum consequuntur iure assumenda exercitationem cumque dolor quo nesciunt repellendus sed, molestiae vitae beatae aperiam at perferendis?</p>
               </div>
            </div>
         </div>
      </div> --}}
      
   </main>


   @include('partials.footer')

@endsection

