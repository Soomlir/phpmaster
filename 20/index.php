<?php
    $str = 'Привет, Мир';
    echo mb_strpos($str, 'и', 0, 'utf-8'); // поиск символа - 2
    echo mb_strpos($str, 'и', 3, 'utf-8'); // и из Мир - 9
    // var_dump(mb_strpos($str, 'и', 0, 'utf-8')); // true

    if (mb_strpos($str, 'и', 3, 'utf-8') !== true) echo "OK";
    else echo "NO";

    $str2 = 'привет, мир!';
    $str3 = 'ПРИВЕТ, МИР!';

    echo strtoupper($str2);
    echo strtolower($str3);

    $str3 = 'Привет, мир!';
    echo mb_substr($str, 2,null,'utf-8');
    echo mb_substr($str, -4, 3, 'utf-8');

    //htmlspecialchars - Защита от XSS уязвимости
    $str4 = '<h1><i>Привет</i>, меня зовут <b>Игорь</b>!</h1><iframe src="#"></iframe>'; // # - Не хороший сайт
    echo htmlspecialchars($str4, ENT_QUOTES, 'utf-8', false); // двойное кодирование

     $str5 = '<h1><i>Привет</i>, меня зовут <b>Игорь</b>!</h1><iframe src="#"></iframe>';
     echo htmlspecialchars_decode($str5); // сущности преобразуются в реальный html-код (на практике практически не
     // применяется

    // htmlentities(); -




