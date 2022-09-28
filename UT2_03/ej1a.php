<HTML>
<HEAD> <TITLE> Arrays Unidimensionales </TITLE> </HEAD>

<BODY>
<?php


$imp = array();
$suma = 0;
$indice = 0;

echo "<table border=2>";
echo "Primeros 20 impares:";
echo "<tr><td>Indice</td><td>Valor</td><td>Suma</td></tr>";

for ($i=1; $i<40; $i++)
{
	if ($i%2!=0)
	{

		$imp[$i]=$i;
		$suma=$suma+$imp[$i];
		echo "<tr><td>$indice</td><td>$imp[$i]</td><td>$suma</td></tr>";
		$indice++;
	}
}

?>
</BODY>
</HTML>
