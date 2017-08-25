<html lang = "pt-br">
<head>
   <title>Exemplo</title>
   <meta charset = "UTF-8">
</head>
<body>
   <form action="" method="get" >
      Primeiro Numero: <input name="PRIMEIRO" type="text"><br>
      Segundo Numero: <input name="SEGUNDO" type="text"><br>
      <input type="submit" name="OPERADOR" value="+">     
      <input type="submit" name="OPERADOR" value="-">     
      <input type="submit" name="OPERADOR" value="*">     
      <input type="submit" name="OPERADOR" value="/">     
   </form> 
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
</body>
</html>
