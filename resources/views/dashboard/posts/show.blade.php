@extends('dashboard.layouts.main')


@section('konten')

<div class="container">
    <div class="row">
       <div class="col-lg-8 my-4">
          <div class="card-body  px-2 " >
             <div class="card-header bg-white ">
                <h1 class="py-2">{{ $post->title }}</h1>
                <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-return-left"></i> Back to all my post</a>
                <a href="" class="btn btn-warning" data-toggle="tooltip" title="Edit"><i class="bi bi-pencil-square"></i></a>
                <a href="" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="bi bi-trash"></i></a>


             </div>
             <div class="card-body py-3">
                {{-- <p style="text-align: justify">Tablet HUAWEI MatePad Diluncurkan 12 April 2022, Tawarkan Pengalaman Komputasi Setara Laptop - Semakin dinamisnya kehidupan modern saat ini mendorong banyak orang untuk lebih tangkas dalam beraktivitas di mana saja dan kapan saja. Oleh karenanya, dibutuhkan lebih dari sekadar perangkat yang mampu mengakomodir berbagai skenario secara efisien, namun juga nyaman dan ergonomis untuk dibawa ke mana saja. Tablet menjadi jawaban terbaik untuk kebutuhan tersebut, di mana tablet kini mampu menjadi pengganti laptop.
    
                   Menyempurnakan fungsinya, HUAWEI MatePad sebagai tablet generasi terbaru yang fungsional dan nyaman untuk menunjang produktivitas. Tablet ini ditenagai oleh sistem operasi HarmonyOS serta berbagai kemampuan dan fitur layaknya laptop yang kian melengkapi fleksibilitas komputasi pada integrasi Smart Office Huawei, termasuk dukungan akan keyboard dan pen yang bisa didapat dalam paket pembelian semasa Pre-Order. Tablet ini akan memasuki pasar Indonesia pada 12 April 2022 mendatang.
                </p> --}}
                <div class="text-center">
                   <img src="/image/smartphone/xiaomi/xiaomi-redmi-note-11.png" alt="" width="100%">
                </div>
                <p class="py-2">
                   "Tak hanya sekedar perangkat  mobile,  dengan interaksi peripheral, pengguna dapat memanfaatkan HUAWEI MatePad sebagai PC yang portable. Kolaborasi multi-layar dan lintas perangkat antara tablet dan PC juga menambah nilai tablet ini sebagai perangkat produktivitas yang mumpuni," kata Patrick Ru, Country Head of Huawei CBG Indonesia.
                   HUAWEI MatePad juga membawa kelebihan di banyak aspek, mulai dari desain minimalis yang menggabungkan ergonomi dan estetika teknologi, layar HUAWEI FullView Display 10,4 inci beresolusi 2K untuk kualitas gambar lebih baik pada berbagai konten, hingga setting suara yang mengagumkan berkat dukungan sistem audio berkualitas dari Harman Kardon.
                </p>
             </div>
          </div>
       </div>
    
    </div>

 </div>


@endsection