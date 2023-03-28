<!doctype html>
<html lang=es>
	<head>
		<title>Resultado:</title>
		<meta charset=utf-8>
		<meta name=author content=Manuel>
		<link href=.css rel=stylesheet type=textcss >
		<script type=textjavascript> </script>
		<style type=textcss> </style>
	</head>

<body>
<?php
		$capital = $_POST["capital"];
		$interes = ($_POST["interes"] / 100)/12;
		$plazo = $_POST["plazo"] * 12;
		$carencia = $_POST["carencia"] *12;
		
		$numerador = ($interes * (pow (1 + $interes, $plazo-$carencia)));
		$denominador = ((pow (1 + $interes, $plazo-$carencia)) - 1);
		
		$cuota = $capital * ($numerador / $denominador);
		
		echo "<br><h2>Resultado:</h2>";
		echo "Capital del préstamo: ".number_format($capital, 2)."€<br>";
		echo "Tasa de interés anual: ".number_format($interes, 4)."%<br>";
		echo "Plazo en meses: $plazo<br>";
		echo "Cuota mensual: ".number_format($cuota, 2)."€<br>";
		echo "Cuota total: ".number_format($cuota*$plazo, 2)."€<br>";
		
		
	?>
</body>
</html>