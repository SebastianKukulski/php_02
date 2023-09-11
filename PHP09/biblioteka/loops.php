<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        li{
            list-style-type: upper-roman;
            margin-left: 40px;
        }
    </style>
</head>
<body>
<ol>
    <?php
    for($n=1; $n<101; $n++)

    {
        /* echo "<li>To jest $n  element listy<br>"; */
    }


    ?>
</ol>
<br>
<br>
<table style="border-collapse: collapse;">
    <tr>
        <?php
        $znaki=str_split("Witaj Swiecie!");
        foreach ($znaki as $znak) {
            /* echo '<td style="border-style: dotted ; border-width: 1px; padding: 15px;">' . $znak . '</td>';*/
        }
        ?>
    </tr>
</table>
<table style="border-collapse: collapse">

    <?php
    /*$i = 1;
    while ($i <= 5) {
        echo "<tr><td style='background-color: lightgray; border: 1px;margin: 10px;border-color: gray;'>To jest wiersz numer $i</tr></td>";
        $i++;

    }
    */



    ?>
</table>
<table style="border-collapse: collapse;">
    <?php
    $i=1;
    do {
        echo "<td style='background-color: greenyellow; border-color: lawngreen;border-style: solid;padding: 10px; '>To jest kolumna numer $i</td>";
        $i++;
    } while ($i <= 5);

    ?>
</table>
</body>
</html>