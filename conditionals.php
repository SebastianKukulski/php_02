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
<div style="text-align: center;"> /*Wyśrodkowuje wszystko w divie*/
       
    <li><a href="conditionals.php">Refresh</a></li>
    
<?php
$losowa = rand(1,30);   /*Polecenie rand tworzy liczbę losowaą z zakresu 1-30   */

?>
<h4 style="color: magenta" >   <!Ustala kolor magenta>
    <?php
if (20 <= $losowa) /*   Ustala warunek jeśli liczba 20 jest większa lub równa liczbie wylosowanej wypisz to co jest wpisane w echo> */
echo "Wylosowana liczba jest większa lub równa 20";   
?>
</h4>

<h2  style="color: darkorchid" style="text-align: center"><?= $losowa ?> Liczba losowa</h2>
<h4 style="color: navy">
    <?php
    if ($losowa%2==0)    /* TWorzy warunek jeśli liczba jest parzysta wyświetl to co w echo, a jeśli nie to co w else  */
        echo "Wylosowana liczba jest parzysta";
        else echo "Liczba nie jest parzysta";


    ?>

</h4>

<h4 style="color: deeppink">

    <?php
    if ($losowa<=10)   /*Jeśli liczba jest większa lub równa 10 wyświetl to co w echo   */

        echo "Jedna dziesiątka";

    elseif ($losowa<=20) /*Jeśli liczba jest większa lub równa 20 wyświetl to co w echo   */
        echo "Dwie dziesiątki";

    elseif ($losowa<=30)  /*Jeśli liczba jest większa lub równa 30 wyświetl to co w echo   */
        echo "Trzy dziesiątki";

    ?>



</h4>

    <?php
    $miesiac = rand(1,15);   /*Polecenie rand tworzy liczbę losową z zakresu 1-15   */


    ?>
    <h1 style="color: red; border-style: dotted; 
  border-width: 4px;">
    <?php
    echo $miesiac;
    ?>
    </h1>
    <h3 style="border-top-style: dashed;
    border-bottom-style: dashed;
  border-width: 2px;
  color: pink;
  font-family: cursive">
    <?php
    switch ($miesiac){     
        case 1:   /*Jeśli wylosowana liczba jest pomiędzy 1-3 wyświetl to co w echo poniżej   */
        case 2:
        case 3:
            echo "Pierwszy kwartał";
            break;   /*Jeśli to nie jest liczba 1-3 przejdz do następnego  */
        case 4:  /*Jeśli wylosowana liczba jest pomiędzy 4-6 wyświetl to co w echo poniżej   */
        case 5:
        case 6:
            echo "Drugi kwartał";
            break;/*Jeśli to nie jest liczba 4-6 przejdz do następnego  */
        case 7: /*Jeśli wylosowana liczba jest pomiędzy 7-9 wyświetl to co w echo poniżej   */
        case 8:
        case 9:
            echo "Trzeci kwartał";
            break;/*Jeśli to nie jest liczba 7-9 przejdz do następnego  */
        case 10:  /*Jeśli wylosowana liczba jest pomiędzy 10-12 wyświetl to co w echo poniżej   */
        case 11:
        case 12:
            echo "Czwarty kwartał";
            break;/*Jeśli to nie jest liczba 10-12 przejdz do następnego  */
        default:/*Jeśli to nie jest liczba żadna z tych powyżej wyświetl to co w echo   */
            echo "Błędny numer miesiąca";  
    }

    ?>

    </h3>
</div>
</body>
</html>