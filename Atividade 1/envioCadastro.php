<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $link = new mysqli($servername, $username, $password);

    if ($link->connect_error) 
    {
        die("Conexão falhou: " . $link->connect_error);
    }

    $db = mysqli_select_db($link,'atividade01');
    if (!$db) 
    {
        die ('Base de dados não selecionada:'.mysqli_error($link));
    }
    if((empty($_POST["nome"])) || (empty($pdiretor = $_POST["diretor"])) || (empty($pgenero = $_POST["genero"])) || (empty($pano = $_POST["ano"])))
    {
        include 'cadastro.php';
    }
    else
    {
        echo "<br>";
        $pnome = $_POST["nome"];
        $pdiretor = $_POST["diretor"];
        $pgenero = $_POST["genero"];
        $pano = $_POST["ano"];
        

        $query = "INSERT INTO filmes (nome, diretor, genero, ano) VALUES ('$pnome', '$pdiretor', '$pgenero','$pano')";
        if($link ->query($query) === TRUE)
        {
            /*echo "Inclusão feita com sucesso";*/
        }
        else
        {
            echo "<br>"."Erro: ".$query."<br>".$link->error;
        }
        $link->close();
        include 'main.php';
    }
?>