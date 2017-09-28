<html>
<head>
    <title>Personal Movie DB</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="menu.css"/>
    <link rel="stylesheet" type="text/css" href="background.css"/>
</head>
<body bgcolor=#d8dfea>
<?php
        //Chamado do cabeçalho da pagina
        include 'cabecalho.php';
        //Conexão Banco de Dados
            
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
        $query = "SELECT id_filmes, nome, diretor, genero, ano FROM filmes";
        $result = mysqli_query($link, $query);
        echo 
        "<center>
            <table border='tabuleiroFilmesExsitentes' bgcolor=#afbdd4>
                <tr>";
        //percorrimento das linhas retornadas pela query
        $id_lista = 1;
        while (list($id_filmes, $nome, $diretor, $genero, $ano) = mysqli_fetch_row($result))
        {
            echo "
                <td>
                    <table border='tabuleiroFilmesExsitentes' bgcolor=#afbdd4>
                        <tr>
                            <td style='width:148px;height:218px;'><a href='paginaFilme.php?id=".$id_filmes."'>
                                <center>        
                                    <img src='Imagens/".$nome.".jpg' alt='Capa' style='width:148px;height:218px;'>
                                </center>    
                            </td>
                        </tr>
                        <tr>
                            <td style='width:148px;'><a href='paginaFilme.php?id=".$id_filmes."'>
                                <center>        
                                    ".$nome."
                                </center>    
                            </td>
                        </tr>
                    </table>
                </td>";
            if($id_lista == 7)
            {
                echo "</tr><tr>";
                $id_lista = 0;
            }
            $id_lista++;
        }
        echo    "</tr>
            </table>
        </center>";
    ?>