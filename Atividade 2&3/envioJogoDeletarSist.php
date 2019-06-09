<?php
    //Chamado do conexão da pagina
    include 'setupSESSION.php';
    include 'setupConectaBanco.php';

    $pIdJogo = $_GET["idJogo"];

    $query2 = "DELETE FROM comentarios WHERE FK_Jogos_id_Jogo=$pIdJogo";
    $result2 = mysqli_query($link, $query2);

    $query1 = "DELETE FROM jogos WHERE id_Jogo = $pIdJogo";
    $result1 = mysqli_query($link, $query1);


    $link->close();
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