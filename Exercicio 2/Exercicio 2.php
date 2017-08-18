<html>
<head>
 <title>Array Qualquer</title>
</head>
<body>

<p></p>                                                                                                
   <?php
   include 'Exercicio 2 - Cabecalho.php';                                                            
   ?>

<?php
   //Exercicio 1
   $arrayCarro = array("chave1" => "Gol", "chave2" => "Celta", "chave3" => "Palio");                  
   foreach($arrayCarro as $arriado)
   {
       print $arriado. "<br/>";
   }
   //Exercicio 2
   $keys = array_keys($arrayCarro); 
   print_r($keys); echo "<br>";
   //Exercicio 3
   $values = array_values($arrayCarro); 
   print_r($values);
   //Exercicio 4
   $comidas = array('pastel', 'massa', 'polenta','arroz');                                           
   end($comidas);
   $com = current($comidas);
   echo $com."<br>";
   while ($com = prev($comidas))
   {
   echo $com."<br>";
   }


   //Exercicio 6
   if (!require 'Exercicio 2 - Cabecalho.php') {
   echo "<br> arquivo inexistente<br>";
   var_dump($x);
   }
   echo "<br><b>execução após o aviso</b><br>";
?>  
</body>
</html>