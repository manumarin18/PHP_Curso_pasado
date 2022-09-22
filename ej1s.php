<HTML>
<HEAD> <TITLE> EJ1-Conversion IP Decimal a Binario - Manuel Marín </TITLE> </HEAD>

<BODY>
<?php

$ip="192.168.206.223";
$iporiginal=$ip;

$ip1=substr($ip,0,strpos($ip,"."));
$ip=substr($ip,strpos($ip,".")+1);

$ip2=substr($ip,0,strpos($ip,"."));
$ip=substr($ip,strpos($ip,".")+1);

$ip3=substr($ip,0,strpos($ip,"."));
$ip=substr($ip,strpos($ip,".")+1);

$ip4=$ip;

printf("IP $iporiginal en binario es %08b.%08b.%08b.%08b ",$ip1,$ip2,$ip3,$ip4);

//$var=sprintf("IP $iporiginal en binario es %08b.%08b.%08b.%08b ",$ip1,$ip2,$ip3,$ip4);
//echo $var;

?>
</BODY>
</HTML>