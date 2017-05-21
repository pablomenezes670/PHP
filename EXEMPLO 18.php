<html>
<head>
<title>exemplo 18</title>
</head>
<body>
<?PHP
$carros["Palio"]["cor"]="azul";
$carros["Palio"]["potência"]="1.0";
$carros["Palio"]["opcionais"]="Ar condicionado";
$carros["corsa"]["cor"]="cinza";
$carros["corsa"]["potência"]="1.3";
$carrod["corsa"]["opcionais"]="MP3";
$carros["Gol"]["cor"]="Branco";
$carros["Gol"]["potência"]="1.0";
$carros["Gol"]["opcionais"]="Metálica";
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