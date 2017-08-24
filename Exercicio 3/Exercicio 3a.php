<html>
<head>
 <title>Tabuada</title>
</head>
<body>
    <?php 
        $comidas = array('pastel', 'massa', 'polenta','arroz'); 
    ?>
    <form>
    FORMULARIO EXERCICIO<br>
        <select name = "comida">
            <?php
                foreach($comidas as $tipo)
                {
                    echo '<option value ="'.$tipo.'">'.$tipo;
                }
            ?>
        </select><br><br>



    </form>
</body>
</html>