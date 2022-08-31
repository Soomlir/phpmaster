<?php
    /*
     * if (expression) {
     *  instructions;
     * }
     */

    $light = 'green';

    if ($light == 'green') {
        echo 'We may go';
    }

    var_dump((bool) 0); // Приведение к булеан

    if(5 > 3) {
        echo "ok";
    }

    if (5 != 4) echo "OK";

    if ($light == 'green') {
        echo 'We may go';
    } else {
        echo "We must stop";
    }

    if ($light == 'green') {
        echo 'We may go';
    } elseif ($light == 'yellow') {
        echo 'We may ready';
    } else {
        echo "We must stop";
    }
