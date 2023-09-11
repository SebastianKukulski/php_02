<?php
// Utwórz połączenie z bazą danych "dt19kukulskis"
$mysqliProceduralDzialyConnection = mysqli_connect('localhost', 'dt19kukulskis', '12345678', 'dt19kukulskis');

if (!$mysqliProceduralDzialyConnection) {
    die("Connection to 'dt19kukulskis' database failed: " . mysqli_connect_error());
}

// Obsługa dodawania działu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nazwa = $_POST["nazwa"];

    $sql_dodaj = "INSERT INTO dzialy (Nazwa) VALUES ('$nazwa')";

    if (mysqli_query($mysqliProceduralDzialyConnection, $sql_dodaj)) {
        echo "Dział został dodany pomyślnie.";
    } else {
        echo "Błąd podczas dodawania działu: " . mysqli_error($mysqliProceduralDzialyConnection);
    }
}

// Zapytanie SQL z wykorzystaniem JOIN
$sql_wyswietl = "SELECT * from dzialy";
$result = mysqli_query($mysqliProceduralDzialyConnection, $sql_wyswietl);
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

    <form action="" method="post">
        <table>
            <tr>
                <td><input type="text" name="nazwa" required></td>
                <td><input type="submit" value="Dodaj dział"></td>
            </tr>
        </table>
    </form>

    <?php
    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        echo '<tr><td>ID Działu</td><td>Nazwa działu</td></tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["Id_dzial"] . "</td>";
            echo "<td>" . $row["Nazwa"] . "</td>";
            echo "</tr>";
        }

        echo '</table>';
    } else {
        echo "Brak wyników";
    }
    ?>

    </body>
    </html>

<?php
// Zakończ połączenie
mysqli_close($mysqliProceduralDzialyConnection);
?>
<?php
