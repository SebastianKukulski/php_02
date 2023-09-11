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


<form action="form.php" method="post">
    <label for="1">Spacja</label><br>
    <input type="text" id="1" name="1"><br>

    <label for="2">Zanki</label><br>
    <input type="text" id="2" name="2"><br>
    <label for="3">Zanki HTML</label><br>
    <input type="text" id="3" name="3"><br>

    <input type="submit" value="Submit">

</form>
<?php
$miesiace=array(
    "styczen",
    'luty',
    'marzec',
    'kwiecien',
    'maj',
    'czerwiec',
    'lipiec',
    'sierpien',
    'wrzesien',
    'pazdziernik',
    'listopad',
    'grudzien');

?>


<select>
    <?php
    foreach ($miesiace as $indeks=> $miesiac) {
        if ($indeks + 1 == date('m')) {
            $selected = 'selected';
        } else {
            $selected = '';
        }
        echo '<option value="' .$miesiac. '" '.$selected.'>.' .$miesiac.' </option>';
    }
    ?>

</select>
<style>
    fieldset {
        border 2px solid black;
        width 100px;
    }
    legend{

    }
    #janpawel{
        width: 200px;

    }


</style>

<div id="janpawel">
    <fieldset>
        <legend>Roczniki</legend>
        <?php
        $rok = 2010;
        for ($i=1; $i <=16; $i++){
            echo '<input type="radio" name="jp2">'.$rok.'<label for="jp2"></label><br>';
            $rok++;

        }

        ?>

    </fieldset>
</div>


</body>
</html>