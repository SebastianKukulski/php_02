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

if($_SERVER['REQUEST_METHOD'] =='POST') {

    ?>

    <p style='color: red'><i><?=$_POST ['paprocki']?></p>
<?php        }
else {


?>
<form action="form1.php" method="post">

    <fieldset>
        <legend>
            lorem50
        </legend>
        <textarea  name="paprocki"rows="5" cols="50">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo illum molestias necessitatibus nostrum obcaecati, placeat porro quam totam vero? At, beatae dolore est fugit in iure quisquam reprehenderit sint temporibus vero! Amet officia sed ut! Animi aspernatur atque consequatur dolorum magnam magni natus possimus quas? Assumenda fugiat maiores similique tenetur!
    </textarea><br>
        <input type="submit">
    </fieldset>
</form>
</body>
</html>