<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $link = new mysqli($servername, $username, $password);

    if ($link->connect_error) 
    {
        die("Conexão falhou: " . $link->connect_error);
    }
    echo "<br>";

    $db = mysqli_select_db($link,'atividade01');
    if (!$db) 
    {
        die ('Base de dados não selecionada:'.mysqli_error($link));
    }
    
    $pId = $_GET['idComentario'];
    
    $query = "DELETE FROM comentarios WHERE id_comentarios = $pId";
    if($link ->query($query) === TRUE)
    {

    }
    else
    {
        echo "<br>"."Erro: ".$query."<br>".$link->error;
    }
    $link->close();
    include 'main.php';
?>