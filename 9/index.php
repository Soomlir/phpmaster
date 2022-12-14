<?php
    // $arr = array(1, 2, 3, 4);
    $arr = ['Ivanov', 'Petrov', 'Sidorov']; // Обьявление с версии 5.4
    echo $arr; // вывод - Array
    // Для распечатки массивов - var_dump() или print_r()

    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    // $arr[0] - называются ключами, либо индексами
    // Если обратиться к несуществуещему индексу, то будет ошибка, как если бы обратились к не существующей переменной
    echo $arr{2}; // можно и так обращаться к элементам массивов
    // В Массив можно ложить любые типы данных
    $arr2 = [1, 2, 'cat', 4, ['apple','banana', 'orange'], 6, 7]; // Многомерный массив (если массив вложен в массив)
    echo $arr2[2][2]; // orange

    $arr3 = [2 => 'Ivanov', 3 => 'Petrov', 4 => 'Sidorov']; // можно задать только 2, и нумерация пойдет по нарастающей

    // Ассоциативные массивы - (ключ является строкой, а не числом)
    $goods = [
        [
            'title' => 'Nokia',
            'price' => 100,
            'description' => 'Крутой телефон последней модели'
        ],
        [
            'title' => 'iPad',
            'price' => 250,
            'description' => 'Новомодный планшет'
        ]
    ];

    echo $goods[0]['title']; // Nokia
    echo $goods[1]['title']; // iPad

    $arr[] = 123; // добавление в конец массива
    $arr[99] = 7; // указываем индекс, который нужен




