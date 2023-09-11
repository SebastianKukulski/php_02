<?php

// Create connection
$mysqliProceduralConnection = mysqli_connect('localhost', 'dt19kukulskis', '12345678', 'dt19kukulskis');

// Sprawdź, czy połączenie zostało nawiązane poprawnie
if (!$mysqliProceduralConnection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Zapytanie SQL do pobrania wszystkich rekordów z tabelki "pracownicy"
$sql = "SELECT * FROM pracownicy
";
$sql = "SELECT * FROM pracownicy 
INNER JOIN stanowiska ON stanowiska.Id_stanowisko = pracownicy.Id_stanowisko 
WHERE 1 
ORDER BY pracownicy.Id_pracownika;";

// Wykonaj zapytanie
$result = mysqli_query($mysqliProceduralConnection, $sql);

?>


<!DOCTYPE html>
<html>
<head>
    <title>Tabela pracowników</title>
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

<h2>Tabela pracowników</h2>

<table>
    <tr>

        <!-- Dodaj inne nagłówki kolumn, jeśli to konieczne -->
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        // Wyświetl dane pracowników w tabeli
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["Id_pracownika"] . "</td>";
            echo "<td>" . $row["Imie"] . "</td>";
            echo "<td>" . $row["Nazwisko"] . "</td>";
            echo "<td>" . $row["Stanowisko"] . "</td>";
            echo "<td>" . $row["Imie"] . "</td>";
            echo "<td>" . $row["Nazwisko"] . "</td>";
            // Dodaj inne pola, jeśli to konieczne, używając odpowiednich nazw kolumn
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Brak wyników</td></tr>";
    }
    ?>


</table>

</body>
</html>

<?php
// Zakończ połączenie
mysqli_close($mysqliProceduralConnection);
?>
