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
        include 'cabecalhoCadastro.php';

        $servername = "localhost";
        $username = "root";
        $password = "";
        $link = new mysqli($servername, $username, $password);
            
        if ($link->connect_error) 
        {
            die("Conexão falhou: " . $link->connect_error);
        }
        echo "<br>"; /*Conexão bem sucedida*/
        
        $db = mysqli_select_db($link,'atividade01');
        if (!$db) 
        {
            die ('Base de dados não selecionada:'.mysqli_error($link));
        }
        /*
            $query = "INSERT INTO aula01 (nome, diretor, genero, ano) VALUES ('$pnome', '$pdiretor', '$pgenero','$pano')";
            $result = mysqli_query($link, $query);
        */
        echo "<br><br><br><br><br><br>"
    ?>
        <center>
        <form name="Cadastro" action="envioCadastro.php" method="post" >
            <table border='tabuleiroFilmesExsitentes' bgcolor=#afbdd4>
                <tr>
                    <td>
                        <table border='tabuleiroFilmesExsitentes' bgcolor=#afbdd4>
                            <tr>
                                <td style = "width:130px; height:60px;">
                                    <center>Nome</center> 
                                </td>
                                <td style = "width:130px; height:60px;">
                                        <input name="nome" type="text">
                                </td>
                                <td style = "width:130px; height:60px;">
                                    <center>Diretor</center> 
                                </td>
                                <td style = "width:130px; height:60px;">
                                        <input name="diretor" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td style = "width:130px; height:60px;">
                                    <center>Genero</center> 
                                </td>
                                <td style = "width:130px; height:60px;">
                                        <input name="genero"type = "text">
                                </td>
                                <td style = "width:130px; height:60px;">
                                    <center>Ano</center> 
                                </td>
                                <td style = "width:130px; height:60px;">
                                        <input name="ano"type = "number">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" style = "width:635px; height:60px;">
                    </td>
                </tr>
        </form>
        </center>
    </body>
</html>