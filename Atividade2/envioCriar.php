<?php
    include 'setupConectaBanco.php';
    if((empty($_POST['loginNovo'])) || (empty($_POST['tipoProfile'])) || (empty($_POST['senhaNova'])) || (empty($_POST['nomeNovo']))|| (empty($_POST['nascimentoNovo']))|| (empty($_POST['emailNovo'])))
    {        
        echo "<script>
        alert('Todos os campos são obrigatorios.');
            window.history.back();
        </script>";
    }
    else
    {
        $pLoginNovo = $_POST['loginNovo'];
        $pTipoProfile = $_POST['tipoProfile'];
        $pSenhaNova = $_POST['senhaNova'];
        $pNomeNovo = $_POST['nomeNovo'];
        $pNascimentoNovo = $_POST['nascimentoNovo'];
        $pEmailNovo = $_POST['emailNovo'];
        $newLogin = preg_replace('/[^A-Za-z0-9\-]/', '', $pLoginNovo);
        
        $query = "INSERT INTO users (id_profiles, login, password, nome, nascimento, email) VALUES ('$pTipoProfile','$newLogin','$pSenhaNova','$pNomeNovo','$pNascimentoNovo','$pEmailNovo')";
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