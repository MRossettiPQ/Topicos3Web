<html>
 <head>
  <title>Tabuada</title>
 </head>
 <body><?php
    $pos = 0; 
    while($pos <= 10)
    {
        $arrTabuadaTres[] = $pos * 3;
        $pos = $pos + 1;
    }
    foreach($arrTabuadaTres as $numero)
    {
        print $numero. "<br/>";
    }

    
 ?></body>
</html>