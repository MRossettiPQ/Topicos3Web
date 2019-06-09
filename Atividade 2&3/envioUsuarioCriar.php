<?php
    //Chamado do conexão da pagina
    include 'setupSESSION.php';
    include 'setupConectaBanco.php';
    if((empty($_POST['loginNovo'])) || (empty($_POST['senhaNova'])) || (empty($_POST['nomeNovo']))|| (empty($_POST['nascimentoNovo']))|| (empty($_POST['emailNovo'])))
    {        
        echo "<script>
        alert('Todos os campos são obrigatorios.');
            window.history.back();
        </script>";
    }
    else
    {
        $pLoginNovo = $_POST['loginNovo'];
        $pTipoProfile = 2;
        $pNomeNovo = $_POST['nomeNovo'];
        $pNascimentoNovo = $_POST['nascimentoNovo'];
        $pEmailNovo = $_POST['emailNovo'];

        $novaSenha = md5($_POST['senhaNova']);
        $newLogin = preg_replace('/[^A-Za-z0-9\-]/', '', $pLoginNovo);

        $query_4 = "SELECT usuario FROM usuario WHERE usuario='$newLogin'";
        $result_4 = mysqli_query($link, $query_4);

        if(!mysqli_fetch_array($result_4))
        {
            $query = "INSERT INTO usuario (FK_Profiles_id_Profile, usuario, senha, nome_Usuario, dataNasc, email) VALUES ('$pTipoProfile','$newLogin','$novaSenha','$pNomeNovo','$pNascimentoNovo','$pEmailNovo')";
            if($link->query($query) === TRUE)
            {
            }
            else
            {
                echo "<br>"."Erro: ".$query."<br>".$link->error;
            }

            $query = "SELECT * FROM usuario WHERE usuario='$newLogin' AND senha='$novaSenha'";
            $result = mysqli_query($link, $query);
            while($row = mysqli_fetch_array($result))
            {       
                $id_Usuario = $row['id_Usuario'];
                $idProfile = $row['FK_Profiles_id_Profile'];

                if (mysqli_num_rows($result) > 0) 
                {
                    // define variaveis da sessão
                    $_SESSION['idProfiles'] = $idProfile;   
                    $_SESSION['idUser'] = $id_Usuario;
                    $_SESSION['usuario'] = $newLogin;
                    $_SESSION['senha'] = $novaSenha;   
                    setcookie("usuario", "$newLogin", time() + 3600);
                    setcookie("senha", "$novaSenha", time() + 3600);

                    //Redireciona para a página inicial    
                    echo "<script>
                        window.location.href = 'mostraPrincipal.php';
                    </script>";
                } 
                else 
                {
                    //Limpa
                    unset($_SESSION['idUser']);
                    unset($_SESSION['idProfiles']);
                    unset($_SESSION['login']);
                    unset($_SESSION['senha']);
                    setcookie("usuario", '', time() - 3600);
                    setcookie("senha", '', time() - 3600);
                    //Destrói
                    session_abort();  
                    //Redireciona para a página de anterior     
                    echo "<script>
                        window.history.back();
                    </script>";
                }
            }
            $link->close();        
            echo "<script>
                window.location.href = 'mostraComum.php';
            </script>";
        }
        else
        {
            echo "<script>
                alert('Usuario identico ja cadastrado');
                window.history.back();
            </script>";
        }

    }
?>