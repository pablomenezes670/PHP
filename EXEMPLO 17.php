<html>
<head>
<title>Exemplo 17</title>
</head>
<body>
<?php
echo"<h1>Lendo um vetor</h1>";
$frutas=array("Laranja","Ma��","Uva","Banana","Mam�o");
foreach($frutas as $valor){
echo"<li>Fruta: $valor</li>";
}
echo"<br>";
$dados = array("nome"=>"Maria Cristina" ,
"rua"=>"S�o Jo�o" , 
"bairro"=>"Cidades dos Campos" , 
"cidade"=>"S�o Paulo");
foreach($dados as $chave => $valor)
{
echo"$chave : $valor";
}
?>
</body>
</html>