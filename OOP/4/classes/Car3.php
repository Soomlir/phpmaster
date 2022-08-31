<?php
    // construct - вызывается всегда, при создании объекта
    // destruct - срабатывает, когда освобождаются все ссылки на объект (удаляется объект из памяти)
    class Car3 {

        public $color = 'black';
        public $wheels;
        public $speed = 180;
        public $brand;

        public function __construct($color, $wheels = 4, $speed, $brand) {
            $this->color = $color;
            $this->wheels = $wheels;
            $this->speed = $speed;
            $this->brand = $brand;
        }


        public function getCarInfo() { // при объявлении методов, модификаторы не обязательны
            echo $this->color; // this - указатель на текущий объект
        }

        public function __destruct() { // сложную логику в деструкторе писать смысла нет
            var_dump($this);           // Например в конструкторе открыть соединение к БД, а в деструкторе закрыть
        }
    }

