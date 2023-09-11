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
<pre>
<?php
$owoce = array_fill(8, 5, 'mango');
print_r($owoce);
?>
</pre>
<pre>
<?php
$parzyste = range(0,12,2);
print_r($parzyste);
?>
</pre>
<pre>
<?php
$dziesiatki = range(-10,100,10);
print_r($dziesiatki);
?>
</pre>
<pre>
<?php
$polowki = range (-5.5,5.5,0.5);
print_r($polowki);
?>
</pre>
<pre>
<?php
$litery_od_em = range('m','u',);
print_r($litery_od_em);
?>
</pre>
<pre>
<?php
$litery_wstecz = range('X','M');
print_r($litery_wstecz);
?>
<?php
$przedmiot = array('Tworzenie', 'stron', 'aplikacji', 'internetowych');
list($n1, $n2, $n3, $n4) = $przedmiot;
echo"$n1 $n2 i $n3 $n4.";
?>
</pre>
<br/>

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
<pre>
<?php
$owoce = array_fill(8, 5, 'mango');
print_r($owoce);
?>
</pre>
<pre>
<?php
$parzyste = range(0,12,2);
print_r($parzyste);
?>
</pre>
<pre>
<?php
$dziesiatki = range(-10,100,10);
print_r($dziesiatki);
?>
</pre>
<pre>
<?php
$polowki = range (-5.5,5.5,0.5);
print_r($polowki);
?>
</pre>
<pre>
<?php
$litery_od_em = range('m','u',);
print_r($litery_od_em);
?>
</pre>
<pre>
<?php
$litery_wstecz = range('X','M');
print_r($litery_wstecz);
?>
<?php
$przedmiot = array('Tworzenie', 'stron', 'aplikacji', 'internetowych');
list($n1, $n2, $n3, $n4) = $przedmiot;
echo"$n1 $n2 i $n3 $n4.";
?>
</pre>
<br/>

<?php
/*
$tablica = range(0,10);
shuffle($tablica);
?>
<table style="background-color: aliceblue"; border-collapse: collpase; width:100%;>
    <tr>

<?php
foreach ($tablica as $element) {
    echo '<td style="border: 1px solid dogerblue; padding: 10px; text-align:center;">
.$element.'<td>';
}
*/
Array
{
    Skazani na sawshank =>
}
?>
</tr>
</table>
<style>
    <table {
        border-collapse: collapse;
    }
    th,td {
        border:1px dotted black;
        padding: 3px;
    }
</style>
<table>
    <caption>Sortowanie rosnąco według wartości</caption>
    <tr>
        <th>klucz</th>
        <th>wartość</th>
    </tr>
    <?php
    asort($movies);
    foreach ($movies as $key => $value){
        echo '<td><td>'.$key.'</td><tr>'.$value.'</td></tr>';
    }
    ?>
</table>
</body>
</html>