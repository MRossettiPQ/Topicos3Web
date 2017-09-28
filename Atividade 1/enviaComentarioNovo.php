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
    $pId = $_GET["idFilme"];
    $db = mysqli_select_db($link,'atividade01');
    if (!$db) 
    {
        die ('Base de dados não selecionada:'.mysqli_error($link));
    }
    if((empty($_POST["comentarioNovo"])) || (empty($_POST["notaNova"])))
    {        
        echo "<script>
        alert('O campo nome é obrigatorio.');
        
        window.location.href = 'paginaFilme.php?id=".$pId."';

        </script>";
    }
    else
    {
        $pComentario = $_POST["comentarioNovo"];
        $pNota = $_POST["notaNova"];

        

        $query = "INSERT INTO comentarios (id_filmes, comentario, rating) VALUES ('$pId','$pComentario', '$pNota')";
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