<?php
    //Chamado do conexão da pagina
    include 'setupSESSION.php';
    include 'setupConectaBanco.php';

    $pId = $_GET['idJogo'];
        
    $query = "UPDATE jogos SET codLibera='1' WHERE id_Jogo=$pId";
    if($link->query($query) === TRUE)
    {
    }
    else
    {
        echo "<br>"."Erro: ".$query."<br>".$link->error;
    }
    $link->close();        
    echo "<script>
        window.location.href = 'mostraJogoMANAGER.php';
    </script>";
?>