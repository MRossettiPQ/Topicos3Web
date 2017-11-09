<html>
    <body bgcolor=#d8dfea>
        <?php
            session_start();
            //Chamado do cabeçalho da pagina
            include 'setupCabecalho.php';
            //Chamado do cabeçalho da pagina
            include 'setupPagina.php';
            //Chamado do conexão da pagina
            include 'setupConectaBanco.php';
            echo "
                <center>
                <p> Criação de Usuario <p>

                <form name='comentar' action='envioCriar' method='post' >
                    <table border='formularioEdicao' bgcolor=#afbdd4>
                        <tr>
                            <td>
                                <table border='dadosFilme' bgcolor=#afbdd4>
                                    <tr>
                                        <td style ='width:130px; height:45px;'>
                                            <center>Nome</center> 
                                        </td>
                                        <td style ='width:130px; height:45px;'>
                                            <center>     
                                                <input name='nomeNovo' type='text' align = 'center' style ='width:130px; height:45px;'>
                                            </center> 
                                        </td>
                                        <td style ='width:130px; height:45px;'>
                                            <center>Nascido</center> 
                                        </td>
                                        <td style ='width:130px; height:45px;'>
                                            <center>         
                                                <input name='nascimentoNovo' type='date' align = 'center' style ='width:130px; height:30px;' align='center'>
                                            </center> 
                                        </td>
                                    </tr>
                                    <tr>
                                    <td style ='width:130px; height:45px;'>
                                        <center>Usuario</center> 
                                    </td>
                                    <td style ='width:130px; height:45px;'>
                                        <center>     
                                            <input name='loginNovo' type='text' align = 'center' style ='width:130px; height:45px;'>
                                        </center> 
                                    </td>
                                    <td style ='width:130px; height:45px;'>
                                        <center>Email</center> 
                                    </td>
                                    <td style ='width:130px; height:45px;'>
                                        <center>         
                                            <input name='emailNovo' type='email' value='' align = 'center' style ='width:230px; height:45px;' align='center' placeholder='nome@email.com' required>
                                        </center> 
                                    </td>
                                </tr>
                                <tr>
                                    <td style ='width:130px; height:45px;'>
                                        <center>Tipo de Usuario</center> 
                                    </td>
                                    <td style ='width:130px; height:45px;'>
                                        <select name='tipoProfile' style ='width:130px; height:45px;'>
                                            <option value='' selected='selected'>Selecionar</option>
                                            <option value='1'>Root</option>
                                            <option value='2'>Manager</option>
                                            <option value='3'>User</option>
                                        </select>
                                    </td>
                                    <td style ='width:130px; height:45px;'>
                                        <center>Senha</center> 
                                    </td>
                                    <td style ='width:230px; height:45px;'>
                                        <center>         
                                            <input name='senhaNova' type='password' align = 'center' style ='width:230px; height:45px;' align='center'>
                                        </center> 
                                    </td>
                                </tr>                               
                                </table>
                            </td>
                        </tr>
                        <table border='formularioEdicao' bgcolor=#afbdd4>
                            <tr>
                                <td style='width:648px;height:62px;'>
                                    <input type='submit' value ='Editar'align = 'center' margin='0' style='width:648px;height:62px;'>
                                </td>
                            </tr>
                        </table>
                    </form>
                </table>
            </center>";
        ?>    
    </body>
</html>