<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\bootstrap.css">
</head>
<body>

  <nav class="navbar-expand-md navbar-light bg-white shadow-sm">
    <ul class="nav bg-warning ms-auto">
      <li class="nav-item">
        <a class="nav-link active text-primary  ml-2" href="{{ url('/') }}"><b>Homepage</b>
            </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-primary"> 
          @if (Session::get('user') != "")
            <p>Hi {{Session::get('user');}} </p>
          @else
            <p>Hi Anonim</p> 
          @endif
            
      </li>
    
      @if(Session::get('user') != "")
        <li class="nav-item">
          <a class="nav-link text-danger" href="{{ url("/logout_usr"); }}">Log out</a>
        </li>
      @else
      <li>
        <a class="nav-brand" href="{{ url('/login') }}">login</a>
      </li>
      <li>
        <a class="nav-brand" href="{{ url('/register') }}">Buat akun</a>
      </li> 
      @endif
    
    </ul>

  </nav>



@yield("konten")

</body>
</html>