<?php 
$jml=1;

function bintang($n){
    // $n=$_POST["jml"];
    // echo $n;
    echo "</br>";
    for($i = 0;$i<$n;$i++){
        for($space=0;$space<($n-$i-1);$space++){
            echo " &nbsp";
        }
        for ($star=0;$star<$i+1;$star++){
            echo "* ";
        }
        echo "</br>";
    }
}

function prima($n){
    echo "</br>";
    for($i = 2;$i<$n*2;$i++){
        if ($i == 2 || $i%2 != 0){
            echo " $i";
        }    
    }
    echo"</br>";
}
echo "1. Bintang Segitiga :</br>";

bintang(5);
bintang(2);
echo "</br>";

echo "2. Bilangan Prima :</br>";
prima(3);
prima(10);

?>
<!-- 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>1. bintang</h1>
        <form method="post" action="<?php bintang(); ?>">
            <input type="text" value="<?= $jml; ?>"></input>
            <input type="submit" value="Submit">
        </form>
    </body>
</html> -->