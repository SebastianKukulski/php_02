<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <style>
    table{
        border-collapse: collapse;
    }
   </style>
</head>
<body>
<center>
<?php


$aktualnymiesiac = date('t');
$dniwmiesiacy = date('t', strtotime("$aktualnymiesiac"));
echo ' <caption>31</caption>';
echo '<table>';
echo '<tr>';
for ($t = 1; $t <= $dniwmiesiacy; $t++) {
    echo '<td style="border: solid 2px black; padding: 20px; height: 50px; width: 50px">';
    echo $t;
    echo '</td>';
    if ($t % 7 == 0) {
        echo '</tr>';

    }
}
?>
<?php


?>
</center>
</body>
</html>