<?php
// Utwórz połączenie do bazy danych
$servername = "localhost";
$username = "dt19kukulskis";
$password = "12345678";
$dbname = "dt19kukulskis";

$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdź połączenie z bazą danych
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sprawdź, czy pole 'Nazwa' zostało przesłane
    if(isset($_POST["Nazwa"])) {
        $nazwa = $_POST["Nazwa"];

        // Przygotuj zapytanie SQL i wykonaj wstawienie danych do bazy
        $sql = "INSERT INTO DZIALY (Nazwa) VALUES ('$nazwa')";

        if ($conn->query($sql) === TRUE) {
            echo "Nowy rekord został pomyślnie dodany";
        } else {
            echo "Błąd: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>

    <form action="?page=dzialy_dodaj" method="post">
        <table>
            <tr>
                <td style="color: aqua;"><label for="b">Nazwa</label></td>
                <td><input type="text" id="b" name="Nazwa"></td>
            </tr>
            <tr>
                <th colspan="2"><button type="submit">Zapisz</button></th>
            </tr>
        </table>
    </form>

<?php
// Zamknij połączenie z bazą danych po użyciu
$conn->close();
?><?php
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
