<?php
session_start();;
if(!isset($_SESSION['login'])) {
header("location: access-denied.php");
exit();
}
echo "<br> Acesso ok <br>";
?>
<a href = "logout.php">clique aqui sair</a>