<html>
    <body bgcolor=#d8dfea>
        <?php
            //Chamado do cabeçalho da pagina
            include 'setupPagina.php';
            //Chamado do conexão da pagina
            include 'setupConectaBanco.php';

            //Chamado do contexto da pagina
            if(($_SESSION['id_profiles'] == 1) || ($_SESSION['id_profiles'] == 2))
            {
                include 'mostraRoot.php';
            }
            else
            {
                include 'mostraUsuario.php';
            }
        ?>
    </body>
</html>