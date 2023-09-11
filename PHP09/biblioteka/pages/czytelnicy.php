<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$mysqliProceduralConnection = mysqli_connect('localhost', 'dt19kukulski', '12345678', 'dt19kukulskis');
if (!$mysqliProceduralConnection) {
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: " . mysqli_connect_error());
}

echo 'Host info: ' . $mysqliProceduralConnection->host_info . '<br>';
echo 'MySQLi stat: ' . mysqli_stat($mysqliProceduralConnection) . '</p>';

mysqli_close($mysqliProceduralConnection);
?>
</body>
</html>
