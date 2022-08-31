<?php
    $str = 'Иванов Иван Иванович';
    $data = explode(" ", $str, 1) ; // limit - количество элементов массива
    var_dump($data); //explode - разбить строку на массив по разделителю
    echo $data[0];

    $data2 = ['Иванов', 'Иван', 'Иванович'];
    $str2 = implode(" ", $data2); // Делает из массива, строку по разделителю
    echo $str2;

    $str3 = '\n  <p>Hello</p>\n';
    $str3 .= '\n<p>World</p>  \t\n';
    echo trim($str3, "\t"); // 2 - удалить только то, что хотим вырезать
    // rtrim() ltrim()

    $str4 = '...... test,';
    echo ltrim($str4, ',');

    // md5() - Хэширование (шифрование) строк
    echo $str5 = 'password';
    md5(md5($str5)); // 32 символа хэш md5

    $str6 = "Hello\nWorld\n";
    echo nl2br($str6);







