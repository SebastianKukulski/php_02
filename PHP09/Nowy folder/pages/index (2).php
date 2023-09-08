
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>





    </style>
</head>
<body>

<div style="background: aqua; height: 800px; width: 200px; " >
    <a href="Strona">Strona</a><br>
    <a href="page=czytelnicy">Czytelnicy</a><br>
    <a href="page=dzialy">Działy</a><br>
    <a href="page=ksiazki">Książki</a><br>
    <a href="Tabela Czytelnicy">Tabela Czytelnicy</a><br>
    <a href="page=pracownicy">Pracownicy</a><br>
    <a href="page=stanowiska">Stanowiska</a><br>
    <a href="page=wypozyczenia">Wypożyczenia</a><br>
    <?php
    if(isset($_GET['page']))
    {
        if(file_exists('pages/'. $_GET['page'].'.php'))
            include('pages/'. $_GET['page'].'.php');
        else
            echo '<h2>ta strona nie istnieje</h2>';
    }


    ?>
    <?php
$mysqliProceduralConection = mysqli_connect("localhost", "dt19kukulskis", "12345678", "dt19kukulskis");

if (!$mysqliProceduralConection)
{
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: "
        . mysqli_connect_error());
}
//echo '<p>Połączono z bazą danych <b>' . $database . '</b> na serwerze <b>' . //$servername . '</b><br>';
echo 'Host info: ' . $mysqliProceduralConection->host_info . '<br>';
echo 'MySQLi stat: ' . mysqli_stat($mysqliProceduralConection) . '</p>';

mysqli_close($mysqliProceduralConection);
</div>
</body>
</html>
</html>
