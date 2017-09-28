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

            $pId = $_GET['id'];
            $pNome = $_GET['nome'];
            
            echo "
            <center>
                    <table border='aviso' bgcolor=#afbdd4>
                    <tr>
                        <td style='width:600px;height:200px;'>
                            <center>
                                Você deseja realmente excluir o filme:".$pNome." e todos os comentarios atribuidos a ele?
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table border='excluirFilme' bgcolor=#afbdd4>
                                <tr>
                                    <td>
                                        <center>
                                            <form name='enviaRemove' action='enviaRemove.php?id=".$pId."' method='post' align = 'center'>
                                                <input type='submit' value ='DELETAR' style='width:300px;height:120px;'>
                                            </form>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <form name='retornaPagina' action='listaRemover.php' method='post'>
                                                <input type='submit' value ='RETORNAR' style='width:300px;height:120px;' align = 'center'>
                                            </form>
                                        </center>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </center>";
        ?>    
    </body>
</html>