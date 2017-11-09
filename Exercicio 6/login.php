<form method = 'POST' action = "<?php echo $_SERVER['PHP_SELF']; ?>">
    login <input type = "text" name = "login"><br>
    senha <input type = "password" name = "senha"><br>
    <input type = "submit" value = "submit">
</form>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $link = new mysqli($servername, $username, $password);

    if ($link->connect_error) 
    {
        die("Conexão falhou: " . $link->connect_error);
    }
    $db = mysqli_select_db($link,'exercicio06');
    if (!$db) 
    {
        die ('Base de dados não selecionada:'.mysqli_error($link));
    }

    if((empty($_POST['login'])) || (empty($_POST['senha'])))
    {        

    }
    else
    {
        $pUsuario = $_POST['login'];
        $pSenha = $_POST['senha'];

        $query = "SELECT username, senha FROM usuario WHERE $pUsuario";
        $result = mysqli_query($link, $query);
        
        while (list($username, $senha) = mysqli_fetch_row($result))
        {
            session_start();
            if (!empty( $_POST['login']))
            {
                if (($_POST['login'] == $username) and ($_POST['senha'] == $senha))
                {
                    $_SESSION['login'] = $_POST['login'];
                    header('Location: member-index.php');
                    exit();
                }
            }
        }
    }
?>