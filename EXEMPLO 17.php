<html>
<head>
<title>Exemplo 17</title>
</head>
<body>
<?php
echo"<h1>Lendo um vetor</h1>";
$frutas=array("Laranja","Maçã","Uva","Banana","Mamão");
foreach($frutas as $valor){
echo"<li>Fruta: $valor</li>";
}
echo"<br>";
$dados = array("nome"=>"Maria Cristina" ,
"rua"=>"São João" , 
"bairro"=>"Cidades dos Campos" , 
"cidade"=>"São Paulo");
foreach($dados as $chave => $valor)
{
echo"$chave : $valor";
}
?>
</body>
</html>