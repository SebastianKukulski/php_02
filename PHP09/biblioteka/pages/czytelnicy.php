<?php

// Utwórz połączenie z bazą danych
$mysqliProceduralConnection = mysqli_connect('localhost', 'dt19kukulskis', '12345678', 'dt19kukulskis');

if (!$mysqliProceduralConnection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Zapytanie SQL z wykorzystaniem JOIN
$sql = "SELECT czytelnicy.Nr_czytelnika, czytelnicy.Nazwisko AS CzytelnikNazwisko, czytelnicy.Imie AS CzytelnikImie, 
               czytelnicy.Data_ur, czytelnicy.Ulica, czytelnicy.Kod, czytelnicy.Miasto AS CzytelnikMiasto, 
               czytelnicy.Data_zapisania, czytelnicy.Data_skreslenia, czytelnicy.Nr_legitymacji, 
               czytelnicy.Funkcja, czytelnicy.Plec, 
               pracownicy.Nazwisko AS PracownikNazwisko, pracownicy.Imie AS PracownikImie,
               stanowiska.Nazwa AS Stanowisko
        FROM czytelnicy
        LEFT JOIN pracownicy ON czytelnicy.Funkcja = pracownicy.id_pracownika
        LEFT JOIN stanowiska ON pracownicy.Id_stanowisko = stanowiska.Id_stanowisko";

$result = mysqli_query($mysqliProceduralConnection, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabela czytelników</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Tabela czytelników</h2>

<table>
    <tr>
        <th>Nr czytelnika</th>
        <th>Nazwisko</th>
        <th>Imię</th>
        <th>Data urodzenia</th>
        <th>Ulica</th>
        <th>Kod</th>
        <th>Miasto</th>
        <th>Data zapisania</th>
        <th>Data skreślenia</th>
        <th>Nr legitymacji</th>
        <th>Funkcja</th>
        <th>Płeć</th>

    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["Nr_czytelnika"] . "</td>";
            echo "<td>" . $row["CzytelnikNazwisko"] . "</td>";
            echo "<td>" . $row["CzytelnikImie"] . "</td>";
            echo "<td>" . $row["Data_ur"] . "</td>";
            echo "<td>" . $row["Ulica"] . "</td>";
            echo "<td>" . $row["Kod"] . "</td>";
            echo "<td>" . $row["CzytelnikMiasto"] . "</td>";
            echo "<td>" . $row["Data_zapisania"] . "</td>";
            echo "<td>" . $row["Data_skreslenia"] . "</td>";
            echo "<td>" . $row["Nr_legitymacji"] . "</td>";
            echo "<td>" . $row["Funkcja"] . "</td>";
            echo "<td>" . $row["Plec"] . "</td>";

            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='14'>Brak wyników</td></tr>";
    }
    ?>
</table>

</body>
</html>

<?php
// Zakończ połączenie
mysqli_close($mysqliProceduralConnection);
?>
