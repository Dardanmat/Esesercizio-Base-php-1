<?php 

$num1 = $_POST["numero1"];
$num2 = $_POST["numero2"];
$num3 = $_POST["numero3"];

$pari1 = $num1 % 2 == 0;
$pari2 = $num2 % 2 == 0;
$pari3 = $num3 % 2 == 0;

if($pari1 == $pari2 && $pari1==$pari3 && $pari1==TRUE){
	echo "Tutti pari";
}else if($pari1 == $pari2 && $pari1==$pari3 && $pari1==FALSE){
	echo "Tutti dispari";
}else{
	echo "Almeno uno diverso";
}
	
?>