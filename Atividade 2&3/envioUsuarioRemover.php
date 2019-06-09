<?php    
    //Chamado do conexão da pagina
    include 'setupSESSION.php';
    include 'setupConectaBanco.php';

    $pId = $_GET['id'];

    $query = "UPDATE usuario SET id_profiles='$pTipoProfile',login='$pLoginNovo',password='$pSenhaNova',nome='$pNomeNovo',nascimento='$pNascimentoNovo',email='$pEmailNovo' WHERE id=$pId";
    if ($link->query($query) === TRUE)
    {
        //echo "Usuário excluído com sucesso";
    }
    else
    {
        echo "Não é possível excluir usuário logado";
    }
    $link->close();
    include 'mostraComum.php';
?>