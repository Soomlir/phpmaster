<?php
    // str_replace() - может искать не только в строке, но и в массиве
    $str = '[i]Привет[/i]! Меня зовут [b]Игорь[/b]!';
    $str = str_replace('[b]', '<b>', $str);
    $str = str_replace('[/b]', '</b>', $str);
    echo $str;

    $search = ['[b]', '[/b]', '[i]', '[/i]'];
    $replace = ['<b>', '</b>', '<i>', '</i>'];
    $str = str_replace($search, $replace, $str);

    // str_ireplace() - заменяет с учетом  регистра, а str_replace() - без учета регистра

    $str2 = '[i]Привет[/i]! Меня зовут [b]Игорь[/b]! <script>alert("XSS");</script>';
    echo strip_tags($str2, '<b><i>'); // Достаточно указать, только открывающий тег

    //str_len() - считает количество символов в строке
    $str3 = "Hello";
    echo strlen($str3); // 5 байт

    $str4 = 'Привет';
    echo strlen($str4); // считает не символы, а байты (12)
    echo mb_strlen($str4, 'utf-8'); // 6




