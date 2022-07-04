@extends('dashboard.layouts.main')

@section('konten')

<section class="col-md">
  <div class="container">
      <div class="row justify-content-center">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2 fw-bold p-2">Welcome to dashboard, {{ auth()->user()->name }}</h1>
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




<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

</main>



{{-- @include('partials.footer') --}}


@endsection