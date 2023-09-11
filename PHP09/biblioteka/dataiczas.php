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
<h3>Aktualna godzina</h3>
<?php
echo date('G:i:s');
?>
<h3>Osiem godzin później</h3>
<?php
echo date('G:i:s', time() +28800);
?>
<br></br>
<p>Rozpoczęcie tego roku szkolnego odbyło sie w
    <?=date('l',mktime(0,0,0,9,1,2022,)) ?>
    i był to <?=date('z',mktime(0,0,0,9,1,2022,)) ?> dzień roku</p>
<p> Najbliższy Sylewster odbędzie się w
    <?=date('N',strtotime('31.12.2023'))?>
    dniu tygodnia</p>
</body>

<?php
$miesiac = array(1 => 'styczeń', 'luty', 'marzec','kwiecień','maj','czerwiec','lipiec','sierpień','wrzesień','październik','listopad','grudzień');
print_r($miesiac);
$dzien= array(1 => 'poniedziałek','wtorek','środa','czwartek','piątek','sobota','niedziela');
print_r($dzien);
$d= strtotime('20-09-2005');
?>
<p>urodziłem się we
    <?=date('N', $d) ==2


    ?>
</html>