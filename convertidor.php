<html>
  <head></head>

  <body>
	
<?php
	echo "		Conversor de dolares a pesos";
	echo "<br><br>";

	$tasacambio=15.5;

	echo "1 dolar = a ". $tasacambio ."<br>";


	for ($cambio=2;$cambio<20;$cambio++){

		$pesos=$cambio*$tasacambio;
	
		echo " 		".$cambio." dolares = a   $".$pesos. "  pesos";

		echo "<br>";

			 }
	 
	?>	
  </body>
</html>