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

            $pId = $_GET['id'];

            $query = "SELECT id, id_profiles, login, nome, nascimento, email FROM users WHERE id = $pId";
            $result = mysqli_query($link, $query);
            while (list($id, $id_profiles, $login, $nome, $nascimento, $email) = mysqli_fetch_row($result))
            {
                echo "
                <center>
                <p> Edição de dados do usuario: ".$login." <p>

                <form name='editaUsuario' action='envioEditar.php?id=".$id."' method='post' >
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
                                                <input name='nomeNovo' type='text' value='".$nome."'  align = 'center' style ='width:130px; height:45px;'>
                                            </center> 
                                        </td>
                                        <td style ='width:130px; height:45px;'>
                                            <center>Nascido</center> 
                                        </td>
                                        <td style ='width:130px; height:45px;'>
                                            <center>         
                                                <input name='nascimentoNovo' type='date' value=".$nascimento." align = 'center' style ='width:130px; height:30px;' align='center'>
                                            </center> 
                                        </td>
                                    </tr>
                                    <tr>
                                    <td style ='width:130px; height:45px;'>
                                        <center>Usuario</center> 
                                    </td>
                                    <td style ='width:130px; height:45px;'>
                                        <center>     
                                            <input name='loginNovo' type='text' value='".$login."'  align = 'center' style ='width:130px; height:45px;'>
                                        </center> 
                                    </td>
                                    <td style ='width:130px; height:45px;'>
                                        <center>Email</center> 
                                    </td>
                                    <td style ='width:130px; height:45px;'>
                                        <center>         
                                            <input name='emailNovo' type='email' value='".$email."' align = 'center' style ='width:230px; height:45px;' align='center'placeholder='nome@email.com' required>
                                        </center> 
                                    </td>
                                </tr>
                                <tr>
                                    <td style ='width:130px; height:45px;'>
                                        <center>Tipo de Usuario</center> 
                                    </td>
                                    <td style ='width:130px; height:45px;'>
                                        <select name='tipoProfile' style ='width:130px; height:45px;'>
                                            <option value='1'";
                                            if($id_profiles == 1)
                                            {
                                                echo"selected='selected'";
                                            }
                                            echo "
                                            >Root</option>
                                            <option value='2'";
                                            if($id_profiles == 2)
                                            {
                                                echo"selected='selected'";
                                            }
                                            echo ">Manager</option>
                                            <option value='3'";
                                            if($id_profiles == 3)
                                            {
                                                echo"selected='selected'";
                                            }
                                            echo ">User</option>
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
                        </tr>";
                    if($_SESSION['id_profiles'] == 1)
                    {
                        echo "
                        <table border='tabuleiroOpcaoRoot' bgcolor=#afbdd4>
                        <tr>
                            <td style='width:322px;height:62px;'>
                                <input type='submit' value ='Editar'align = 'center' margin='0' style='width:322px;height:62px;'>
                            </td>
                        </form>

                            <form name='deltaUsuario' action='envioDeletar.php?id=".$id."' method='post' >
                                <td style='width:322px;height:62px;'>
                                    <input type='submit' value ='Deletar' align = 'center' margin='0' style='width:322px;height:62px;'>
                                </td>
                            </form>
                        </td>
                        </tr>
                        </table>";
                    }
                    else
                    {
                        echo "
                        <table border='tabuleiroOpcaoManager' bgcolor=#afbdd4>
                        <tr>
                            <td style='width:648px;height:62px;'>
                                <input type='submit' value ='Editar'align = 'center' margin='0' style='width:648px;height:62px;'>
                            </td>
                        </form>
                        </tr>
                        </table>";
                    }
                   echo " 
                </table>
            </center>";
            }
        ?>    
    </body>
</html>