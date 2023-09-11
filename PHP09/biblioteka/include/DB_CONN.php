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
?>