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
$losowa= rand(1,30);
$b=20;
if ($losowa%2==0)
if ($losowa >=$b)

?>

<h2 style="color: darkorchid; text-align: center"><?=$losowa  ?>   </h2>
<h4 style="color: magenta; text-align: center">Wylosowana liczba jest większa lub równa <?=$b?></h4>
<h4 style="color: navy;text-align: center;">
    <?php
    if ($losowa%2==0)
    {
        echo 'Wylosowana liczba jest parzysta';
    }
    else
    {
        echo 'Wylosowana liczba jest nieparzysta';
    }
    ?>
</h4>
<h4 style="color: deeppink; text-align: center;">
    <?php
    if ($losowa <=10)
    {
        echo 'Pierwsza dziesiątka';
    }
    elseif ($losowa <=20)
    {
        echo 'Druga dziesiątka';
    }
    else
    {
        echo 'Trzecia dziesiątka';
    }
    ?>
</h4>
<?php
$miesiac= rand(1,15);
$a=10;
$b=20;
$c=30;

echo "<h1 style=' border-bottom-style: dotted; border-top-style: dotted;border-color: pink;border-width: 4px;'>$miesiac</h1>";
switch ($miesiac) {
    case 1:
    case 2:
    case 3:
        echo "<h3 style='text-align: center; border-bottom-style: dashed;border-top-style: dashed;border-color: pink;font-family: cursive;border-width: 2px;'>I Kwartał</h3>";
        break;
    case 4:
    case 5:
    case 6:
        echo "<h3 style='text-align: center; border-bottom-style: dashed;border-top-style: dashed;border-color: pink;font-family: cursive;border-width: 2px;'>II Kwartał</h3>";
        break;
    case 7:
    case 8:
    case 9:
        echo "<h3 style='text-align: center; border-bottom-style: dashed;border-top-style: dashed;border-color: pink;font-family: cursive;border-width: 2px;'>III Kwartał</h3>";
        break;
    case 10:
    case 11:
    case 12:
        echo "<h3 style='text-align: center; border-bottom-style: dashed;border-top-style: dashed;border-color: pink;font-family: cursive;border-width: 2px;'>IV Kwartał</h3>";
        break;
    case 13:
    case 14:
    case 15:
        echo "<h3 style='text-align: center; border-bottom-style: dashed;border-top-style: dashed;border-color: pink;font-family: cursive;border-width: 2px;'>Błędny numer miesiąca</h3>";

}


$wiek=19;
if ($wiek <18)
{
    echo 'Jeszcze nie możesz głosować';
}
elseif ($wiek <=21)
{
    echo 'Możesz tylko głosować';
}
elseif ($wiek<=30)
{
    echo 'Możesz głosować i kandydować do sejmu';
}
elseif ($wiek<=35)
{
    echo 'Możesz głosować i kandydować do sejmu i senatu';
}
else
{
    echo 'Możesz głosować, kandydować do Sejmu i Senatu oraz na Prezydenta';
}




$ile=5;
switch ($ile) {
    case 1:
        echo("+");
        break;

    case 2:
        echo("++");
        break;

    case 3:
        echo("+++");
        break;
    case 4:
        echo("++++");
        break;
    case 5:
        echo("+++++");
        break;
    case 6:
        echo("++++++");
        break;
    case 7:
        echo("+++++++");
        break;
    case 8:
        echo("++++++++");
        break;
    case 9:
        echo("+++++++++");
    case 10:
        echo ("Wartość poza zakresem");
}
?>
<br><br>
<p><?=max($a,$b,$c) ?></p>

</body>
</html>