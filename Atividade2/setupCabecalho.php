<br>
<?php
    if($_SESSION['id_profiles'] == 1)
    {
        echo "
        <nav id='menu'>
            <ul>
                <li><a href='mostraComum.php'>Listar</a></li>
                <li><a href='mostraCadastro.php'>Cadastrar</a></li>
                
                <li><a href='envioLogout.php'>Logout</a></li>
            </ul>
        </nav>
        ";
    }
    else
    {
        echo "
        <nav id='menu'>
            <ul>
                <li><a href='envioLogout.php'>Logout</a></li>
            </ul>
        </nav>
        ";
    }
?>
