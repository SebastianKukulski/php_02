<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        ol{
            list-style-type: upper-roman;
            margin-left: 40px;
        }
    td{
        border:1px  navy dotted;
        width: 200px;
        height: 50px;
        font-size: x-large;
        padding: 15px;
        border-collapse: collapse;
    background-color: lightgrey;
}
    </style>
</head>
<body >

<div>
    <ol>
<?php
/*
for ($n = 1; $n <= 100; $n++) {
    echo "<li>To jest $n element listy</li><br>";
}
*/

?>
    </ol>
</div>
<table>
<?php
$z="Witaj swiecie";
$znaki=str_split($z);
foreach ($znaki AS $znak){
 echo "<td style=''>$znak</td>";
 }



    ?>
</div>
</table>
<table>
    <?php
    $i = 1;
    while ($i <= 5) {
        echo "<tr><td>To jest wiersz numer $i</tr></td>";
        $i++;

    }
    ?>
</table>
<table>
    <?php
    $k = 1;
    do {
        echo "<td style='background-color: greenyellow;
border-collapse: collapse;

'>To jest wiersz kolumna $k</td>";
    $k++;
    }   while ($k <= 5);

    ?>
</table>




</body>
</html>