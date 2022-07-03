@extends('dashboard.layouts.main')

@section('konten')

<section class="vh-100 d-flex">
    <div class="container">
        <div class="row justify-content-center">
            <h1>Welcome to the dashboard,   {{ auth()->user()->name }}</h1>
        </div>
    </div>
</section>




@endsection