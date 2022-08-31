<?php
    $var = 'Hello World';
    echo $var;
    $var = 'page title';
    $винни_пух = "Hello, I'm Winnie";

    $var2 = 'a';
    $Var2 = 'A'; // две разные переменные, PHP - Регистрозависимый язык

    $fruit = "apple";
    $winnie_pooh = "Hello, I'm Winnie. I have 2 {$fruit}s";

    define("PAGE","new page");
    const PAGE2 = 'new const';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $var; ?></title>
</head>
<body>
    <p><?php echo $винни_пух; ?></p>
    <p><?php echo $winnie_pooh; ?></p>
    <p><?php echo PAGE; ?></p>
    <p><?php echo PAGE2; ?></p>
</body>
</html>

