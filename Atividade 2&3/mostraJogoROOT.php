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
    ?>        
    <center>
        <table border="tabuleiroCabecalhoUsuarios" align='center' bgcolor=#afbdd4>
        <tr>
            <td style='width:67px;height:34px;'>
                <center style="width:67px;">
                        ID
                </center>
            </td>
            <td style='width:167px;height:34px;'>
                <center>
                        Nome Jogo
                </center>
            </td>
            <td style='width:167px;height:34px;'>
                <center>
                        Estudio
                </center>
            </td> 
            <td style='width:130px;height:34px;'>
                <center>
                        Data Lançamento
                </center>
            </td> 
            <td style='width:90px;height:34px;'>
                <center>
                        Players
                </center>
            </td>
            <td style='width:167px;height:34px;'>
                <center>
                        Tag
                </center>
            </td> 
            <td style='width:400px;'>
                <center>
                        Descrição
                </center>
            </td>  
            <td style='width:69px;height:62px;'>
                <center>
                        Aceitar
                </center>
            </td> 
        </tr>
    </table>
    </center>
    <?php
        $query = "SELECT id_Jogo, nome_Jogo, dataLanca, players, descricao, tag, classificacao, FK_Usuario_id_Usuario, dataAddJogo, nomeEstudio FROM jogos";
        $result = mysqli_query($link, $query);
        if(empty($result) === FALSE)
        {
            while (list($id_Jogo, $nome_Jogo, $dataLanca, $players, $descricao, $tag, $classificacao, $FK_Usuario_id_Usuario, $dataAddJogo, $nomeEstudio) = mysqli_fetch_row($result))
            {
                echo 
                    "<center>
                    <table border='tabuleiroUsuarios' align='center' bgcolor=#afbdd4>
                    <tr>
                        <td style='width:67px;height:34px;'>
                            <center>
                            ".
                                    $id_Jogo
                            ."
                            </center>
                        </td> 
                        <td style='width:167px;height:34px;'>
                            <center>
                            ".
                                    $nome_Jogo
                            ."
                            </center>
                        </td> 
                        <td style='width:167px;height:34px;'>
                            <center>
                            ".
                                    $nomeEstudio
                            ."
                            </center>
                        </td> 
                        <td style='width:130px;height:34px;'>
                            <center>
                            ".
                                    $dataLanca
                            ."
                            </center>
                        </td> 
                        <td style='width:90px;height:34px;'>
                            <center>
                            ".
                                    $players
                            ."
                            </center>
                        </td> 
                        <td style='width:167px;height:34px;'>
                            <center>
                            ".
                                    $tag
                            ."
                            </center>
                        </td>
                        <td style='width:400px;'>
                            <center>
                                    ".$descricao."
                            </center>
                        </td>
                        <td style='width:69px;height:62px;'>
                            <form name='comentar' action='mostraJogoEditarSist.php?idJogo=".$id_Jogo."' method='post' >
                                <input type='submit' value ='EDITAR'align = 'center' margin='0' style='width:69px;height:62px;'>
                            </form>
                            <form name='comentar' action='envioJogoDeletarSist.php?idJogo=".$id_Jogo."' method='post' >
                                <input type='submit' value ='DELETAR'align = 'center' margin='0' style='width:69px;height:62px;'>
                            </form>
                        </td>
                    </tr>
                </table>
                </center>
                ";
            }
        }
    ?>
    </body>
</html>