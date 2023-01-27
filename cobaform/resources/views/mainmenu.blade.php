@extends('layout')
@section('konten')
    <div class="row justify-content-center mt-5">
    <div class="col-md-auto">
        <h1>Main Menu</h1>
       @auth
       <p>sudah login</p>
       @endauth
        <p> {{Auth::user(); }}</p>
    </div>
    </div>
@endsection