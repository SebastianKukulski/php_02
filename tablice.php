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
<pre>
<?php
$parzyste = range(0, 12, 2);
print_r($parzyste);


$dziesiatki = range(-10, 100, 10);
print_r($dziesiatki);


$polowki = range(-5.5, 5.5, 0.5);
print_r($polowki);


$litery_od_em = range('m', 'u',);
print_r($litery_od_em);


$litery_wstecz = range('X', 'M');
print_r($litery_wstecz);
?>
</pre>
    <?php
    $tablica = range(0, 10);

    shuffle($tablica);
    ?>
<table style="background-color: aliceblue" ;>
<tr>
    <?php
    foreach ($tablica as $tablic) {
        echo '<td style="border: 1px solid dodgerblue;padding: 10px;text-aligncenter'
            . $tablic . '</td>';


    }
    ?>

</tr>
</table>
    <?php

    $filmy = array(
        "Skazani na Shawshank" => "dramat"
        "Nietykalni" => "biograficzny",
        "Władca Pierścieni: Powrót króla" => "fantasy",
        "Pulp fiction"  => "gangsterski",
        'Siedem' => 'kryminał'
        'Podziemny krąg' => 'thriller'
        'Django' => 'westerm'
        'Król lew'  => 'animacja'
    );
     print_r($filmy)
    ?>
</body>
</html>

