<?php
    /*
     * boolean: true false, integer, float, string
     */
    $is_auth = false;
    $var = true;
    echo $var; // 1
    $var2 = false;
    echo $var2; // false - преобразуется к пустой строке
    var_dump($var2); // функция предназначенная для дебага // bool(false)
    echo gettype($var);

    $int = 123;
    var_dump($int);

    $float = 13.3;
    var_dump($float);

    echo $str = 'This is string';
    var_dump($str);

    $str2 = "This \"is\" value $int";
    echo $str2;

    $str3 = "This trick \$int";
    echo $str3;

    //HEREDOC - аналог "", LABEL - индификатор.
    $str4 = <<<LABEL
        This "is" 'string' $int
LABEL;
    echo $str4;

    //NOWDOC - аналог ''
    $str5 = <<<'HERE'
        This "is" 'string' $int
HERE;
    echo $str5;





