<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<fieldset name="paprocki" style="border-color: yellowgreen;padding: 4px">
    <legend>Ankieta </legend>
    <?php

    $imie=$nazwisko=$kto='';
    $imie_blad=$nazwisko_blad=$kto_blad='';

    if($_SERVER['REQUEST_METHOD']==='POST')
    {
        if(empty($_POST['Imie']))
        {
            $imie_blad='Wpisz to imię';
        }
        else
        {
            $imie=$_POST['Imie'];
        }

        if(empty($_POST['Nazwisko']))
        {
            $nazwisko_blad='Wpisz to Nazwisko';
        }
        else
        {
            $nazwisko=$_POST['Nazwisko'];
        }

        if(empty($_POST['funkcja']))
        {
            $kto_blad='Wybierz tą opcje';
        }
        else
        {
            $kto=$_POST['funkcja'];
        }

    }


    ?>

    <form method="POST" action="formularz.php">
        <label for="Imie">Imię:<span style="color: red">*<?=$imie_blad?></span></label><br>
        <input type="text" name="Imie" id="Imie" value="<?=$imie?>"><br>
        <label for="Imie">Nazwisko:<span style="color: red">*<?=$nazwisko_blad?></span></label><br>
        <input type="text" name="Nazwisko" id="Nazwisko" value="<?=$nazwisko?>"><br>

        <label>Wybierz jedną obcję:<span style="color: red">*<?=$kto_blad?></span><br>
            <input type="radio" name="funkcja[]" id="Uczen " value="Uczen"
                <?php if ($kto && strstr(implode(' ',$kto),'Uczen')) echo 'checked' ?>>
            <label for="Uczen">uczen</label><br>
            <input type="radio" name="funkcja[]" id="Ab" value="Absolwent"
                <?php if ($kto && strstr(implode(' ',$kto),'Absolwent')) echo 'checked'; ?>>
            <label for="Ab">absolwent</label><br>
            <input type="radio" name="funkcja[]" id="Na" value="nauczyciel"
                <?php if ($kto && strstr(implode(' ',$kto),'nauczyciel')) echo 'checked'; ?>>
            <label for="Na">nauczyciel</label><br>
            <input type="radio" name="funkcja[]" id="Pa" value="pracownik administracji"
                <?php if ($kto && strstr(implode(' ',$kto),'pracownik administracji')) echo 'checked'; ?>>
            <label for="Pa">pracownik administracji</label><br>

            <input type="submit" value="Wyślij">
    </form>




</fieldset>



</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularz z walidacją</title>
</head>
<body>
