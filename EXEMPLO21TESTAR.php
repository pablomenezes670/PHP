<?php
session_start();
if(isset($_SESSION['login']))
	echo 'Sess�o ativa<br>';
else
	echo 'Sess�o n�o existe<br>';
echo "<a href='exemplo21_Destruir.php'>Destruir Sess�o";
?>