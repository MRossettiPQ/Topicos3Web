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
    $pId = $_GET['id'];
    $db = mysqli_select_db($link,'atividade01');
    if (!$db) 
    {
        die ('Base de dados não selecionada:'.mysqli_error($link));
    }
    if((empty($_GET['id'])) || (empty($_POST['nomeNovo'])) || (empty($_POST['diretorNovo'])) || (empty($_POST['generoNovo'])))
    {        
        echo "<script>
        alert('O campo nome é obrigatorio.');
        
        window.location.href = 'enviaEditar.php?id=".$pId."';

        </script>";
    }
    else
    {
        $pNome = $_POST['nomeNovo'];
        $pAno = $_POST['anoNovo'];
        $pDiretor = $_POST['diretorNovo'];
        $pGenero = $_POST['generoNovo'];
        
        $query = "UPDATE filmes SET nome='$pNome',diretor='$pDiretor',genero='$pGenero',ano='$pAno'WHERE id_filmes=$pId";
        if($link ->query($query) === TRUE)
        {

        }
        else
        {
            echo "<br>"."Erro: ".$query."<br>".$link->error;
        }
        $link->close();
        include 'main.php';
    }
?>