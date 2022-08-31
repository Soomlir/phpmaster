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
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam commodi dolore
    earum eligendi facilis libero quibusdam saepe sed ullam. Eaque, ex fugit id minima molestias
    obcaecati repellendus reprehenderit unde?
</p>
    <?php include("inc.php"); ?>
    <?php include "inc.php"; ?> // Альтернативный синтаксис, можно также использовать одиночные кавычки
    <?php require("inc.php"); ?> // Отличие include и require - если указан не верный путь к файлу при include
// весь скрипт отработает до конца, в случае require - будет фатальная ошибка и прекращение отработки скрипта
    <?php include_once("inc.php"); ?>
    <?php include_once("inc.php"); ?> // once - подключение файла только один раз
</body>
</html>