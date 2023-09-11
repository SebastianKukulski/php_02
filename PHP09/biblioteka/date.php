<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            td { border: 2px solid black;text-align: center; padding: 20px }
            table{
                border-collapse: collapse;
            }
        </style>
    </head>

<body>
<table>
    <caption style=><?=date('t')?></caption>
    <?php
    $date = date("t");
    $jeden = 1;
    for ($jeden = 1; $jeden <= 31; $jeden++){
        if($jeden%7==0){
            echo "<tr>";
        }
        if($jeden%7!=0) {
            echo "<td>".$jeden." "."</td>";
        }
        if($jeden%7==0){
            echo "</tr>";
        }
    }
    ?>
    <?php
    $tablica= array('pon','wto','śro','czw','pią','sob','nie',);
    foreach ($tablica as $value)
    ?>
    <tr>
        <?php
        foreach ($tablica as $tablica){
            echo '<td>'. $tablica.'</td>';
        }
        ?>

    </tr>
</table>
</body>
</html>