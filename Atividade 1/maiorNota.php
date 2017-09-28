<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $link = new mysqli($servername, $username, $password);
        $numFilmesLinha = 3; 

        if ($link->connect_error) 
        {
            die("Conexão falhou: " . $link->connect_error);
        }
        echo "<br>";

        $db = mysqli_select_db($link,'atividade01');
        if (!$db) 
        {
            die ('Base de dados não selecionada:'.mysqli_error($link));
        }        
        $query = "SELECT id_filmes, nome, diretor, genero, ano FROM filmes ORDER BY id_filmes DESC";
        $result = mysqli_query($link, $query);

        //percorrimento das linhas retornadas pela query
        $num = 0;
        echo 
        "<center>
            <table border='tabuleiroFilmesExsitentes' bgcolor=#afbdd4>
                <tr>";
        while ((list($id_filmes, $nome, $diretor, $genero, $ano) = mysqli_fetch_row($result)) && ($num <= $numFilmesLinha))
        {
            echo 
            "
                <td style='width:297px;height:437px;'><a href='paginaFilme.php?id=".$id_filmes."'>                
                    <center>        
                    <img src='Imagens/".$nome.".jpg' alt='Capa' style='width:297px;height:437px;'>
                    </center>    
                </td>
            ";
            $num = $num + 1;
        }
        echo " </tr><tr>";
        $result = mysqli_query($link, $query);
        $num = 0;
        while ((list($id_filmes, $nome, $diretor, $genero, $ano) = mysqli_fetch_row($result)) && ($num <= $numFilmesLinha))
        {
            echo 
            "
                <td style='width:297px;'><a href='paginaFilme.php?id=".$id_filmes."'>                
                    <center>        
                    ".$nome."
                    </center>    
                </td>
            ";
            $num = $num + 1;
        }
        echo "</tr></table>
        </center>";     
    ?>
