<?php
    echo date('Y-m-d H:i:s'); // в одинарных, либо двойных кавычках
    // выводится дата на сервер, а не компьютера

    echo "<br>" . date('Y-m-d a g:i:s') . "<br>";

    echo date_default_timezone_get();
    echo "<br>";

    date_default_timezone_set('Europe/Moscow');

    echo date('Y-m-d g:i:s', 1);
    echo date('Y-m-d g:i:s', time() + 60); // +1 минута

    echo '2010 - ' . date('Y');

//    phpinfo(); // выводит все настройки PHP

    //getdate() - получить дату в виде массива
    $date = getdate();
    print_r($date);
    echo $date['year'];

    echo date('Y-m-d g:i:s', strtotime("+ 1 day")); // завтра в это же время

//    mktime(); // Возвращает метку для заданной даты
    echo time() . "<br>";
    echo mktime(date('H'), date('i'), date('s') + 1, date('m'),
                    date('d'), date('Y'));

    $t = mktime(date('H'), date('i'), date('s'), date('m'),
        date('d'), date('Y') + 1);
    echo date('Y-m-d g:i:s', $t);
