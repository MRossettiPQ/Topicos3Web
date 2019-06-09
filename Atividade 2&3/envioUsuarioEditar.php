<?php
    //Chamado do conexão da pagina
    include 'setupSESSION.php';
    include 'setupConectaBanco.php';

    $pId = $_GET['id'];

    if((empty($_POST['tipoProfile'])) || (empty($_POST['senhaNova'])) || (empty($_POST['nomeNovo']))|| (empty($_POST['nascimentoNovo']))|| (empty($_POST['emailNovo'])))
    {        
        echo "<script>
            alert('Todos os campos são obrigatorios.');
            window.history.back();
        </script>";
    }
    else
    {
        $pTipoProfile = $_POST['tipoProfile'];
        $pSenhaNova = $_POST['senhaNova'];
        $pNomeNovo = $_POST['nomeNovo'];
        $pNascimentoNovo = $_POST['nascimentoNovo'];
        $pEmailNovo = $_POST['emailNovo'];
        $novaSenha = md5($pSenhaNova);
        
        $query = "UPDATE usuario SET FK_Profiles_id_Profile='$pTipoProfile',senha='$novaSenha',nome_Usuario='$pNomeNovo',dataNasc='$pNascimentoNovo',email='$pEmailNovo' WHERE id_Usuario=$pId";
        if($link->query($query) === TRUE)
        {
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