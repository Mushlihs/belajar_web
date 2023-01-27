@extends("layout")
@section("konten")
<div class="row justify-content-center mt-5">
    <div class="col-md-auto">
        <form action="{{ url('/simpan_data') }}" method="post">
            @csrf
            <h3>Registrasi</h3>
            <label for="username">username :</label>
            <input class="form-control" type="text"name="username">
            <br>
            <label for="password">password :</label>
            <input class="form-control" type="text" name="password">
            <br>
            <label for="email">email :</label>
            <input class="form-control" type="text" name="email">
            <br>
            <button class="btn btn-primary w-100" type="submit">Register</button>
    </form>
    </div>
</div>
@endsection
