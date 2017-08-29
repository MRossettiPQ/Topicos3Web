<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $link = new mysqli($servername, $username, $password);

    if ($link->connect_error) 
    {
        die("Conexão falhou: " . $link->connect_error);
    }
    echo "Conexão bem sucedida<br>";

    $db = mysqli_select_db($link,'auladw');
    if (!$db) 
    {
        die ('Base de dados não selecionada:'.mysqli_error($link));
    }
    
    $pnome = $_POST["nome"];
    $psobrenome = $_POST["sobrenome"];
    $pemail = $_POST["email"];
    

    $query = "INSERT INTO aula01 (nome, sobrenome, email) VALUES ('$pnome', '$psobrenome', '$pemail')";
    $result = mysqli_query($link, $query);

    echo $query;            
    $query = "SELECT id, nome, sobrenome, email FROM aula01";
    $result = mysqli_query($link, $query);
    //percorrimento das linhas retornadas pela query
    while (list($id, $nome, $sobrenome, $email) = mysqli_fetch_row($result))
    {
        echo "<br>".$id." ".$nome." ".$sobrenome." ".$email;
    }        
?>