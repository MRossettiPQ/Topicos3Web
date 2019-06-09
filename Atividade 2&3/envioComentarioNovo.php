<?php
    //Chamado do conexão da pagina
    include 'setupSESSION.php';
    include 'setupConectaBanco.php';

    if((empty($_POST["comentarioNovo"])) || (empty($_POST["notaNova"])))
    {        
        echo "<script>
            alert('Os campos comentario e nota são obrigatorios.');
            window.history.back();
        </script>";
    }
    else
    {
        $pIdUsuario = $_SESSION['idUser'];
        $pIdJogo = $_GET["idJogo"];
        $pComentario = $_POST["comentarioNovo"];
        $pNota = $_POST["notaNova"];
        $data = date("Y-m-d");
        
        $query = "INSERT INTO comentarios (comentario, nota, FK_Jogos_id_Jogo, FK_Usuario_id_Usuario, dataComentario) VALUES ('$pComentario', '$pNota', '$pIdJogo', '$pIdUsuario','$data')";
        if($link ->query($query) === TRUE)
        {
            /*echo "Inclusão feita com sucesso";*/
        }
        else
        {
            echo "<br>"."Erro: ".$query."<br>".$link->error;
        }
        $link->close();        
        echo "<script>
            window.location.href = 'mostraComum.php';
        </script>";
    }
?>