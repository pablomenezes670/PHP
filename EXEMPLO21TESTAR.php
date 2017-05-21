<?php
session_start();
if(isset($_SESSION['login']))
	echo 'Sessão ativa<br>';
else
	echo 'Sessão não existe<br>';
echo "<a href='exemplo21_Destruir.php'>Destruir Sessão";
?>