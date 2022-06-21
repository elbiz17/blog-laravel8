@extends('layouts.main')

@section('konten')


<main class="py-5" style="margin-top: 100px">
   <div class="container">
      <div class="text-center">
         <img src="image/NewLogo-2.png" alt=""  style="height: 7em;width:100%;max-width:28em">
      </div>
      <div class="row">
         <div class="col-md-8 mt-2">
            <div class="card-body shadow" style="border-radius:10px;text-align:justify">
               <h4 class="display-6 fw-bolder py-5">Selamat datang di Review Gadget</h4>
               <p>

                  <span class="fw-bold fs-4">Review Gadget</span>  adalah sebuah blog yang membahas seputar teknologi dan info menarik tentang teknologi lainnya. Jika ada kritik dan saran yang membangun blog ini kami persilahkan. Terima kasih bagi yang sudah follow blog ini.
               </p>

               <div class="py-5">
                  <h5 class="display-8">Founder</h5>
                  <ul>
                     <li>
                        <h6 class="lead">Lukman Budiman</h6>
                     </li>
             
                  </ul>
               </div>

               
            </div>

         </div>
         <div class="col-md">
            <div class="card-body bg-white shadow py-3 mt-2" style="border-radius:10px;">
               <h5>Sosial Media Lainnya</h5>
               <div class="row row-cols-4 text-center py-2">
                  <div class="col-md">
                     <a href="">
                        <i class="fa-brands fa-youtube fa-2xl text-danger"></i>
                     </a>
                  </div>
                  <div class="col-md">
                     <a href="">
                        <i class="fa-brands fa-instagram fa-2xl"></i>
                     </a>
                  </div>
                  <div class="col-md">
                     <a href="">
                        <i class="fa-brands fa-tiktok fa-2xl text-black"></i>
                     </a>
                  </div>
                  <div class="col-md">
                     <a href="">
                        <i class="fa-brands fa-twitter fa-2xl text-primary"></i>
                     </a>
                  </div>
               </div>
               <div class="row py-3">
                  <h5>Kontak</h5>
                  <div class="">
                     <label for="">Email</label>
                     <input type="email" value="review+++@gmail.com" disabled class="form-control">
                  </div>
                  <div class="">
                     <label for="">Whatsapp</label>
                     <input type="text" value="+628xxxxxxx"  class="form-control" disabled>
                  </div>
               </div>
            </div>

         </div>

      
      </div>
   </div>
</main>



@endsection