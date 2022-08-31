<?php
    $num = [1, 2, 3];
    $names = ['Ivanov', 'Petrov'];
    echo count($num);
    echo count($names);

    function sum() {
        echo 3 + 7;
    }

    sum();

    function sum2($a = 1, $b = 2) {
        echo $a + $b;
        echo "<br>";
    }

    $x = 100;
    $y = 11;

    sum2(4, 3);
    sum2($x, $y);

    $a = 5;
    $b = 10;

    function sum3(&$a, $b) {
        echo $a + $b;
        echo "<br>";
        $a = 111;
    }

    sum3($a, $b);
    echo $a; // 111

    function sum4($a, $b) {
        $c = $a + $b;
        return $c;
    }

    echo 4 + sum4(3, 7);

    $result = sum4(3, 2);
    echo $result;

    function my_array_keys($arr) {
        $data = [];
        foreach ($arr as $k => $v) {
            $data[] = $k;
        }
        return $data;
    }

    $key = my_array_keys($names);
    echo $key;

    $names2 = ['Ivan' => 'Ivanov', 'Petr' => 'Petrov'];
    $key2 = my_array_keys($names2);
    echo $key2;