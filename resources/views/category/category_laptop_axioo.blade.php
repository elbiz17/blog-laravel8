@extends('layouts.main')

@section('konten')


<main class="main py-5 " style="margin-top: 120px" >

   <div class="container-md ">
      <div class="py-3 px-3">
         <h4 class="display-8">Kategori : {{ $category }}</h4>
      </div>
      <div class="row mx-auto">
         <div class="col-md-8">
            <div class="row row-cols-2 ">
               @foreach($laptops as $laptop)
               <div class="col-md-3 news py-2">
                  <a href="/axioo_1/{{ $laptop->slug }}" class="text-decoration-none text-black">
                     <div class="image">
                        <img src="/image/laptop/axioo/1.png" alt="" >
                     </div>
                     <div class="card-body">
                        <div class="py-2 text-center">
                           <h5 style="font-weight:800;font-size:20px">{{ $laptop->title }}</h5>
                        </div>
                     </div>
                  </a>
               </div>
               @endforeach
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
                           <img class="rounded-circle " width="100%" src="/image/RG.gif" alt="" style="border:1px solid blue">
                        </div>
                        <div class=" about text-start ">
                           <div><label class="" style="font-size: 16px" for="">InfoTech</label></div>
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



@include('partials.footer')


@endsection