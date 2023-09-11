<?php
// Utwórz połączenie z bazą danych "działy"
$mysqliProceduralDzialyConnection = mysqli_connect('localhost', 'dt19kukulskis', '12345678', 'dt19kukulskis');

if (!$mysqliProceduralDzialyConnection) {
    die("Connection to 'działy' database failed: " . mysqli_connect_error());
}

// Zapytanie SQL z wykorzystaniem JOIN
$sql = "SELECT * from dzialy";

$result = mysqli_query($mysqliProceduralDzialyConnection, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabela działów</title>
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

<h2>Tabela działów</h2>

<table>
    <tr>
        <th>ID Działu</th>
        <th>Nazwa działu</th>

    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        echo '<tr><td colspan="2"><a class="add" href="?page=dzialy_dodaj">&#10010; Dodaj dział</a></td></tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["Id_dzial"] . "</td>";
            echo "<td>" . $row["Nazwa"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='2'>Brak wyników</td></tr>";
    }
    ?>


</table>

</body>
</html>

<?php
// Zakończ połączenie
mysqli_close($mysqliProceduralDzialyConnection);
?>
