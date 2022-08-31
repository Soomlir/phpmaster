<?php
    echo 5 + 3;
    echo -5 - 5 *2;
    echo 20 % 3; // из левого вычитает правое. - Деление по модулю (отстаток от деления)
    $var = 3;
    echo $var ** 2; // оператор появился с версии PHP 5.6
    echo pow(2, 3); //возведение в степень. 1 аргумент - число, которое хотим возвести в степень. 2 - сама степень.

    $a = 5;
    $b = $a; // создается 2 ячейки в памяти
    var_dump($a);
    $a = 7;
    var_dump($a);
    var_dump($b);

    // Присваивание по ссылке
    $a = 5;
    $b = &$a; // вторая ячейка не создается, присваивая по ссылке, создаем 2 указатель, который указывает на ячейку
    var_dump($a);
    $a = 7; // a - 7, b - 7
    var_dump($b);


    echo 5 + '3 test'; // 8
