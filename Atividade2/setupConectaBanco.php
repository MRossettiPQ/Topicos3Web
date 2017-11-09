<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $link = new mysqli($servername, $username, $password);
            
    if ($link->connect_error) 
    {
        die("Conexão falhou: ".$link->connect_error);
    }
    echo "<br>";
    $db = mysqli_select_db($link,'avalia02a');
    if (!$db) 
    {
        die ('Base de dados não selecionada:'.mysqli_error($link));
    }
?>