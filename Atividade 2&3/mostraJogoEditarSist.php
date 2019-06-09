<html>
<body bgcolor=#d8dfea>
    <?php
        //Chamado do cabeçalho da pagina
        include 'setupCabecalhoLogin.php';
        echo "</br></br>";
        //Chamado do cabeçalho da pagina
        include 'setupCabecalho.php';
        include 'setupCabecalhoCadastro.php';
        //Chamado do cabeçalho da pagina
        include 'setupPagina.php';
        //Chamado do conexão da pagina
        include 'setupConectaBanco.php';

        $idJogo = $_GET['idJogo'];
        $query = "SELECT nome_Jogo, dataLanca, players, descricao, tag, classificacao, FK_Usuario_id_Usuario, dataAddJogo, nomeEstudio FROM jogos WHERE id_Jogo='$idJogo'";
        $result = mysqli_query($link, $query);

        while (list($nome_Jogo, $dataLanca, $players, $descricao, $tag, $classificacao, $FK_Usuario_id_Usuario, $dataAddJogo, $nomeEstudio) = mysqli_fetch_row($result))
        {    
            echo "
                <center>
                <p> Atualização de Jogo: <b>".$nome_Jogo."</b><p>

                <form name='criarUsuario'  enctype='multipart/form-data'  action='envioJogoEditarSist.php?idJogo=".$idJogo."' method='post' >
                    <table border='formularioCriarJogo' bgcolor=#afbdd4>
                        <tr>
                            <td>
                                <table border='dadosJogo' bgcolor=#afbdd4>
                                    <tr>
                                        <td style ='width:130px; height:50px;'>
                                            <center><b>Titulo</b></center> 
                                        </td>
                                        <td style ='width:630px; height:50px;'>
                                            <center><input name='nomeJogo' value= '".$nome_Jogo."'type='Text' align='center' style='width:630px;height:50px;'></center> 
                                        </td>
                                    <tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table border='dadosJogo' bgcolor=#afbdd4>
                                    <tr>
                                        <td style ='width:187px; height:45px;'>
                                            <center><b>Estudio</b></center> 
                                        </td>
                                        <td style ='width:187px; height:45px;'>
                                            <center>
                                                <input name='jogoEstudio' value='".$nomeEstudio."'type='text' align = 'center' style ='width:187px; height:45px;' align='center'>
                                            </center> 
                                        </td>
                                        <td style ='width:187px; height:45px;'>
                                            <center><b>Lançamento</b></center>  
                                        </td>
                                        <td style ='width:187px; height:45px;'>
                                            <center>         
                                                <input name='jogoLancado' value='".$dataLanca."'type='date' align = 'center' style ='width:187px; height:30px;' align='center'>
                                            </center> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style ='width:187px; height:45px;'>
                                            <center><b>Maximo de Jogadores</b></center> 
                                        </td>
                                        <td style ='width:187px; height:45px;'>
                                            <center>     
                                                <input name='jogoPlayers' value='".$players."' type='number' align = 'center' style ='width:187px; height:45px;'>
                                            </center> 
                                        </td>
                                        <td style ='width:187px; height:45px;'>
                                            <center><b>Genero</b></center> 
                                        </td>
                                        <td style ='width:187px; height:45px;'>
                                            <center>         
                                                <input name='jogoTag' value='".$tag."'type='text' align = 'center' style ='width:187px; height:45px;'>
                                            </center> 
                                        </td>
                                    </tr>                               
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table border='dadosJogo' bgcolor=#afbdd4>
                                    <tr>
                                        <td style ='width:630px; height:30px;'>
                                            <center><b>Descrição</b></center> 
                                        </td>
                                    <tr>
                                    <tr>
                                        <td style ='width:765px; height:100px;'>
                                            <center><textarea cols='30' rows='5' name='jogoDesc' wrap='hard' type='Text' align='center' style='width:765px;height:100px;'>".$descricao."</textarea></center> 
                                        </td>
                                    <tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table border='dadosJogo' bgcolor=#afbdd4>
                                    <tr>
                                        <td style ='width:380px; height:35px;'>
                                            <center><b>Classicação indicativa</b></center> 
                                        </td>
                                        <td style ='width:380px; height:35px;'>
                                            <center><input name='jogoClass' value= '".$classificacao."'type='number' align='center' style='width:378px;height:35px;'></center> 
                                        </td>
                                    <tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>        
                                <input type='submit' value ='Corrigir'align = 'center' margin='0' style='width:775px;height:62px;'>
                            </td>
                            </form>
                        </tr>
                </table>
            </center>";
        }
    ?>    
</body>
</html>