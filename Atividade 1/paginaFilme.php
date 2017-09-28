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
            
            $pId = $_GET['id'];
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
            $query = "SELECT nome, diretor, genero, ano FROM filmes WHERE id_filmes = $pId";
            $result = mysqli_query($link, $query);

            $query2 = "SELECT id_comentarios, comentario, rating FROM comentarios WHERE id_filmes = $pId";
            $result2 = mysqli_query($link, $query2);
            //percorrimento das linhas retornadas pela query
            while (list($nome, $diretor, $genero, $ano) = mysqli_fetch_row($result))
            {
                echo "
                <center>
                <table border='cartaoFilme' bgcolor=#afbdd4>
                    <tr>
                        <td>
                            <img src='Imagens/".$nome.".jpg' alt='Capa' style='width:323px;height:476px;'>
                        </td>
                        <td cellpadding='0'topmargin = 10>
                            <table border='dadosComentarios' bgcolor=#afbdd4 cellpadding='0' aling='left'>
                                <tr>
                                    <td>
                                        <table border='dados' bgcolor=#afbdd4 cellpadding='0' aling='left'>
                                            <tr>
                                                <td style='width:150px;height:60px;'>
                                                    <center>
                                                    <b>TITULO</b>
                                                    </center>
                                                </td>
                                                <td style='width:150px;height:60px;'>
                                                    <center>
                                                    ".$nome."
                                                    </center>
                                                </td>
                                                <td style='width:150px;height:60px;'>
                                                    <center>
                                                    <b>GENERO</b>
                                                    </center>
                                                </td>
                                                <td style='width:150px;height:60px;'>
                                                    <center>
                                                    ".$genero."
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style='width:150px;height:60px;'>
                                                    <center>
                                                    <b>DIRETOR</b>
                                                    </center>
                                                </td>
                                                <td style='width:150px;height:60px;'>
                                                    <center>
                                                    ".$diretor."
                                                    </center>
                                                </td>
                                                <td style='width:150px;height:60px;'>
                                                    <center>
                                                    <b>ANO</b>
                                                    </center>
                                                </td>
                                                <td style='width:150px;height:60px;'>
                                                    <center>
                                                    ".$ano."
                                                    </center>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style='height:340px;'>
                                        <table border='comentarios' bgcolor=#afbdd4>
                                            <tr>
                                                <td style='width:610px;height:40px;'>
                                                    <center>
                                                    <b>Comentarios</b>
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style='overflow:scroll; max-width:550px;max-height:200px; width:550px;height:200px;'>";
                                                $soma = 0;
                                                $cont = 0   ;
                                                $media = 0;

                                                if(empty($result2) === FALSE)
                                                {
                                                    while (list($id_comentarios, $comentario, $nota) = mysqli_fetch_row($result2))
                                                    {
                                                        echo "<table border='comentarios' bgcolor=#afbdd4>
                                                            <tr>
                                                                <td style='width:470px;height:60px;'>
                                                                    <center>
                                                                    ".$comentario."
                                                                    </center>
                                                                </td>
                                                                <td style = 'width:60px; height:60px;' >
                                                                    <center>
                                                                    ".$nota."
                                                                    </center>
                                                                </td>
                                                                <td>   
                                                                    <form name='editar' action='confirmaEditaComentario.php?id=".$id_comentarios."&nomeFilme=".$nome."' method='post' >
                                                                        <input type='submit' style = 'width:60px; height:60px;' value='editar'>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        </table>";
                                                        $soma = $soma + $nota;
                                                        $cont = $cont + 1;
                                                    }
                                                    if($cont > 1)
                                                    {
                                                        $media = $soma/$cont;
                                                    }
                                                }
                                                echo "
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <form name='comentar' action='enviaComentarioNovo.php?idFilme=".$pId."' method='post' >
                                                        <table border='comentarioNovo' bgcolor=#afbdd4>
                                                            <tr>
                                                                <td style='width:308px;height:62px;'>
                                                                    <input name='comentarioNovo' value= 'Diga oque pensa sobre este filme e sua nota'type='Text' align='center' style='width:418px;height:62px;' margin='0' >
                                                                </td>
                                                                <td style='width:40px;height:62px;'>
                                                                    <center>
                                                                    <b>NOTA</b>
                                                                    </center>
                                                                </td>
                                                                <td style='width:40px;height:62px;'>
                                                                    <input name='notaNova' value='0' type='number' align='center' style='width:40px;height:62px;' margin='0' >
                                                                </td>
                                                                <td style='width:80px;height:62px;'>
                                                                    <input type='submit' value ='Enviar'align = 'center' margin='0' style='width:80px;height:62px;'>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </form>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table border='comentarios' bgcolor=#afbdd4>
                                <tr>
                                    <td style='width:100px;height:20px;'>
                                        <center>
                                        <b>NOTA</b>
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td style='width:99px;height:100px;'>
                                        <input type='submit' style = 'width:99px; height:100px;' value='".$media."'>
                                    </td>
                                </tr>
                                <tr>
                                    <td style='height:345px;'>
                                        <br>
                                    </td>
                                </tr>
                            </table>
                        </td>            
                    </tr>
                </table>
                </center>
                </body>
                ";


            }
            echo "<br>";
    ?>
 