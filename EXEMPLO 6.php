<html>
<head>
<meta charset="utf-8" />
<body>
<?php
<h1>operadores de booleanos exemplo6</h1>;
$c = FALSE;
echo"12>=12 and 10>2",(12>=12 and 10>2) ?"verdadeiro" :"falso";
echo "<br>
echo "12>=12 or FALSE ",(12>=12 or $c) ?"verdadeiro" : "falso";
echo "<br>";
echo "12>=12 xor 10>2",(12>=12 xor 10>=2)?"verdadeiro" : "falso";
echo "<br>";
echo "!FALSE ",(!$c)?"verdadeiro" : "falso";
echo "<br>";
echo "10>2 && FALSE ",(10>2 && $c) ?"verdadeiro":"falso";
echo "<br>";
echo "12>=12 || FALSE "(12>=12 || $c)?"verdadeiro":"falso";
?>
</body>
</html>
