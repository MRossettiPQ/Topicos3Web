<html>

    <body bgcolor=#d8dfea>
        <?php
            //Chamado do cabeçalho Login da pagina 
            include 'setupCabecalhoLogin.php';
            echo "</br></br>";
            //Chamado do cabeçalho da pagina
            include 'setupCabecalho.php';

            //Chamado do setup pagina
            include 'setupPagina.php';

            //Chamado do conexão da pagina
            include 'setupConectaBanco.php';
            
            $pIdComentario = $_GET['idComentario'];
            $pNomeJogo = $_GET['nomeJogo'];

            $query2 = "SELECT comentario, nota FROM comentarios WHERE id_Comentario = $pIdComentario";
            $result2 = mysqli_query($link, $query2);
            while (list($comentario, $nota) = mysqli_fetch_row($result2))
            {
                echo "
                <center>
                <p> Edição de comentario para o jogo: ".$pNomeJogo." <p>
                <form name='atualiza' action='envioComentarioEditar.php?idComentario=".$pIdComentario."' method='post' >
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
                                            <input name='notaNova' type='number' value=".$nota." style = 'width:90px; height:150px;' align='center'>
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
                        <form name='deleta' action='envioComentarioDeletar.php?idComentario=".$pIdComentario."' method='post' >
                            <td>
                                <center>
                                    <input type='submit' value ='DELETAR'  style='width:466px;height:100px;' align = 'center' margin='0'>
                                </center>                        
                            </td>
                        </form>
                    </tr>
                    </table>
                </table>
            </center>";
            }
        ?>    
    </body>
</html>