@extends('layout')
@section('konten')
<?php if (Session::get('user') == ""){?>
<div class="row justify-content-center mt-5">
    <div class="col-md-auto">
        <form action="{{ url('/login_usr') }}" method="post">
            <h4><?php if (Session::get('Success') != ""){
                echo Session::get('success');
            }?></h4>
            @csrf
            <h3>Login</h3>
            <label for="username">username :</label>
            <input class="form-control" type="text" id="username" name="username">
            <br>
            <label for="password">password :</label>
            <input class="form-control" type="text" id="password" name="password">
            <br>
            <button class="btn btn-primary w-100" type="submit">Login</button>
    </form>
    </div>
</div>

<?php } 
else{
    echo "<p>anda sudah login, silahkan <a href='".url('/')."'>kembali</a></p>";
}?>
@endsection