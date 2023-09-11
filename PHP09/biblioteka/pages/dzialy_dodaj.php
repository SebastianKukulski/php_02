<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") // Zapisz dane z formularza do bazy [INSERT]
{
    // tu będzie zapytanie typu insert do bazy
    // przed wysłaniem danych do bazy warto je poddać walidacji

    $sql = "INSERT INTO MyGuests (firstname, lastname, email) <-- to tylko przykład
           VALUES ('John', 'Doe', 'john@example.com')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

} else { // lub wyświetl formularz
    ?>
    <form action="?page=dzialy_dodaj" method="post">
        <table>
            <tr>
                <td style="color: aqua h"> <label for="a">Id_dzial</label></td>
                <td> <input type="text" id="a" disabled> </td>
                <br>
            </tr>
            <tr>
                <td><label for="b">Nazwa</label> </td>
                <td><input type="text" id="b"> </td>
                <br>
            </tr>
            <tr><th colspan="2"><button type="submit">Zapisz</button></th></tr>
        </table>
    </form>
    <?php
}
?>

?>