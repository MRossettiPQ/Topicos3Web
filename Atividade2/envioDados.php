<?php
    include 'setupConectaBanco.php';
    if(empty($_POST["Usuario"]) || empty($pdiretor = $_POST["Senha"]))//VERIFICA SE OS CAMPOS FORAM ENVIADOS VAZIOS
    {
        echo "
        <script>
            alert('O campo Usuario e Senha são obrigatorios.');
            window.history.back();
        </script>";
    }
    else
    {
        session_start();
        $pUsuario = $_POST["Usuario"];
        $pSenha = $_POST["Senha"];

        $newLogin = preg_replace('/[^A-Za-z0-9\-]/', '', $pUsuario);
        
        $query = "SELECT * FROM users WHERE login='$newLogin' AND password='$pSenha'";
        $result = mysqli_query($link, $query);
        
        
        while ($row = mysqli_fetch_array($result)) 
        {
            $id = $row['id'];
            $idProfile = $row['id_profiles'];
        }
        
        $_SESSION['id_profiles'] = $idProfile;
        
        if ((mysqli_num_rows($result) > 0) /* && ($idProfile) == 1*/) 
        {
            setcookie("login", "$newLogin", time() + 3600);
            setcookie("senha", "$pSenha", time() + 3600);
            $_SESSION['id_user'] = $id;
            $_SESSION['login'] = $newLogin;
            $_SESSION['senha'] = $pSenha;        
            echo "<script>
                window.location.href = 'mostraComum.php';
            </script>";
        } 
        else 
        {
            unset($_SESSION['id_user']);
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            session_abort();        
            echo "
            <script>
                window.history.back();
            </script>";
        }
    }
?>