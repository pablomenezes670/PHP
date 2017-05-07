<html>
<head>
<title></title>
</head>
<body>
<h1>Exemplo 14.2</h1>
<?php
function testeGlobal(){
global $a;
$a=25;
}
echo"<h1>variável Global</h1>";
$a=0;
testeGlobal();
echo"Valor dá Variável a = $a";
?>

</body>
</html>