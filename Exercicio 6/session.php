<html> 
    <body>
        <?php
        session_start();
        $_SESSION['contapagina'];
        if (isset($_SESSION['contapagina']))
        {
            $_SESSION['contapagina']++;
        }
        else
        {
            $_SESSION['contapagina'] = 1;
        }
        $limite_paginas = 5;
        echo "O ID da sua sessão atual é ".session_id(); 
        ?>
        <p> Você visitou essa página 
        <?php 
            echo
            $_SESSION['contapagina'];
        ?>
        . <p> Ao alcançar o limite de 
        <?php 
            echo $limite_paginas;
        ?> 
            a sessão
            será encerrada;
            <?php
            if ($_SESSION['contapagina'] >= $limite_paginas)
            {
                echo "<BR><BR> você ultrapassou o limite de
                acessos e essa sessão será reiniciada";
                session_destroy();
            }
        ?>
    </body>
</html>