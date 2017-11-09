<?php
    include 'setupConectaBanco.php';

    $pId = $_GET['id'];

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
        
        $query = "UPDATE users SET id_profiles='$pTipoProfile',login='$pLoginNovo',password='$pSenhaNova',nome='$pNomeNovo',nascimento='$pNascimentoNovo',email='$pEmailNovo' WHERE id=$pId";
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