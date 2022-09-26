<HTML>
<HEAD><TITLE> EJ1B – Conversor decimal a binario - Manuel Marín</TITLE></HEAD>
<BODY>
<?php
    


		$nNum = 168;
		$strBin = "";
		
		//printf("Numero $nNum se representa en binario como %08b <br/>",$nNum);

		
		while ($nNum >= 2) 
			
		{
			$nResto = $nNum%2; //para sacar el resto
			
			$nNum = (integer)($nNum / 2); //para sacar el cociente
			
			$strBin = "$nResto$strBin"; //para sacar el binario
		
		}
		$strBin = "$nNum$strBin";
		echo "<br/>";
		echo "El numero binario resultante es: ".$strBin;
		

?>
</BODY>
</HTML>