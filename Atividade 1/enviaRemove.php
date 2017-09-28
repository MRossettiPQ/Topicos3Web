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
    
    $pId = $_GET['id'];

    $query2 = "DELETE FROM comentarios WHERE id_filmes=$pId";
    $result2 = mysqli_query($link, $query2);

    $query1 = "DELETE FROM filmes WHERE id_filmes=$pId";
    $result1 = mysqli_query($link, $query1);


    $link->close();
    include 'main.php';
?>