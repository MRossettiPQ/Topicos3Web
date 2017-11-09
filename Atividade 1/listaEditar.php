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
        include 'cabecalhoCadastro.php';

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
    <center>
        <table border="tabuleiroFilmesExsitentes" align='center' bgcolor=#afbdd4>
        <tr>
            <td>
                <center style="width:67px;">
                        ID
                </center>
            </td> 
            <td>                
                <center style="width:67px;">        
                        Capa
                </center>    
            </td>
            <td>
                <center style="width:200px;">
                        Titulo
                </center>
            </td> 
            <td>
                <center style="width:90px;">
                        Diretor
                </center>
            </td> 
            <td>
                <center style="width:90px;">
                        Genero
                </center>
            </td> 
            <td>
                <center style="width:85px;">
                        Ano
                </center>
            </td> 
            <td>
                <center style="width:75px;">
                        Remover
                </center>
            </td> 
        </tr>
    </table>
    </center>
    <?php
        $query = "SELECT id_filmes, nome, diretor, genero, ano FROM filmes";
        $result = mysqli_query($link, $query);
        //percorrimento das linhas retornadas pela query
        while (list($id_filmes, $nome, $diretor, $genero, $ano) = mysqli_fetch_row($result))
        {
            echo 
            "
                <center>
                <table border='tabuleiroFilmesExsitentes' align='center' bgcolor=#afbdd4>
                <tr>
                    <td style='width:67px;height:98px;'>
                        <center>
                        ".
                                $id_filmes
                        ."
                        </center>
                    </td> 
                    <td style='width:67px;height:98px;'>                
                        <center>        
                        <img src='Imagens/".$nome.".jpg' alt='Capa' style='width:67px;height:98px;'>
                        </center>    
                    </td>
                    <td style='width:200px;height:98px;'>
                        <center>
                        ".
                                $nome
                        ."
                        </center>
                    </td> 
                    <td style='width:90px;height:98px;'>
                        <center>
                        ".
                                $diretor
                        ."
                        </center>
                    </td> 
                    <td style='width:90px;height:98px;'>
                        <center>
                        ".
                                $genero
                        ."
                        </center>
                    </td> 
                    <td style='width:85px;height:98px;'>
                        <center>
                        ".
                                $ano
                        ."
                        </center>
                    </td> 
                    <td style='width:75px;'>";
                        <center>
                            <form name='editar' action='confirmaEdita.php?id=".$id_filmes."' method='post' >
                                <input type='submit' value ='EDITAR'>
                            </form
                        </center>
                    </td> 
                </tr>
            </table>
            </center>
            ";
        }               
    ?>
    </body>
</html>