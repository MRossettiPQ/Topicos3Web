<html lang = "pt-br">
    <head>
        <title>Exemplo</title>
        <meta charset = "UTF-8">
    </head>
        <body>
            <?php
                    $a  = $_REQUEST["PRIMEIRO"];
                    $b  = $_REQUEST["SEGUNDO"];
                    $op = $_REQUEST["OPERADOR"];

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
        </body>
</html>
