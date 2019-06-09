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
            <td>
                <center style="width:67px;">
                        ID
                </center>
            </td>
            <td>
                <center style="width:167px;">
                        Tipo de Usuario
                </center>
            </td>
            <td>
                <center style="width:200px;">
                        Nome
                </center>
            </td> 
            <td>
                <center style="width:130px;">
                        Usuario
                </center>
            </td> 
            <td>
                <center style="width:90px;">
                        Nascimento
                </center>
            </td> 
            <td>
                <center style="width:390px;">
                        E-Mail
                </center>
            </td> 
            <td>
                <center style="width:69px;">
                        Editar
                </center>
            </td> 
        </tr>
    </table>
    </center>
    <?php
        $query = "SELECT id_Usuario, nome_Usuario, usuario, email, dataNasc, FK_Profiles_id_Profile FROM usuario";
        $result = mysqli_query($link, $query);
        //percorrimento das linhas retornadas pela query
        while (list($id_Usuario, $nome_Usuario, $usuario, $email, $dataNasc, $FK_Profiles_id_Profile) = mysqli_fetch_row($result))
        {
            echo 
            "
                <center>
                <table border='tabuleiroUsuarios' align='center' bgcolor=#afbdd4>
                <tr>
                    <td style='width:67px;height:34px;'>
                        <center>
                        ".
                                $id_Usuario
                        ."
                        </center>
                    </td> 
                    <td style='width:167px;height:34px;'>
                        <center>
                        ";
            if($FK_Profiles_id_Profile == 1)
            {
                echo "Root";
            }
            else if ($FK_Profiles_id_Profile == 2)
            {
                echo "Manager";
            }
            else
            {
                echo "Usuario";
            }
            echo "
                        </center>
                    </td> 
                    <td style='width:200px;height:34px;'>
                        <center>
                        ".
                                $nome_Usuario
                        ."
                        </center>
                    </td> 
                    <td style='width:130px;height:34px;'>
                        <center>
                        ".
                                $usuario
                        ."
                        </center>
                    </td> 
                    <td style='width:90px;height:34px;'>
                        <center>
                        ".
                                $dataNasc
                        ."
                        </center>
                    </td> 
                    <td style='width:390px;height:34px;'>
                        <center>
                        ".
                                $email
                        ."
                        </center>
                    </td>";

                    if($FK_Profiles_id_Profile != 1)
                    {
                    echo "
                    <form name='comentar' action='mostraUsuarioEditar.php?idUser=".$id_Usuario."' method='post' >
                        <td style='width:69px;height:62px;'>
                                <input type='submit' value ='Editar'align = 'center' margin='0' style='width:69px;height:62px;'>
                        </td>
                    </form>";
                    }
                    else
                    {
                        echo"
                        <td style='width:69px;height:62px;'>
                            Bloqueado
                        </td>
                        ";
                    }
            echo "
                </tr>
            </table>
            </center>
            ";
        }               
    ?>
    </body>
</html>