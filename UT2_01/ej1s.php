<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario - Manuel Marín </TITLE></HEAD> 
<BODY> 

<?php
		$ip="192.18.16.204";
		
		$posicion1= strpos($ip,"."); // 3
		$posicion2= strpos($ip,".",($posicion1+1)); // 6
		$posicion3= strrpos($ip,"."); // 9
		
		 $num1= substr($ip,0,$posicion1);
		 $num2= substr($ip,$posicion1+1,($posicion2 - $posicion1 -1));
		 $num3= substr ($ip,$posicion2+1,($posicion3 - $posicion2-1));
		 $num4= substr ($ip,$posicion3+1,$posicion3);
		
		
		printf ("La ip $num1.$num2.$num3.$num4 en binario es: %08b.%08b.%08b.%08b",$num1,$num2,$num3,$num4);
		
?>

</BODY>
</HTML> 
