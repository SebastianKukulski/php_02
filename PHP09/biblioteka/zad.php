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
<fieldset style="border-color: green;margin-right: 20px">
    <legend>
        Liczby
    </legend>

    <form method="post" action="zad.php">

        <?php
        foreach (range(0, 100, 10) as $number)
            echo '<label name="paprocki" for="paprocki1"><input  name="1" id="$number" type="checkbox" >'.$number;

        ?>
        <br>
        <input type="submit" value="Wyślij" >

    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']==='POST')
    {
        echo'<PRE>';
        print_r ($_POST);
        echo '</PRE>';
    }
    ?>
</fieldset>
</form>
</body>
</html>