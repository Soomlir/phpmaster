<?php
    $date = date_create(date('2022-08-25')); // это уже объект
    print_r($date);
    echo date_format($date, 'Y-m-d H:i:s');
    // c помощью echo Нельзя распечать объект
    date_add($date, date_interval_create_from_date_string('2 days + 2 hours + 10 minutes + 5 seconds'));
    echo "<br>";
    echo date_format($date, 'Y-m-d H:i:s');

    //microtime() - Возвращает текущую метку с милисекундами
    echo microtime();

    var_dump(microtime()); // string
    var_dump(microtime(true)); // float

    $start = microtime(true);
    $end = microtime(true);

    echo $end - $start;

