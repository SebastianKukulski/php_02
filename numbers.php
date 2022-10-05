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


Echo "Stała PHP_INT_MAX ma wartość";
Echo PHP_INT_MAX;
Echo "<br>";

Echo "Stała PHP_INT_INT ma wartość" ;
Echo PHP_INT_MIN;
Echo "<br>";

Echo "Stała PHP_INT_SIZE ma wartość";
Echo PHP_INT_SIZE;
Echo "<br>";

Echo "Stała PHP_FLOAT_MAX ma wartość";
Echo PHP_FLOAT_MIN;
Echo "<br>";

Echo "Stała PHP_INT_MIN ma wartość" ;
Echo PHP_INT_MIN;
Echo "<br>";

Echo "Stała PHP_FLOAT_DIG ma wartość" ;
Echo PHP_FLOAT_DIG;
Echo "<br>";

Echo "Stała PHP_FLOAT_EPSILON ma wartość";
Echo PHP_FLOAT_EPSILON;
Echo "<br>";

$g = 5;
$y = 15;
Echo "Wynik dodawania 5 i 15  wynosi ";
Echo $g+$y;
Echo "<br>";

Echo "Wynik odejmowania 5 i 15  wynosi ";
Echo $g-$y;
Echo "<br>";

Echo "Wynik mnożenia 5 i 15  wynosi ";
Echo $g*$y;
Echo "<br>";

Echo "Wynik dzielenia 5 i 15  wynosi ";
Echo $g/$y;
Echo "<br>";

$t = 4;
$k = 35;
Echo "Pole prostokąta o bokach długości 4 i 35 wynosi ";
Echo $t*$k;
Echo "j<sup>2</sup>";
Echo "<br>";

Echo "Obwód prostokąta o bokach długości 4 i 35 wynosi ";
Echo 2*$t+2*$k;
Echo "<br>";



?>
<ol style="list-style: decimal-leading-zero">
    <li><a href="index.php">Powrót do strony głównej</a></li>
    <li><a href="plan_lekcji.php">Plan lekcji</a></li>
    <li><a href="syntax.php">Funkcje</a></li>
    <li><a href="variables.php">Variables</a></li>
    <li><a href="strings.php">Strings</a></li>
</ol>
</body>
</html>
