<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        //  p{
            color: darkorchid;
        }
        table {
        //  border: 1px solid black;
            border-collapse: collapse;

        }
        tr{
            border: 1px solid black;
            border-collapse: collapse;

        }
        th{
            border: 1px solid black;
            border-collapse: collapse;


        }
        td{
            border: 1px solid black;
            border-collapse: collapse;

        }
    </style>
</head>
<body>
<?php

$conn = mysqli_connect('127.0.0.1','paprocki', 'CAFx6EY54M', 'paprocki');
if (!$conn) {
    die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: '
        . mysqli_connect_error());
}

//$query = 'SELECT Nr_czytelnika, Imie, Nazwisko FROM czytelnicy';
//$result = mysqli_query($conn, $query);//
//$result = mysqli_query($conn, $query);
//if (mysqli_num_rows($result) > 0) {
//  while ($row = mysqli_fetch_assoc($result)) {
//    echo '<p>Numer: ' . $row['Nr_czytelnika']
//      . '. Imię i nazwisko: ' . $row['Imie'] . ' ' . $row['Nazwisko'] . '</p>';
//}
//} else {
//  echo 'brak danych';
//}
//mysqli_close($conn);
//$result = mysqli_query($conn, $query);
//if (mysqli_num_rows($result) > 0) {
//  echo '<table>';
//echo '<tr><th>Numer czytelnika</th><th>Imię i nazwisko</th></tr>';
//while ($row = mysqli_fetch_assoc($result)) {
//  echo '<tr><td>' . $row['Nr_czytelnika'] . '</td><td>'
//    . $row['Imie'] . ' ' . $row['Nazwisko'] . '</td></tr>';
//}
//echo '</table>';
//} else {
//   echo 'brak danych';
//}


//$query = 'SELECT Tytul, Imie, Nazwisko FROM ksiazki';
//$result = mysqli_query($conn, $query);
//if (mysqli_num_rows($result) > 0) {
// while ($row = mysqli_fetch_assoc($result)){
//echo '<p>Książka ' . '<i>'.$row['Tytul'].'</i>'
// . ' została napisana przez: ' .'<b>'. $row['Imie'] . ' ' . $row['Nazwisko'] .'</b>'. '</p>';

// }

//}
//mysqli_close($conn);
//$query = 'SELECT  Nazwa FROM stanowiska';
//$result = mysqli_query($conn, $query);

//if (mysqli_num_rows($result) > 0) {
//  echo '<table>';
//echo '<tr><th>Nazwa stanowiska</th><th>Liczba liter</th></tr>';
// while ($row = mysqli_fetch_assoc($result)) {
//
//      echo '<tr><td>' . $row['Nazwa'] . '</td><td style="text-align: right">'.
//        mb_strlen ($row['Nazwa']) ." ". 'liter'. '</td></tr>';
//}
//echo '</table>';
//}
//mysqli_close($conn);
$query= 'SELECT Sygnatura,Tytul,Imie,Nazwisko,Wydawnictwo,Rok_wyd,Cena FROM ksiazki WHERE
(Wydawnictwo="Helion" OR Wydawnictwo="PWN") and Rok_wyd BETWEEN 1990 and 2011  ORDER by Rok_wyd asc';
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Sygnatura</th><th>Tytuł</th><th>Autor</th><th>Wydawnictwo</th><th>Rok wydania</th><th>Cena</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Sygnatura'] . '</td><td>'
            . $row['Tytul'] . '</td><td>'
            . $row['Imie'] ." ". $row['Nazwisko'].
            '</td><td>'. $row['Wydawnictwo'].'</td><td>'
            . $row['Rok_wyd'].'</td><td>'
            .explode('.',$row['Cena'])[0].'zł'
            .explode('.',$row['Cena'])[1].'gr'.
            '</td></tr>';
    }
    echo '</table>';
}
mysqli_close($conn);

?>
</body>
</html>