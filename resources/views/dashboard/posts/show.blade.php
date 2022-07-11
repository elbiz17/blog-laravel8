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
              </form>

             </div>
             <div class="card-body py-3">
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