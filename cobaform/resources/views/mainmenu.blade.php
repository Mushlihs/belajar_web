@extends('layout')
@section('konten')
    <div class="row justify-content-center mt-5">
    <div class="col-md-auto">
        <h1>Main Menu</h1>
        <a class="btn btn-primary w-100 mb-3 mt-5" href="{{ url('/login') }}">login</a>

        <a class="btn btn-warning w-100" href="{{ url('/register') }}">Buat akun</a>
    </div>
    </div>
@endsection