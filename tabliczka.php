<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid black;
            text-align: center;
        }

        td, tr {
            border: 1px dashed black;
            border-collapse: collapse;
        }

        tr {
            background-color: rgba(80, 36, 36, 0.52);
            font-family: Arial;
            font-size: large;
        }

    </style>
</head>
<body>
<div style="text-align: center;">
    <table>
        <h3>Tabliczka mnożenia</h3>
        <?php
        $poziome1 = 10;
        $pionowe1 = 10;

        for ($i = 0; $i <= $pionowe1; $i++) {
            echo '<tr>';
            for ($j = 0; $j <= $poziome1; $j++) {
                if (($i == 0) && ($j == 0)) echo '<td style="background: rgba(80,36,36,0.52);">x</td>';
                elseif ($i == 0) echo '<td style="background: rgba(80,36,36,0.52);">' . $j . '</td>';
                elseif ($j == 0) echo '<td style="background: rgba(80,36,36,0.52);">' . $i . '</td>';
                else echo '<td>' . $i * $j . '</td>';
            }
            echo '</tr>';
        }
        ?>

    </table>

</div>
</body>
</html>








