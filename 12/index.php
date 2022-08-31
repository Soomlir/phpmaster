<?php
    /*
     * foreach (array_expression as $value) {
     *         statement
     * }
     *
     * foreach (array_expression as $key => $value) {
     *         statement
     * }
     */
    $arr = ['Ivanov', 'Petrov', 'Sidorov'];

    foreach ($arr as $item) {
        echo $item . "<br>";
    }

    foreach ($arr as $key => $item) {
        echo $key . " " . $item . "<br>";
    }

    for ($i = 0; $i <= 30; $i++) {
        echo $i . "<br>";
        if ($i == 7) {
            break;
        }
    }

    for ($i = 0; $i <= 30; $i++) {
        if ($i == 10) continue;
        echo $i . "<br>";
    }

