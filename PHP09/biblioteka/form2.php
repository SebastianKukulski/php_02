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
<fieldset style="background-color: lightgreen;border-color: greenyellow">
    <legend style="border-style: solid;border-color: green;background-color: lightgreen" >Formularz z walidacją</legend>
    <?php

    $login = $email = $strona_internetowa = $miasto = $plec = '';
    $login_blad = $strona_internetowa_blad = $miasto_blad = $plec_blad = $email_blad = '';
    $valid_input = true;
    $valid_message ='';
    $filename= 'ankieta.txt';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (empty($_POST['Login'])) {
            $login_blad = 'Wpisz Login';
            $valid_input= false;
        }
        else
        {
            $login = trim($_POST['Login']);
            $login = filter_var($login,FILTER_SANITIZE_STRING);
            if (strstr($login,' '))
            {
                $login_blad ="Login nie może zawierać spacji (użyj podkreślenia _)";
                $valid_input = false;
            }
        }


        // if (empty($_POST['email'])) {
        // $email_blad = 'Podaj email';
        //} //else {
        //$email = $_POST['email'];
        //}

        //if (empty($_POST['SI'])) {
        //$strona_internetowa_blad = 'Podaj stronę internetową';
        //} else {
        //$strona_internetowa = $_POST['SI'];

        //}
        $email =filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL))
        {
            $email_blad = "Wartość w polu email jest nieprawidłowa";
            $valid_input = false;
        }
        $strona_internetowa= filter_var($_POST["SI"],FILTER_SANITIZE_URL);
        if (!filter_input(INPUT_POST,"SI",FILTER_VALIDATE_URL))
        {
            $strona_internetowa_blad = "Wartość w polu strona internetowa jest nieprawidłowa";
            $valid_input = false;
        }
        if (empty($_POST['miasto'])) {
            $miasto_blad = 'Podaj miasto/miasta';
            $valid_input= false;
        } else {
            $miasto = $_POST['miasto'];
        }
        if (empty($_POST['plec'])) {
            $plec_blad = 'Podaj plec';
            $valid_input= false;
        } else {
            $plec = $_POST['plec'];
        }
        if ($valid_input)
        {
            if (file_exists($filename))
            {
                $myfile = fopen($filename,'a');
            }
            else{
                $myfile = fopen($filename, 'w');
            }
            $mydata = $login .'|'.$email .'|'.$strona_internetowa .'|'
                .implode(',', $miasto) .'|'. implode('', $plec) .'|'
                .date('Y-m-d H:i:s')."\n";
            fwrite($myfile, $mydata);
            fclose($myfile);
            $valid_message = 'Dane z formularza zostały zapisane do pliku '.$filename;
        }
    }
    ?>
    <form method="post" action="form2.php">
        <label for="Login">Login:<span style="color: red">*<?=$login_blad?></span></label><br>
        <input type="text" name="Login" id="Login" placeholder="podaj login" value="<?=$login?>"><br>
        <label for="email">Email:<span style="color: red" >*<?=$email_blad?></span></label><br>
        <input type="text" name="email" id="email" placeholder="podaj email" value="<?=$email?>"><br>
        <label for="SI">Strona internetowa:<span style="color: red">*<?=$strona_internetowa_blad?></span></label><br>
        <input type="text" name="SI" id="SI"  placeholder="podaj stronę internetową" value="<?=$strona_internetowa?>"><br>

        <label>Wybierz miasto/miasta:<span style="color: red">*<?=$miasto_blad?></span></label><br>
        <input type="checkbox" name="miasto[]" id="Warszawa " value="Warszawa"
            <?php if ($miasto && strstr(implode(' ',$miasto),'Warszawa')) echo 'checked' ?>>
        <label for="warsz">Warszawa</label><br>
        <input type="checkbox" name="miasto[]" id="Poznań " value="Poznań"
            <?php if ($miasto && strstr(implode(' ',$miasto),'Poznań')) echo 'checked' ?>>
        <label for="pozn">Poznań</label><br>
        <input type="checkbox" name="miasto[]" id="gda " value="Gdańsk"
            <?php if ($miasto && strstr(implode(' ',$miasto),'Gdańsk')) echo 'checked' ?>>
        <label for="gda">Gdańsk</label><br>
        <input type="checkbox" name="miasto[]" id="szcz" value="Szczecin"
            <?php if ($miasto && strstr(implode(' ',$miasto),'Szczecin')) echo 'checked' ?>>
        <label for="szcz">Szczecin</label><br><br>
        <label>Wybierz jedną opcje:<span style="color: red">*<?=$plec_blad?></span></label><br>
        <input type="radio" name="plec[]" id="k" value="kobieta"
            <?php if ($plec && strstr(implode(' ',$plec),'k')) echo 'checked' ?>>
        <label for="k">kobieta</label><br>
        <input type="radio" name="plec[]" id="m" value="mężczyzna"
            <?php if ($plec && strstr(implode(' ',$plec),'m')) echo 'checked' ?>>
        <label for="m">mężczyzna</label><br>
        <input type="radio" name="plec[]" id="ncp" value="nie chcę podawać"
            <?php if ($plec && strstr(implode(' ',$plec),'ncp')) echo 'checked' ?>>
        <label for="ncp">nie chcę podawać</label><br><br>
        <input type="submit" name="submit" value="Wyślij">
        <br>
        <span style="color: lightcoral"><?=$valid_message?></span>
    </form>



</fieldset>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<h3>Pola formularza wyświetlone funckją print_r</h3><pre>';
    print_r($_POST);
    echo '</pre>';
    echo'<h3>Pole formularza wyświetlone selektywnie jeden po drugim</h3>';
    echo'<p>Login</p>';
    if(!empty($_POST['Login'])){
        echo $_POST['Login'];
    }else{
        echo'nie podany';
    }
    echo'<p>Email</p>';
    if(!empty($_POST['email'])){
        echo $_POST['email'];
    }else{
        echo'nie podany';
    }
    echo'<p>Strona internetowa</p>';
    if(!empty($_POST['SI'])){
        echo $_POST['SI'];
    }else{
        echo'nie podany';
    }
    echo'<p>Miasto</p>';
    if(!empty($_POST["miasto"])){
        echo implode(",",$_POST["miasto"]);
    }else{
        echo'nie podany'.'<br>';
    }
    echo'<p>Płeć</p>';
    if(!empty($_POST["plec"])){
        echo implode(",",$_POST["plec"]);
    }else{
        echo'nie podana';
    }
}
?>

</body>
</html>