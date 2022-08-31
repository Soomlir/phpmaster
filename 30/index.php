<?php
    function array_print($arr) {
        echo "<pre>" . print_r($arr, true) . "</pre>"; // true - не выводить, а буферизировать данные
    }

    $db = mysqli_connect('127.0.0.1', 'root', 'root', 'gb')
            or die('Ошибка соединения с DB');
    if (!$db) die(mysqli_connect_error());

    mysqli_set_charset($db, 'utf8') or die('Не установлена кодировка');

    echo $insert = "INSERT INTO `gb` (`name`, `text`) VALUES ('Катя', 'lorem ipsum')";
    $res_insert = mysqli_query($db, $insert);

    if ($res_insert) echo "OK";
    else echo "Error";

    echo mysqli_error($db);

//    $update = "UPDATE `gb` SET text = CONCAT(text, '|||') WHERE id > 1 ";
//    $res_update = mysqli_query($db, $update) or die(mysqli_error($db));

    $delete = "DELETE FROM `gb` WHERE id = 3";
    mysqli_query($db, $delete) or die(mysqli_error($db));

    echo mysqli_affected_rows($db);

    $res = mysqli_query($db, "SELECT name, text, date FROM `gb` ORDER BY id DESC LIMIT 2");
    $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
    array_print($data);

    echo mysqli_num_rows($res);
    foreach ($data as $item) {
        echo "NAME: {$item['name']} <br>";
        echo "TEXT: {$item['text']} <br>";
        echo "DATE: {$item['date']} <br>";
    }

//    $data2 = [];
//    while($row = mysqli_fetch_assoc($res)) { // - выбирает одну строку в виде ассоциативного массива
//        $data2[$row['id']] = $row;
//    }



