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
$a=12;
$d=13;
$e=13.52;
$b=12.52;
$c="59.85"+100;
$f=5;
$g=15;
$h=4;
$i=35;
var_dump(is_int($a)) ;
var_dump(is_int($d));
var_dump(is_float($e));
var_dump(is_float($b));
var_dump(is_numeric($c));
echo '<br>';
echo PHP_INT_MAX .'<br>';
echo PHP_INT_MIN .'<br>';
echo PHP_INT_SIZE .'<br>';
echo PHP_FLOAT_MAX .'<br>';
echo PHP_FLOAT_MIN .'<br>';
echo PHP_FLOAT_DIG .'<br>';
echo PHP_FLOAT_EPSILON .'<br>';
echo "Zmienna $a ma wartość $a a funkcja is_int zwraca dla niej wartość";
var_dump(is_int($a));
echo '<br>';
echo "Zmienna $d ma wartość $d a funkcja is_int zwraca dla niej wartość ";
var_dump(is_int($d)) ;
echo '<br>';
echo "Zmienna $b ma wartość $b a funkcja is_float zwraca dla niej wartość";
var_dump(is_int($b));
echo '<br>';
echo "Zmienna $e ma wartość $e a funkcja is_float zwraca dla niej wartość ";
var_dump(is_int($e));
echo '<br>';
echo "Stała PHP_INT_MAX ma wartość".PHP_INT_MAX .'<br>';
echo '<br>';
echo "Stała PHP_INT_MIN ma wartość". PHP_INT_MIN .'<br>';
echo '<br>';
echo "Stała PHP_INT_SIZE ma wartość". PHP_INT_SIZE .'<br>';
echo '<br>';
echo "Stała PHP_FLOAT_MAX ma wartość". PHP_FLOAT_MAX .'<br>';
echo '<br>';
echo "Stała PHP_FLOAT_MIN ma wartość". PHP_FLOAT_MIN .'<br>';
echo '<br>';
echo "Stała PHP_FLOAT_DIG" . PHP_FLOAT_DIG .'<br>';
echo '<br>';
echo "Stała PHP_FLOAT_EPILON". PHP_FLOAT_EPSILON .'<br>';
echo '<br>';
echo "wynik dodawania $f i $g wynosi $f+$g";
echo '<br>';
echo "wynik odejmowania $g i $f wynosi". ($g-$f);
echo '<br>';
echo "wynik mnożenia $f i $g wynosi". ($f*$g);
echo '<br>';
echo "wynik dzielenia $f i $g wynosi". ($f/$g);
echo '<br>';
echo "wynik reszty z dzielenia $f i $g wynosi". ($f%$g);
echo '<br>';
echo "obwód prostokąta o bokach $h i $i wynosi". (2*$h+2*$i);
echo '<br>';
echo "obwód prostokąta o bokach $h i $i wynosi". ($h*$i) ,"j<sup>2</sup>";


?>
<p style="background-color:darkblue;color: aliceblue"><strong>Wartość fucknkcji abs wynosi  <?=var_dump(abs(-2));?>    </p>
<p style="background-color:darkblue;color: aliceblue">strong>Wartość funkcji min wynosi <?=min(0,150,30,20,-8,-200)?> a max <?=max(30,20,-8,-200)?> </p>
<p style="background-color:darkblue;color: aliceblue"><strong>Wartość Pi wynosi <?=pi()?></p>
<p style="background-color:darkblue;color: aliceblue"><strong>Wartość round wynosi <?=round(3.4)?></p>



</body>
</html>