<HTML>
<HEAD><TITLE> EJ1B – Conversor decimal a binario</TITLE></HEAD>
<BODY>
<?php
    


		$nNum = 255;
		$nNumAux = $nNum;
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
		echo "El numero ". $nNumAux ." binario resultante es: ".$strBin;
		

?>
</BODY>
</HTML>
