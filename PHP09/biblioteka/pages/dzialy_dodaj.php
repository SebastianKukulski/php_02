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
                <td>Id_dzial</td> <td><input type = "text" disabled></td>
            </tr>
            <tr>
                <td style="color: #001313;"><label for="b">Nazwa</label></td>
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
$conn = mysqli_connect('localhost', 'dt19kukulskis', '12345678', 'dt19kukulskis');

if (!$conn) {
    die("Connection to 'dt19kukulskis' database failed: " . mysqli_connect_error());
}

// Obsługa dodawania działu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nazwa = $_POST["Nazwa"];

    $sql_dodaj = "INSERT INTO dzialy (Nazwa) VALUES ('$nazwa')";


}

// Zapytanie SQL z wykorzystaniem JOIN
$sql_wyswietl = "SELECT * from dzialy";
$result = mysqli_query($conn, $sql_wyswietl);
?>
