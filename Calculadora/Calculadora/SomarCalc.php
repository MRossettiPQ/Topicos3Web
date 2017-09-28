<?php
    $a = $_POST["PRIMEIRO"];
    $b = $_POST["SEGUNDO"];
    $op = $_POST["OPERADOR"];

    if( !empty($op) ) {
        if($op == '+')
            $c = $a + $b;
        else if($op == '-')
            $c = $a - $b;
        else if($op == '*')
            $c = $a*$b;
        else
            $c = $a/$b;

        echo "O resultado da opera&ccedil;&atilde;o &eacute;: $c";
    }
?>