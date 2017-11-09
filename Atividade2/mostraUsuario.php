<html>
<body bgcolor=#d8dfea>
    <?php
        //Chamado do cabeçalho da pagina
        include 'setupCabecalho.php';
        //Chamado do cabeçalho da pagina
        include 'setupPagina.php';
        //Chamado do conexão da pagina
        include 'setupConectaBanco.php';
    ?>        
    <?php
        $id = $_SESSION['id_user'];
        $query = "SELECT id, id_profiles, login, nome, nascimento, email FROM users WHERE id = $id";
        $result = mysqli_query($link, $query);
        //percorrimento das linhas retornadas pela query
        while (list($id, $id_profiles, $login, $nome, $nascimento, $email) = mysqli_fetch_row($result))
        {
            echo "      
            <br><br><br><br><br>  
            <table border='tabuleiroCabecalhoUsuarios' align='center' bgcolor=#afbdd4>
                <tr>
                    <td align=center valign=center cellpadding='0'topmargin = '50'>
                        <center style='width:267px;height:34px;'><b>
                                ID
                        </b></center>
                    </td>
                    <td align=center valign=center cellpadding='0'topmargin = '50'>
                        <center style='width:267px;height:34px;'>
                                $id
                        </center>
                    </td>
                    <td align=center valign=center cellpadding='0'topmargin = '50'>
                        <center style='width:267px;height:34px;'><b>
                                Tipo de Usuario
                        </b></center>
                    </td>
                    <td align=center valign=center cellpadding='0'topmargin = '50'>
                        <center style='width:67px;height:34px;'>
                                Usuario
                        </center>   
                    </td>
                </tr>
                <tr>
                    <td align=center valign=center cellpadding='0'topmargin = '50'>
                        <center style='width:267px;height:34px;'><b>
                                Nome
                        </b></center>
                    </td> 
                    <td align=center valign=center cellpadding='0'topmargin = '50'>
                        <center style='width:267px;height:34px;'>
                                $nome
                        </center>
                    </td> 
                    <td align=center valign=center cellpadding='0'topmargin = '50'>
                        <center style='width:267px;height:34px;'><b>
                                Usuario
                        </b></center>
                    </td> 
                    <td align=center valign=center cellpadding='0'topmargin = '50'>
                        <center style='width:267px;height:34px;'>
                                $login
                        </center>
                    </td>          
                </tr>
                <tr>   
                    <td align=center valign=center cellpadding='0'topmargin = '50'>
                        <center style='width:267px;height:34px;'><b>
                                Nascimento
                        </b></center>
                    </td> 
                    <td align=center valign=cente cellpadding='0'topmargin = '50'>
                        <center style='width:267px;height:34px;'>
                                $nascimento
                        </center>
                    </td> 
                    <td align=center valign=center cellpadding='0'topmargin = '50'>
                        <center style='width:267px;height:34px;'><b>
                                E-Mail
                        </b></center>
                    </td>
                    <td align=center valign=center cellpadding='0'topmargin = '50'>
                        <center style='width:267px;height:34px;'>
                                $email
                        </center>
                    </td>
                </tr>
            </table>";
        }               
    ?>
    </body>
</html>