<html>
<head>
<title>exemplo 18</title>
</head>
<body>
<?PHP
$carros["Palio"]["cor"]="azul";
$carros["Palio"]["pot�ncia"]="1.0";
$carros["Palio"]["opcionais"]="Ar condicionado";
$carros["corsa"]["cor"]="cinza";
$carros["corsa"]["pot�ncia"]="1.3";
$carrod["corsa"]["opcionais"]="MP3";
$carros["Gol"]["cor"]="Branco";
$carros["Gol"]["pot�ncia"]="1.0";
$carros["Gol"]["opcionais"]="Met�lica";
foreach ($carros as $modelos => $caracteristicas){
 echo"<b>  Modelo". $modelos."</b>";
 echo"</br>";
 foreach($caracteristicas as $caracteristicas => $valor){
  echo"$caracteristicas : $valor";
  echo"</br></br>";
  }
  }
  ?>
</body>
</html>