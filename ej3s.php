<HTML>
<HEAD><TITLE> EJ3- Obtener la dirección de red, la dirección de broadcast y el rango de IPs disponibles 
para los equipos a partir de la dirección IP y la máscara de red. - Manuel Marín </TITLE></HEAD> 
<BODY> 

<?php
		$ip="192.18.16.204";
		$mascara="21";
		
		// obtenemos la posicion de los puntos
		$posicion1= strpos($ip,"."); // 3
		$posicion2= strpos($ip,".",($posicion1+1)); // 6
		$posicion3= strrpos($ip,"."); // 9
		
		// cosrtamos la cadena hasta el punto
		$num1= substr($ip,0,$posicion1);
		$num2= substr($ip,$posicion1+1,($posicion2 - $posicion1 -1));
		$num3= substr($ip,$posicion2+1,($posicion3 - $posicion2-1));
		$num4= substr($ip,$posicion3+1);		
	
		// para que la longitud en binario sea 8 numeros 
		$binario1= decbin($num1);
		if(strlen($binario1) < 8){
			$resta1 = 8 - strlen($binario1);
			for ($i = 1; $i <= $resta1; $i++) {
				$binario1 = "0" . $binario1;
			}
		}
		
		$binario2= decbin($num2);
		if(strlen($binario2) < 8){
			$resta2 = 8 - strlen($binario2);
			for ($i = 1; $i <= $resta2; $i++) {
				$binario2 = "0" . $binario2;
			}
		}
		
		$binario3= decbin($num3);
		if(strlen($binario3) < 8){
			$resta3 = 8 - strlen($binario3);
			for ($i = 1; $i <= $resta3; $i++) {
				$binario3 = "0" . $binario3;
			}
		}
		
		$binario4= decbin($num4);
		if(strlen($binario4) < 8){
			$resta4 = 8 - strlen($binario4);
			for ($i = 1; $i <= $resta4; $i++) {
				$binario4 = "0" . $binario4;
			}
		}

		echo "La ip $num1.$num2.$num3.$num4 en binario es: $binario1.$binario2.$binario3.$binario4";
		echo "<br>";		
		
		// creamos variables para cada rango de la ip	
		$binario1Ini = "";
		$binario1Fin = "";
		$binario2Ini = "";
		$binario2Fin = "";
		$binario3Ini = "";
		$binario3Fin = "";
		$binario4Ini = "";
		$binario4Fin = "";
		
		// identificamos el rango de ip, las mascara y el broadcast
		if($mascara >= 24){
			$binario1Ini = $binario1;
			$binario1Fin = $binario1;
			$binario2Ini = $binario2;
			$binario2Fin = $binario2;
			$binario3Ini = $binario3;
			$binario3Fin = $binario3;
			
			$numerCeros = 32 - $mascara;
			$binario4Ini = substr($binario4,$numerCeros);
			$binario4Fin = substr($binario4,$numerCeros);
			for ($i = 1; $i <= $numerCeros; $i++) {
				$binario4Ini = $binario4Ini . "0";
				$binario4Fin = $binario4Fin . "1";
			}
		}else if($mascara >= 16){
			$binario1Ini = $binario1;
			$binario1Fin = $binario1;
			$binario2Ini = $binario2;
			$binario2Fin = $binario2;
			
			$numerCeros = 24 - $mascara;
			$binario3Ini = substr($binario3,$numerCeros);
			$binario3Fin = substr($binario3,$numerCeros);
			for ($i = 1; $i <= $numerCeros; $i++) {
				$binario3Ini = $binario3Ini . "0";
				$binario3Fin = $binario3Fin . "1";
			}			
			$binario4Ini = "00000000";
			$binario4Fin = "11111111";
		}else if($mascara >= 8){
			$binario1Ini = $binario1;
			$binario1Fin = $binario1;
			
			$numerCeros = 16 - $mascara;			
			$binario2Ini = substr($binario2,$numerCeros);
			$binario2Fin = substr($binario2,$numerCeros);
			for ($i = 1; $i <= $numerCeros; $i++) {
				$binario2Ini = $binario2Ini . "0";
				$binario2Fin = $binario2Fin . "1";
			}
			$binario3Ini = "00000000";
			$binario3Fin = "11111111";
			$binario4Ini = "00000000";
			$binario4Fin = "11111111";
		}else{
			$numerCeros = 8 - $mascara;
			$binario1Ini = substr($binario1,$numerCeros);
			$binario1Fin = substr($binario1,$numerCeros);
			for ($i = 1; $i <= $numerCeros; $i++) {
				$binario1Ini = $binario1Ini . "0";
				$binario1Fin = $binario1Fin . "1";
			}
			$binario2Ini = "00000000";
			$binario2Fin = "11111111";
			$binario3Ini = "00000000";
			$binario3Fin = "11111111";
			$binario4Ini = "00000000";
			$binario4Fin = "11111111";
		}
		
		
		echo "La Direccion Red de" . bindec($binario1Ini) . "." . bindec($binario2Ini) . "." . bindec($binario3Ini) . "." . bindec($binario4Ini) . " en binario es: $binario1Ini.$binario2Ini.$binario3Ini.$binario4Ini";
		echo "<br>";		
		echo "El Broadcast de" . bindec($binario1Fin) . "." . bindec($binario2Fin) . "." . bindec($binario3Fin) . "." . bindec($binario4Fin) . " en binario es: $binario1Fin.$binario2Fin.$binario3Fin.$binario4Fin";
		echo "<br>";
		
		$binario4Ini = substr($binario4Ini, 0, 7) . "1";
		$binario4Fin = substr($binario4Fin, 0, 7) . "0";
		
		echo "El Rango de" . bindec($binario1Ini) . "." . bindec($binario2Ini) . "." . bindec($binario3Ini) . "." . bindec($binario4Ini) . " en binario es: $binario1Ini.$binario2Ini.$binario3Ini.$binario4Ini" . " hasta" . bindec($binario1Fin) . "." . bindec($binario2Fin) . "." . bindec($binario3Fin) . "." . bindec($binario4Fin) . " en binario es: $binario1Fin.$binario2Fin.$binario3Fin.$binario4Fin";


		
?>

</BODY>
</HTML> 