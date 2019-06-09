<html>
    <body bgcolor=#d8dfea>
        <?php
            //Chamado do cabeçalho da pagina
            include 'setupCabecalho.php';
            //Chamado do cabeçalho da pagina
            include 'setupPagina.php';
            //Chamado do conexão da pagina
            include 'setupConectaBanco.php';

            $pIdUser = $_GET['idUser'];

            $query = "SELECT id_Usuario, nome_Usuario, usuario, email, dataNasc, FK_Profiles_id_Profile FROM usuario WHERE id_Usuario='$pIdUser'";
            $result = mysqli_query($link, $query);
            while (list($id_Usuario, $nome_Usuario, $usuario, $email, $dataNasc, $FK_Profiles_id_Profile) = mysqli_fetch_row($result))
            {
                echo "
                <center>
                <p> Edição de dados do usuario: ".$usuario." <p>

                <form name='editaUsuario' action='envioUsuarioEditar.php?id=".$id_Usuario."' method='post' >
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
                                                <input name='nomeNovo' type='text' value='".$nome_Usuario."'  align = 'center' style ='width:130px; height:45px;'>
                                            </center> 
                                        </td>
                                        <td style ='width:130px; height:45px;'>
                                            <center>Nascido</center> 
                                        </td>
                                        <td style ='width:130px; height:45px;'>
                                            <center>         
                                                <input name='nascimentoNovo' type='date' value=".$dataNasc." align = 'center' style ='width:130px; height:30px;' align='center'>
                                            </center> 
                                        </td>
                                    </tr>
                                    <tr>
                                    <td style ='width:130px; height:45px;'>
                                        <center>Usuario</center> 
                                    </td>
                                    <td style ='width:130px; height:45px;'>
                                        <center>     
                                            ".$usuario."
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
                                            if($FK_Profiles_id_Profile == 1)
                                            {
                                                echo"selected='selected'";
                                            }
                                            echo "
                                            >Root</option>
                                            <option value='2'";
                                            if($FK_Profiles_id_Profile == 2)
                                            {
                                                echo"selected='selected'";
                                            }
                                            echo ">Manager</option>
                                            <option value='3'";
                                            if($FK_Profiles_id_Profile == 3)
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
                        </tr>
                        <table border='tabuleiroOpcaoManager' bgcolor=#afbdd4>
                        <tr>
                            <td style='width:648px;height:62px;'>
                                <input type='submit' value ='Editar'align = 'center' margin='0' style='width:648px;height:62px;'>
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