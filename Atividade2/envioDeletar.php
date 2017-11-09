<?php    
    include 'setupConectaBanco.php';

    $deleta = $_GET['id'];

    if ($deleta != $_SESSION['id_user'])
    {    
        $query = "DELETE FROM users WHERE id=$deleta";
        if ($link->query($query) === TRUE)
        {
            echo "Usuário excluído com sucesso";
        }
    }
    else
    {
        echo "Não é possível excluir usuário logado";
    }
    $link->close();
    include 'mostraComum.php';
?>
