<?php                
    if(!isset($_SESSION))
    {
        // session_start inicia a sessão
        session_start();

        if(!isset($_SESSION['idProfiles']))
        {
            $_SESSION['idProfiles'] = '4';  
            $_SESSION['idUser'] = '0';  
        }
    }
    if(isset($_SESSION))
    {
        if (($_SESSION['idProfiles'] == 1) || ($_SESSION['idProfiles'] == 2) || ($_SESSION['idProfiles'] == 3))
        {
            echo "<nav id='menuLogin'>
                <ul>
                    <li><a href='mostraUsuarioPainel.php'>Painel:".$_SESSION['usuario']."</a></li>
                        <li><a href='envioUsuarioLogout.php'>Logout</a></li>
                    </ul>
            </nav>";
        }
        else
        {
            echo "<nav id='menuLogin'>
                <ul>
                        <li><a href='mostraLogar.php'>Logar</a></li>
                        <li><a href='mostraCadastro.php'>Registrar</a></li>
                        <li><a href='envioUsuarioLogout.php'>Logout</a></li>
                </ul>
            </nav>";
        }
    }
?>