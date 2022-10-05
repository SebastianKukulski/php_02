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
$string="Kukulski";
echo "<br><br>$string<br>";
var_dump($string);

$liczba=18;
echo "<br><br>$liczba<br>";
var_dump($liczba);

$float=18.5;
echo "<br><br>$float<br>";
var_dump($float);

$bool=true;
echo "<br><br>$bool<br>";
var_dump($bool);
$a = 97;
$b = 3.14;
$c = "PHP";
?>
<h3 style="color: red"><?= $a ?> jest liczbą pierwszą</h3>
<p style="color: #FF6347"><?= $b ?> Liczba Pi zaokrąglona do dwóch miejsc po przecinku</p>
<div style="text-decoration: underline double;"><?= $c ?> to język skryptowy wykonywany po stronie</div>
<li><a href="index.php">Powrót do strony głównej</a></li>
<ol style="list-style: decimal-leading-zero">
    <li><a href="index.php">Powrót do strony głównej</a></li>
    <li><a href="plan_lekcji.php">Plan lekcji</a></li>
    <li><a href="syntax.php">Funkcje</a></li>
    <li><a href="variables.php">Variables</a></li>
    <li><a href="strings.php">Strings</a></li>
</ol>
</body>
</html>