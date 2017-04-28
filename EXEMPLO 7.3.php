<html>
<head><title>Exemplo7.3</title>
<meta charset="utf-8">
</head>
     <body>
        <h1>ESTRUTURA CONDICIONAL(IF/ELSE)</h1>
        <?php
               $altura=1.77;
               $peso=62;
               $imc=$peso/($altura*$altura);
               if($imc<18.5)
                {
                  echo("$imc classificação de magresa");
	 }else if (($imc>18.5)&&($imc<24.9))
	  {
	     echo("$imc classificação saudável");
	   }else if (($imc>25.0)&&($imc<29.9))
	    {
 	      echo("$imc classificação de sobrepeso");
                      }else if (($imc>30)&&($imc<39.9))
                       {
	      echo("$imc classificação de obesidade1");
	       }else if (($imc>35)&&($imc<39.9))
	        {
	      echo("$imc classificação de obesidade2");
	        }else if (($imc>35.0)&&($imc<39.9))
	          {
	     echo("$imc classificação de obesidade2(severa)");
                         }else if($imc>40)
                            {
	       echo("$imc classificação de obesidade3(morbida)");
                            }
                ?>
          </body>
</html>