<?php        
    if(isset ($_SESSION['idProfiles']) == true)
    {
        if(($_SESSION['idProfiles'] == 1))
        {
            echo "
            <form name='formPesquisar' action='mostraPesquisa.php' method='post' >
            <nav id='menuLogin'>     
                    <ul>
                        <li><a href='mostraPrincipal.php'>HOME</a></li>
                        <li><a href='mostraComum.php'>Listar Jogos</a></li>
                        <li><a href='mostraCadastroJogo.php'>Sugerir</a></li>
                        <li><a href='mostraUsuarioListarROOT.php'>Lista Usuarios</a></li>
                        <li><a href='mostraJogoROOT.php'>Lista Jogos</a></li>
                        <li><input name='Pesquisado' label='Pesquisado' type = 'text' style = 'width:130px; height:25px;'><input type='submit' value='Procure' style = 'width:70px; height:25px;'></li> 
                    </ul>
            </nav>
            </form>";
        }
        else if(($_SESSION['idProfiles'] == 3))
        {
            echo "
            <form name='formPesquisar' action='mostraPesquisa.php' method='post' >
            <nav id='menuLogin'> 
                <ul>
                    <li><a href='mostraPrincipal.php'>HOME</a></li>
                    <li><a href='mostraComum.php'>Listar Jogos</a></li>
                    <li><a href='mostraCadastroJogo.php'>Sugerir</a></li>
                    <li><a href='mostraJogoMANAGER.php'>Libera Jogos</a></li>    
                    <li><input name='Pesquisado' label='Pesquisado' type = 'text' style = 'width:130px; height:25px;'><input type='submit' value='Procure' style = 'width:70px; height:25px;'></li> 
                </ul>
            </nav>
            </form>";
        }
        else
        {
            echo "
            <form name='formPesquisar' action='mostraPesquisa.php' method='post' >
            <nav id='menuLogin'>
                <ul>            
                    <li><a href='mostraPrincipal.php'>HOME</a></li>
                    <li><a href='mostraComum.php'>Listar Jogos</a></li>
                    <li><a href='mostraCadastroJogo.php'>Sugerir</a></li>
                    <li><input name='Pesquisado' label='Pesquisado' type = 'text' style = 'width:130px; height:25px;'><input type='submit' value='Procure' style = 'width:70px; height:25px;'></li> 
                </ul>
            </nav>
            </form>";
        }
    }
    else
    {
        echo "
        <form name='formPesquisar' action='mostraPesquisa.php' method='post' >
        <nav id='menuLogin'>
            <ul>            
                <li><a href='mostraPrincipal.php'>HOME</a></li>
                <li><a href='mostraComum.php'>Listar Jogos</a></li>
                <li><a href='mostraCadastroJogo.php'>Sugerir</a></li>
                <li><input name='Pesquisado' label='Pesquisado' type = 'text' style = 'width:130px; height:25px;'><input type='submit' value='Procure' style = 'width:70px; height:25px;'></li> 
            </ul>
        </nav>
        </form>";
    }
?>