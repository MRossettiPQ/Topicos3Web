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
            echo "<br>";
        
            $db = mysqli_select_db($link,'atividade01');
            if (!$db) 
            {
                die ('Base de dados não selecionada:'.mysqli_error($link));
            }
            $pId = $_GET['id'];
            $query = "SELECT nome, diretor, genero, ano FROM filmes WHERE id_filmes = $pId";
            $result = mysqli_query($link, $query);

            while ((list($nome, $diretor, $genero, $ano) = mysqli_fetch_row($result)))
            {
            echo "
            <br><br><br>
            <center>
            <form name='atualiza' action='enviaEditar.php?id=".$pId."' method='post' >
                <table border='formularioEdicao' bgcolor=#afbdd4>
                    <tr>
                        <td>
                            <table border='dadosFilme' bgcolor=#afbdd4>
                                <tr>
                                    <td style ='width:130px; height:60px;'>
                                        <center>Nome</center> 
                                    </td>
                                    <td style = 'width:230px; height:60px;'>
                                            <input name='nomeNovo' type='text' value='".$nome."' style = 'width:230px; height:60px;'>
                                    </td>
                                    <td style = 'width:130px; height:60px;'>
                                        <center>Diretor</center> 
                                    </td>
                                    <td style = 'width:230px; height:60px;'>
                                            <input name='diretorNovo' type='text' value='".$diretor."' style = 'width:230px; height:60px;'>
                                    </td>
                                </tr>
                                <tr>
                                    <td style = 'width:130px; height:60px;'>
                                        <center>Genero</center> 
                                    </td>
                                    <td style = 'width:230px; height:60px;'>
                                            <input name='generoNovo'type = 'text' value='".$genero."' style = 'width:230px; height:60px;'>
                                    </td>
                                    <td style = 'width:130px; height:60px;'>
                                        <center>Ano</center> 
                                    </td>
                                    <td style = 'width:230px; height:60px;'>
                                            <input name='anoNovo'type = 'number' value='".$ano."' style = 'width:230px; height:60px;'>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <center>
                                <input type='submit' value ='EDITAR'  style='width:740px;height:100px;' align = 'center' margin='0'>
                            </center>
                        </td>
                    </tr>
            </form>
        </center>";
        }
        ?>    
    </body>
</html>