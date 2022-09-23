<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario sin printf osprintf - Manuel Marín</TITLE></HEAD>
<BODY>
<?php
		$ip="192.168.206.223";
		echo "$ip<br>";
		$punto1=strpos ($ip,".",0);
		$punto2=strpos ($ip,".",($punto1+1));
		$punto3=strpos ($ip,".",($punto2+1));
		
		$p1=decbin(substr($ip,0,$punto1));
		$p2=decbin(substr($ip,($punto1)+1,($punto2-$punto1-1)));
		$p3=decbin(substr($ip,($punto2)+1,($punto3-$punto2-1)));
		$p4=decbin(substr($ip,($punto3)+1,($punto3)));
		
		$p11=str_pad($p1,8,"0",STR_PAD_LEFT);
		$p12=str_pad($p2,8,"0",STR_PAD_LEFT);
		$p13=str_pad($p3,8,"0",STR_PAD_LEFT);
		$p14=str_pad($p4,8,"0",STR_PAD_LEFT);
		echo " la ip en binario es $p11.$p12.$p13.$p14";
?>
</BODY>
</HTML>