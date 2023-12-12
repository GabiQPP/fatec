<?php

	$Distancia = $_POST['txtDistancia'];
	$Combustivel = $_POST['txtCombustivel'];
	$Consumo = $Distancia / $Combustivel;

	echo "Consumo estimado: <b> $Consumo km/l </b><br>";
		
?>

<html>
		<body>
		<form method="POST" action="index.html">
				<input type="submit" name="btnVoltar" id="btnVoltar" value="Novo Cálculo";>
		</form>		
		
</body>
</html>