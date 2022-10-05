<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$DOBRA_RADA = "Bez chleba, to sie nie najesz.";
echo $DOBRA_RADA.'<br>';
echo strlen($DOBRA_RADA).'<br>';
echo str_word_count($DOBRA_RADA).'<br>';
echo strrev($DOBRA_RADA).'<br>';
echo strpos( $DOBRA_RADA, "a").'<br>';
echo str_replace("chleba", "mięsa", "$DOBRA_RADA").'<br>';
echo strtolower( $DOBRA_RADA)





?>
<ol style="list-style: decimal-leading-zero">
    <li><a href="index.php">Powrót do strony głównej</a></li>
    <li><a href="plan_lekcji.php">Plan lekcji</a></li>
    <li><a href="syntax.php">Funkcje</a></li>
    <li><a href="variables.php">Variables</a></li>
    <li><a href="strings.php">Strings</a></li>
</ol>
</body>
</html>