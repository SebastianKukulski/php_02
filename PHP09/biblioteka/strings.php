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
<?php
define("Dobra_Rada","Bez chleba to sie nie najesz");
echo Dobra_Rada . '<br>';
echo strlen(Dobra_Rada) .'<br>' ;
echo str_word_count(Dobra_Rada) .'<br>' ;
echo strrev(Dobra_Rada) .'<br>';
echo strpos(Dobra_Rada,"to") .'<br>' ;
echo str_replace("chleba","mięsa",Dobra_Rada) .'<br>';
echo strtolower(Dobra_Rada) .'<br>';
echo strtoupper(Dobra_Rada) .'<br>';
echo ucwords(Dobra_Rada) .'<br>';
echo trim(Dobra_Rada) .'<br>';
echo strstr(Dobra_Rada,"nie",).'<br>';
echo substr(Dobra_Rada, 10,5).'<br>';
echo str_pad(Dobra_Rada,"37","-_-",STR_PAD_BOTH).'<br>';
?>
</body>
</html>