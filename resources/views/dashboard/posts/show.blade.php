@extends('dashboard.layouts.main')


@section('konten')

<div class="container">
    <div class="row">
       <div class="col-lg-8 my-4">
          <div class="card-body  px-2 " >
             <div class="card-header bg-white ">
                <h1 class="py-2">{{ $post->title }}</h1>
                <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-return-left"></i> Back to all my post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn  btn-warning" data-toggle="tooltip" title="Edit"><i class="bi bi-pencil-square"></i></a>
               
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger border-0" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure ?')"><i class="bi bi-trash"></i></button>
                  {{-- <a href="" class="badge bg-danger" data-toggle="tooltip" title="Delete"><i class="bi bi-trash"></i></a> --}}

              </form>

             </div>
             <div class="card-body py-3">
                {{-- <p style="text-align: justify">Tablet HUAWEI MatePad Diluncurkan 12 April 2022, Tawarkan Pengalaman Komputasi Setara Laptop - Semakin dinamisnya kehidupan modern saat ini mendorong banyak orang untuk lebih tangkas dalam beraktivitas di mana saja dan kapan saja. Oleh karenanya, dibutuhkan lebih dari sekadar perangkat yang mampu mengakomodir berbagai skenario secara efisien, namun juga nyaman dan ergonomis untuk dibawa ke mana saja. Tablet menjadi jawaban terbaik untuk kebutuhan tersebut, di mana tablet kini mampu menjadi pengganti laptop.
    
                   Menyempurnakan fungsinya, HUAWEI MatePad sebagai tablet generasi terbaru yang fungsional dan nyaman untuk menunjang produktivitas. Tablet ini ditenagai oleh sistem operasi HarmonyOS serta berbagai kemampuan dan fitur layaknya laptop yang kian melengkapi fleksibilitas komputasi pada integrasi Smart Office Huawei, termasuk dukungan akan keyboard dan pen yang bisa didapat dalam paket pembelian semasa Pre-Order. Tablet ini akan memasuki pasar Indonesia pada 12 April 2022 mendatang.
                </p> --}}
                <div class="text-center">
                  @if ($post->image)
                  <div style="max-height:350px;overflow:hidden">
                     <img src="{{ asset('storage/' . $post->image) }}" alt="" style="width: 100%">
                  </div>
                  @else
                     <img src="https://source.unsplash.com/random/450x200/?{{ $post->category->name }}" alt="" width="100%">
                      
                  @endif
                </div>
                <p class="py-2">
                     {!! $post->body !!}
                </p>

                <a href="/#showKonten" class="btn btn-primary">Back to dashboard</a>
             </div>
          </div>
       </div>
    
    </div>

 </div>


@endsection