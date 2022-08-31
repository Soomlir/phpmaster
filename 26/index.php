<?php
    setcookie('test', 'My value', time() + 3600); // функция, которая работает с заголовками
    setcookie('test', '', time() - 3600); // Удаляем куку
    echo $_COOKIE['test'];

    isset($_COOKIE['counter']) ? setcookie('counter', ++$_COOKIE['counter'], time()+3600, '/')
                                : setcookie('counter', 1, time()+3600, '/');

    echo isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 1;