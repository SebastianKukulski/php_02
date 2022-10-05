<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$x = 7312;
Echo "Zmienna", ".$x.", "ma wartość $x a funkcja is_int zwraca dla niej wartość ";
var_dump(is_int($x));
Echo "<br>";
Echo "Zmienna ".$x." ma wartość $x a funkcja is_float zwraca dla niej wartość ";
var_dump(is_float($x));
Echo "<br>";
$y = 2112;
Echo "Zmienna ".$y." ma wartość $y a funkcja is_int zwraca dla niej wartość ";
var_dump(is_int($y));
Echo "<br>";
Echo "Zmienna ".$y." ma wartość $y a funkcja is_float zwraca dla niej wartość ";
var_dump(is_float($y));
Echo "<br>";
Echo "<br>";               /*Funkcje typu integrer/*/
$x1 = 12.37;
Echo "Zmienna ".$x1." ma wartość $x1 a funkcja is_int zwraca dla niej wartość ";
var_dump(is_int($x1));
Echo "<br>";
Echo "Zmienna ".$x1." ma wartość $x1 a funkcja is_float zwraca dla niej wartość ";
var_dump(is_float($x1));
Echo "<br>";
Echo "<br>";
$y1 = 81293.321;
Echo "Zmienna ".$y1." ma wartość $x a funkcja is_int zwraca dla niej wartość ";
var_dump(is_int($y1));
Echo "<br>";
Echo "Zmienna ".$y1." ma wartość $x a funkcja is_float zwraca dla niej wartość ";
var_dump(is_float($y1));
Echo "<br>";
Echo "<br>";               /*Funkcje typu Float/*/

$n1 = 59.85 + 100;
var_dump(is_numeric($n1));
Echo "<br>";


Echo PHP_INT_MAX;
Echo "<br>";

Echo PHP_INT_MIN;
Echo "<br>";

Echo PHP_INT_SIZE;
Echo "<br>";

Echo PHP_FLOAT_MAX;
Echo "<br>";

Echo PHP_INT_MIN;
Echo "<br>";

Echo PHP_FLOAT_DIG;
Echo "<br>";

Echo PHP_FLOAT_EPSILON;
Echo "<br>";
?>
<ol style="list-style: decimal-leading-zero">
    <li><a href="plan_lekcji.php">Plan lekcji</a></li>
    <li><a href="syntax.php">Funkcje</a></li>
    <li><a href="variables.php">Zmienne</a></li>
    <li><a href="strings.php">Zmienne</a></li>
</ol>
</body>
</html>
