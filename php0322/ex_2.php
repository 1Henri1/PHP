<?php

//EX1

	/*$produto = 8;
	$valor = 1500.00;

	echo "Código "." Porcentagem<br>".
	"1". "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". "10<br>"
	."3". "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". "25<br>"
	."4" ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". "30<br>"
	."8" ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". "50<br>";

	switch ($produto) {
		case 1:
			$porc=10;
			break;
		
		case 3:
			$porc=25;
			break;

		case 4:
			$porc=30;
			break;

		case 8:
			$porc=50;
			break;	

		default:
			echo "Valor invalido";
			break;
	}

	$rp = (($valor*$porc)/100);
	$resultado = $valor + $rp;

	echo "<br>O novo valor é ". $resultado;
*/

// EX2
/*
$ht = 10;
$sh = 10.00;
$dp = 3;

$sb = (($ht * $sh)+(50 * $dp));


if ($sb <= 1000){
	$inss = (($sb*8.5)/100);
} else {
	$inss = (($sb*9)/100);

}
if ($sb <= 500) {
	$ir=0;
} elseif ($sb >500 && $sb <= 1000) {
	$ir = (($sb*5)/100);
} else{
		$ir = (($sb*7)/100);

}

$sl= $sb - $inss - $ir;

echo $sl;
*/

//EX3
/*
$SENHA = "SENHA";
$VAL1 = 7.3;
$VAL2 = 3.7;
$DIV = $VAL1 / $VAL2;
$SENHA2 = "SENHA";

if ($SENHA == $SENHA2) {
 	printf("O resultado da divisão é: %.2f", $DIV);
 } else{
	echo "ERRO";
 }
*/
//EX4
 /*
 $prod = 10000000;
 $porc = 9;
 $pp = (($prod * $porc) / 100);
 $pf = $prod - $pp;	

 echo "O novo valor do produto é: R$". $pf;
*/

 //EX5
/*
 $va = 10;
 $na = 270;
 $sb = $va * $na;



 if ($sb <= 1000){
	$inss = (($sb*8.5)/100);
} else {
	$inss = (($sb*9)/100);

}

$sl= $sb - $inss;
 printf("O salario liquido é: R$%.2f", $sl);
 */

 //EX6
/*
 $r = 4.8;
 $r2 = $r*$r;
 $h = 10;
 $pi = 3.14159;
 $vol = $r2*$pi*$h;
 printf("O volume da lata é: %.2f",$vol);  
 */
 ?>