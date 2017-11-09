<html><title>Sessões</title>
    <body>
        <?php
            session_start();
            echo "<br>Página 2<br>";
            if (isset($_SESSION['comida']))
            {
                echo $_SESSION['comida']."<br>";
                unset ($_SESSION['comida']);
            }
        ?>
        <a href="session03.php">Next Session 03</a>
    </body>
</html>