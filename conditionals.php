<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div style="text-align: center;">
    <li><a href="conditionals.php">Refresh</a></li>
<?php
$losowa = rand(1,30);

?>
<h4 style="color: magenta" >
    <?php
if (20 <= $losowa)
echo "Wylosowana liczba jest większa lub równa 20";
?>
</h4>

<h2  style="color: darkorchid" style="text-align: center"><?= $losowa ?> Liczba losowa</h2>
<h4 style="color: navy">
    <?php
    if ($losowa%2==0)
        echo "Wylosowana liczba jest parzysta";
        else echo "Liczba nie jest parzysta";


    ?>

</h4>

<h4 style="color: deeppink">

    <?php
    if ($losowa<=10)

        echo "Jedna dziesiątka";

    elseif ($losowa<=20)
        echo "Dwie dziesiątki";

    elseif ($losowa<=30)
        echo "Trzy dziesiątki";

    ?>



</h4>

    <?php
    $miesiac = rand(1,15);


    ?>
    <h1 style="color: red; border-style: dotted;
  border-width: 4px;">
    <?php
    echo $miesiac;
    ?>
    </h1>
    <h3 style="border-style: dotted;
  border-width: 2px;
  color: pink;
  font-family: cursive">
    <?php
    switch ($miesiac){
        case 1:
        case 2:
        case 3:
            echo "Pierwszy kwartał";
            break;
        case 4:
        case 5:
        case 6:
            echo "Drugi kwartał";
            break;
        case 7:
        case 8:
        case 9:
            echo "Trzeci kwartał";
            break;
        case 10:
        case 11:
        case 12:
            echo "Czwarty kwartał";
            break;
        default:
            echo "Błędny numer miesiąca";
    }

    ?>

    </h3>
</div>
</body>
</html>