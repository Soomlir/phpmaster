<?php
    require_once 'classes/Car.php';

    function debug($data) {
        echo "<pre>" . print_r($data, 1) . "</pre>";
    }

    $car1 = new Car();
    debug($car1);

    $car1->wheels = 4;
    $car1->brand = 'Opel';
    $car1->speed = 200;
    debug($car1);

    $car2 = new Car();
    $car2->wheels = 6;
    $car2->brand = 'BMW';
    $car2->speed = 250;
    $car2->year = 2022;
    debug($car2);
