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
<ul class="nav justify-content-center bg-warning">
  <li class="nav-item">
    <a class="nav-link active text-primary  ml-2" href="{{ url('/') }}"><b>Homepage</b>
        </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-primary"> hai  
      <?php if(Session::get('user') != ""){
        echo "Hi ".Session::get('user');

        }
        else{
          echo "Hi Anonim";
        }?></a>
  </li>
  <li></li>
  <?php if(Session::get('user') != ""){
        echo '<li class="nav-item">
        <a class="nav-link text-danger" href="'.url("/logout_usr").'">Log out</a>
      </li>';
    
        }
        ?>
</ul>

@yield("konten")

</body>
</html>