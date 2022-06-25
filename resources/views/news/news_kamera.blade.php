@extends('layouts.main')

@section('konten')

<main class="py-5" style="margin-top: 120px">
   <div class="container">
      <div class="row">
         <div class="col-md">
            <div class="card-body bg-white border shadow" style="border-radius: 10px">
               <div class="card-header bg-white">
                  <h5>{{ $post->title }}</h5>
                  <p>by : {{ $post->author->name }} in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </p>
               </div>
               <div class="card-body ">
                  <div class="text-center">
                     <img class="img-fluid" src="https://source.unsplash.com/random/1200x600/?{{ $post->category->name }}" alt="{{ $post->category->name }}" alt="" width="100%">
                  </div>
                  {{-- <p style="text-align: justify"> --}}
                     <article class="my-3" style="text-align:justify">
                        {!! $post->body !!}
                     </article>
                  {{-- </p> --}}
             
               </div>
            </div>
         </div>
         <div class="col-md-4 ">
            <div class="col-md  sidebar px-4">
               <h5 class="py-2">Cari Artikel</h5>
               <input type="search" name="" id="" class="form-control" placeholder="Search...">
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
                           <img class="rounded-circle " width="100%" src="/image/RG.gif" alt="" style="font-size:16px;border:1px solid blue">
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




@endsection

