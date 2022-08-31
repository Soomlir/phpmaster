<?php
    // PHP7 вышел в 2015 - PHP7 стал значительно быстрее PHP5 (PHP6 Не было)

    // Оператор объединения с NULL
    echo $user = isset($_GET['user']) ? $_GET['user'] : 'guest';
    echo $user = $_GET['user'] ?? 'guest';
    echo $user = $_GET['user'] ?? $_POST['user'] ?? 'guest';

    // Оператор spaceship (Космический корабль)
    $a = 1;
    $b = 2;
    echo $a <=> $b; // проверяет на -меньше -равно -больше

    if (($a <=> $b) === 1) {
        echo "$a > $b";
    } elseif (($a <=> $b) === -1) {
        echo "$a < $b";
    } else {
        echo "$a == $b";
    }

    // Возможность определять массив констант
    define("ANIMALS", [
        'dog',
        'cat',
        'bird'
    ]);

    echo ANIMALS[2];

    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', 'root');
    define('DBBASE', 'database');

    define('DB', [
       'localhost',
       'root',
       'root',
       'database'
    ]);
    echo DB[1]; // login

    define('DB', [
        'DBHOST' => 'localhost',
        'DBUSER' => 'root',
        'DBPASS' => 'root',
        'DBBASE' => 'database'
    ]);
    echo DB['DBUSER'];

    // Групповые декларации use - группировка одинаковых пространств имен

    // Декларация скалярных типов
    function sum(int ...$ints) { // $int - массив
        return array_sum($ints);
    }

    // Декларация возможных значений
    function sum2($a, $b): int {
        return $a + $b;
    }

    // Функция целочисленного деления intdiv()
    intdiv(10,3);
