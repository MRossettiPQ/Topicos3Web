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
        ?>
        </br></br></br></br></br></br>
        <center>
            <table border="Pesquisa">
                    <tr>
                        <td style = "width:635px; height:60px;"><center><b>
                            Procure aquele jogo!
                        </b></center></td>
                    </tr>
            </table>
        </center>
        </br></br></br>
        <center>
            <form name="formPesquisar" action="mostraPesquisa.php" method="post" >
                <table border="CampoPesquisar">
                    <tr>
                        <td style = "width:400px; height:60px;"><input name="Pesquisado" label="Pesquise" type = "text" style = "width:400px; height:60px;"></td>        <td><input type="submit" style = "width:235px; height:60px;"></td>
                    </tr>
                </table>
            </form>
        </center>

        <?php
            //Chamado do cabeçalho da pagina
            include 'setupPagina.php';    
        ?>
    </body>
</html>
