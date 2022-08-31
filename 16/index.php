<?php
    // HTTP Заголовок - информация, которая отправляется сервером браузеру
    // и они нужны для того, чтобы браузер корректно отобразил страницу
?>
<?php header('Content-Type: text/html; charset=utf-8'); // имеет приоритет, над тегом charset в html?>
<!doctype html>
<html lang="ru">
<head>
    <title>Document</title>
</head>
<body>

</body>
</html>

<?php
    header('Location: http://yandex.ru');
    header('refresh: 5, url=inc.php');
    exit; // альтернативный синтаксис
    exit();
    die;
    die(); // exit и die аналоги друг друга

    header('HTTP/1.0 404 Not Found');

    header('HTTP/1.0 304 Not modified');

    // Список кодов состояния HTTP
    // Список MIME-типов