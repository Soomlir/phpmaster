<?php
    function clear() {
        global $db;
        foreach ($_POST as $key => $value) {
            $_POST[$key] = mysqli_real_escape_string($db, $value);
        }
    }

    function save_mess() {
        global $db;
        clear();
        extract($_POST);
//        $id = (int)$_POST['id'];
        $query = "INSERT INTO `gb` (name, text) VALUES ('$name', '$text')";
        mysqli_query($db, $query);
    }

    function get_mess() {
        global $db;
        $query = "SELECT * FROM `gb` ORDER BY id DESC";
        $res = mysqli_query($db, $query);
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }

    function array_print($arr) {
        echo "<pre>" . print_r($arr, true) . "</pre>"; // true - не выводить, а буферизировать данные
    }
