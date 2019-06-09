<?php
    //Chamado do conexão da pagina
    include 'setupSESSION.php';
    include 'setupConectaBanco.php';

    $pIdComentario = $_GET["idJogo"];
    
    $pIdJogo = $FK_Jogos_id_Jogo;
    $query = "DELETE FROM jogos WHERE id_Jogo = $pIdComentario";
    if($link ->query($query) === TRUE)
    {
        
    }
    else
    {
        echo "<br>"."Erro: ".$query."<br>".$link->error;
    }
    $link->close();            
    echo "<script>
        window.history.back();
    </script>";
?>