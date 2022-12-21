<!doctype html>
<html lang="en">
<meta charset="UTF-8">
<head>
    <style>
        table{
            border-collapse: collapse;

        }
    </style>
</head>
<body>
<?php
$dnitygodnia = array("pon", "wto", "śro", "czw", "pią", "sob", "nie");

echo "<table>";
echo "<tr>";

foreach ($dnitygodnia as $dni) {
    echo "<td style='border: 2px solid black; padding: 25px;'>$dni</td>";
}

echo "</tr>";
echo "</table>";
?>
</body>
</html>