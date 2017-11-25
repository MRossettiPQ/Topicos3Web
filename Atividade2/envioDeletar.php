<?php    
    include 'setupConectaBanco.php';

    $deleta = $_GET['id'];

    $query = "DELETE FROM users WHERE id=$deleta";
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
