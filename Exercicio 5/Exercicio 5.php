<html>
    <head>
        <title>Exemplo Conexão Banco</title>
    </head>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $link = new mysqli($servername, $username, $password);
            
            if ($link->connect_error) 
            {
                die("Conexão falhou: " . $link->connect_error);
            }
            echo "Conexão bem sucedida<br>";
        
            $db = mysqli_select_db($link,'auladw');
            if (!$db) 
            {
                die ('Base de dados não selecionada:'.mysqli_error($link));
            }
            /*
            $query = "INSERT INTO aula01 (nome, sobrenome, email) VALUES ('joao', 'pedro','teste@ufsc.br')";
            $result = mysqli_query($link, $query);
            */
        ?>
        <form name="Cadastro" action="Cadastro.php" method="post" >
            <label>Nome:</label> 
                <input name="nome" type="text">
            <label>Sobrenome:</label>
                <input name="sobrenome" type="text"><br>    
            <label>E-Mail:</label>
                <input name="email"type = "text"<br>
            <input type="submit">
        </form>
    </body>
</html>