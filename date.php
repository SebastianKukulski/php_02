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
echo '<h3>Aktualna godzina</h3>';
echo '<p>' . date('G:i:s') . '</p>';

echo '<h3>Osiem godzin później</h3>';
$osiemgodzinpozniej = time() + 8 * 60 * 60;
echo '<p>' . date('H:i:s', $osiemgodzinpozniej) . '</p>';
?>

<?php
echo "Rozpoczęcie roku odbyło się w ";
echo date("l", mktime(9, 0, 0, 9, 1, 2022));
echo " i był to ";
echo date("z", mktime(9, 0, 0, 9, 1, 2022));
echo " dzień roku.";
?>
<h3>
    <?php


    $aktualnyrok = date('Y');


    $sylwester_zmiana = strtotime("31 December $aktualnyrok 23:59:59");


    $sylwester_dzientygodnia = date('N', $sylwester_zmiana);
    echo "<br>Najbliższy Sylwester odbędzie się w $sylwester_dzientygodnia. dniu tygodnia.";

    ?>
</h3>
<?php
$dni_tygodnia = array("poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota", "niedziela");
$miesiace = array("styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień");

echo "Urodziłem się we " .
    $dni_tygodnia[date("N", strtotime("1995-12-21")) - 1] . ", 22" .
    $miesiace[date("n", strtotime("1995-12-21")) - 1] . " 1995 roku.";
echo "Swoj pierwszy milion dolarów zarobię w " .
    $dni_tygodnia[date("N", strtotime("2037-05-03")) - 1] . ", 3 " .
    $miesiace[date("n", strtotime("2037-05-03")) - 1] . " 2037 roku.";
?>
