@extends('dashboard.layouts.main')


@section('konten')

<section class="col-md">
    <div class="container">
        <div class="row justify-content-center">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 fw-bold p-2">Edit Post</h1>
                
              </div>
        </div>
    </div>
</section>

<main>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mb-5">

                <form method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data"> 
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="title" class="form-label">Judul</label>
                      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $post->title) }}" required autofocus>
                      @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="slug" class="form-label">Slug</label>
                      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $post->slug) }}" required>
                      @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="category" class="form-label">Kategori</label>
                      <select class="form-select"  name="category_id">
                          @foreach ($categories as $category)
                            @if(old('category_id', $post->category_id) == $category->id)
                              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>   
                            @else
                              <option value="{{ $category->id }}">{{ $category->name }}</option>   
                            @endif
                          @endforeach               
                      </select>
                    </div>      
                    <div class="mb-3">
                      <label for="image" class="form-label">Post Image</label>
                      <input type="hidden" name="oldImage" value="{{ $post->image }}">
                      @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid pb-3 d-block" style="max-height: 150px; max-width:320px" alt="{{ $post->image }}">
                      @else
                        <img class="img-preview img-fluid pb-3 " style="max-height: 150px; max-width:320px">
                          
                      @endif
                      <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" value="{{ old('image', $post->image) }}" required onchange="previewImage()">
                      @error('image')
                      <div class="inavlid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>         
                    <div class="mb-3">
                      <label for="body" class="form-label">Body</label>
    
                        <input id="body" type="hidden" name="body" class="@error('body') is-invalid @enderror" value="{{ old('body', $post->body) }}">
                        <trix-editor input="body"></trix-editor>
                   
                        @error('body')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>            
                    <button type="submit" class="btn btn-primary">Update Post</button>
                </form>

            </div>
        </div>
    </div>
    
</main>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });

    function previewImage(){
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';
 
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      }
    }
</script>
@endsection