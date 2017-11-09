<html><title>Sessões</title>
    <body>
        <?php
            session_start();
            echo "<br>Página 1<br>";
            $_SESSION['comida'] = "pipoca";
        ?>
        <a href="session02.php">Next Session 02</a>
    </body>
</html>