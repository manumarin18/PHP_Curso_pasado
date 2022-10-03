<HTML>
<HEAD> <TITLE> Ejercicios de Refuerzo </TITLE> </HEAD>

<BODY>

<?php
//Objetivo: Mostar todos los números, del 5 al 100, saltando de 3 en 3.

	
	$numero=array();
	for($i=5; $i<=100; $i++){
		
		$numero[$i]=$i++;
		$i++;
		
		
	}

var_dump ($numero);


?>
</BODY>
</HTML>