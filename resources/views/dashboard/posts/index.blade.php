@extends('dashboard.layouts.main')

@section('konten')

<section class="col-md">
    <div class="container">
        <div class="row justify-content-center">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 fw-bold p-2">My Post</h1>
                {{-- <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary ">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                  </div>
                  <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                  </button>
                </div> --}}
              </div>
        </div>
    </div>
</section>


<main class="main ">
    <div class="table-responsive-sm col-lg-8">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post +</a>
        
        @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <table class="table">
            <thead class="table-dark">
                <th>No</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                        <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info" data-toggle="tooltip" title="Detail"><i class="bi bi-eye"></i></a>
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning" data-toggle="tooltip" title="Edit"><i class="bi bi-pencil-square"></i></a>
                        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="badge bg-danger border-0" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure ?')"><i class="bi bi-trash"></i></button>
                            {{-- <a href="" class="badge bg-danger" data-toggle="tooltip" title="Delete"><i class="bi bi-trash"></i></a> --}}

                        </form>
                    
                    </td>
                </tr>
                @endforeach
    

                
            </tbody>
        </table>
    </div>
</main>



{{-- @include('partials.footer') --}}


@endsection