<html><title>Sessões</title>
    <body>
        <?php
            session_start();
            echo "<br>Página 3<br>";
            if (isset($_SESSION['comida']))
            {
                echo $_SESSION['comida']."<br>";
            }
        ?>
        <a href="session01.php">Next Session 01</a>
    </body>
</html>