<?php
    //Chamado do conexão da pagina
    include 'setupSESSION.php';
    include 'setupConectaBanco.php';

    $idJogo = $_GET['idJogo'];

    if((empty($_POST['nomeJogo'])) || empty($_POST['jogoEstudio']) || (empty($_POST['jogoLancado'])) || (empty($_POST['jogoPlayers'])) || (empty($_POST['jogoTag']))|| (empty($_POST['jogoDesc']))|| (empty($_POST['jogoClass'])))
    {        
        echo "<script>
            alert('Todos os campos são obrigatorios.');
            window.location.href = 'mostraJogoEditarSist.php?idJogo=".$idJogo."';
        </script>";
    }
    else
    {
        $pId = $_GET['idJogo'];
        $pIdUsuario = $_SESSION['idUser'];
        $pNomeJogo = $_POST['nomeJogo'];
        $pJogoLancado = $_POST['jogoLancado'];
        $pJogoPlayers = $_POST['jogoPlayers'];
        $pJogoTag = $_POST['jogoTag'];
        $pJogoDesc = $_POST['jogoDesc'];
        $pJogoClass = $_POST['jogoClass'];
        $pIdEstudio = $_POST['jogoEstudio'];
        $data = date("Y-m-d");  
        $query = "UPDATE jogos SET nome_Jogo='$pNomeJogo', dataLanca='$pJogoLancado', players='$pJogoPlayers', descricao='$pJogoDesc', tag='$pJogoTag', classificacao='$pJogoClass', FK_Usuario_id_Usuario='$pIdUsuario', dataAddJogo='$data', nomeEstudio='$pIdEstudio' WHERE id_Jogo=$pId";

        if($link->query($query) === TRUE)
        {
        }
        else
        {
            echo "<br>"."Erro: ".$query."<br>".$link->error;
        }
        $link->close();        
        echo "<script>
            window.location.href = 'mostraJogoROOT.php';
        </script>";
    }
?>