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
            $pNomeFilme = $_GET['nomeFilme'];

            $query2 = "SELECT comentario, rating FROM comentarios WHERE id_comentarios = $pId";
            $result2 = mysqli_query($link, $query2);
            while (list($comentario, $rating) = mysqli_fetch_row($result2))
            {
                echo "
                <center>
                <p> Edição de comentario para o filme: ".$pNomeFilme." <p>
                <form name='atualiza' action='enviaEditarComentario.php?idComentario=".$pId."' method='post' >
                <table border='formularioEdicao' bgcolor=#afbdd4>
                    <tr>
                        <td>
                            <table border='dadosFilme' bgcolor=#afbdd4>
                                <tr>
                                    <td style ='width:130px; height:60px;'>
                                        <center>Comentario</center> 
                                    </td>
                                    <td style = 'width:230px; height:60px;'>
                                        <center>     
                                            <input name='comentarioNovo' type='text' value='".$comentario."' style = 'width:600px; height:150px;'>
                                        </center> 
                                    </td>
                                    <td style ='width:90px; height:60px;'>
                                        <center>Nota</center> 
                                    </td>
                                    <td style = 'width:90px; height:60px;'>
                                        <center>         
                                            <input name='notaNova' type='number' value=".$rating." style = 'width:90px; height:150px;' align='center'>
                                        </center> 
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <table border='formularioEdicao' bgcolor=#afbdd4>
                    <tr>
                        <td>
                            <center>
                                <input type='submit' value ='EDITAR'  style='width:466px;height:100px;' align = 'center' margin='0'>
                            </center>                        
                            </form>
                        </td>
                        <td>
                        <form name='deleta' action='enviaRemoveComentario.php?idComentario=".$pId."' method='post' >
                            <center>
                                <input type='submit' value ='DELETAR'  style='width:466px;height:100px;' align = 'center' margin='0'>
                            </center>                        
                        </form>
                    </td>
                    </tr>
                    </table>
                </table>
            </center>";
            }
        ?>    
    </body>
</html>