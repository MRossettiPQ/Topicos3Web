<html>
    <head>
        <title>Personal Movie DB</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" href="menu.css"/>
        <link rel="stylesheet" type="text/css" href="background.css"/>
    </head>
    <body bgcolor=#d8dfea>
        <?php
            //Chamado do cabeçalho da pagina
            include 'cabecalho.php';
            include 'maiorNota.php';
        ?>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $link = new mysqli($servername, $username, $password);
            
            if ($link->connect_error) 
            {
                die("Conexão falhou: " . $link->connect_error);
            }
            echo "<br>";
        
            $db = mysqli_select_db($link,'atividade01');
            if (!$db) 
            {
                die ('Base de dados não selecionada:'.mysqli_error($link));
            }
        ?>
    </body>
</html>