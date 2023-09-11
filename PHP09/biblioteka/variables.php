<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h3{
            color: red;
        }
        p{
            color: #FF6347;
        }
        div{
            color:green;
            text-decoration: double underline;
        }

    </style>
</head>
<body>
<?php
$a="pozdro";
$b=12;
$c=12.1;
$d=false;
$e=97;
$f=3.14;
$g='PHP';
echo"<br>$a</br>";
var_dump($a);
echo"<br>$b</br>";
var_dump($b);
echo"<br>$c</br>";
var_dump($c);
echo"<br>$d</br>";
var_dump($d);
;

?>
<h3><?=$e?> jest liczbą pierwsza </h3>
<p>Liczba Pi zaokrąglona do dwóch miejsc po przecinku <?=$f?></p>
<div><?=$g?> to język skryptowy wykorzystywany na stronie serwera</div>
</body>
</html>