<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Dodaj swoje style CSS tutaj */
        *{
            background-color: bisque;
        }
    </style>
</head>
<body>

<div style=" height: 800px; width: 200px; float: left">
    <a href="index.php?page=Strona">Strona</a><br>
    <a href="index.php?page=czytelnicy">Czytelnicy</a><br>
    <a href="index.php?page=dzialy">Działy</a><br>

    <a href="index.php?page=ksiazki">Książki</a><br>
    <a href="index.php?page=Tabela Czytelnicy">Tabela Czytelnicy</a><br>
    <a href="index.php?page=pracownicy">Pracownicy</a><br>
    <a href="index.php?page=stanowiska">Stanowiska</a><br>
    <a href="index.php?page=wypozyczenia">Wypożyczenia</a><br>
</div>
<div style="float: right; background-color: bisque" >
<?php
$mysqliProceduralConnection = mysqli_connect("localhost", "dt19kukulskis", "12345678", "dt19kukulskis");

if (!$mysqliProceduralConnection) {
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: " . mysqli_connect_error());
}

echo 'Host info: ' . $mysqliProceduralConnection->host_info . '<br>';
echo 'MySQLi stat: ' . mysqli_stat($mysqliProceduralConnection) . '</p>';

mysqli_close($mysqliProceduralConnection);

if (isset($_GET['page'])) {
    $pageName = $_GET['page'];
    $filePath = 'C:/Users/dt19kukulskis/PhpstormProjects/php_02/PHP09/biblioteka/pages/' . $pageName . '.php';

    if (file_exists($filePath)) {
        include($filePath);
    } else {
        echo '<h2>Ta strona nie istnieje</h2>';
    }
}
?>
</div>
</body>
</html>
