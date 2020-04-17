<?php
	$cantidad1 = $_POST['N1'];
	$cantidad2 = $_POST['N2'];
	$Tt;
	$OPERACION = $_POST['Operaciones'];

	if ($OPERACION=="Suma")
{
	$Tt = $cantidad1 + $cantidad2;
	echo "Resultado: ".$Tt;
}
if ($OPERACION=="Resta")
{
	$Tt = $cantidad1 - $cantidad2;
	echo "Resultado: ".$Tt;
}
if ($OPERACION=="Multiplicacion")
{
	$Tt = $cantidad1 * $cantidad2;
	echo "Resultado: ".$Tt;
}
if ($OPERACION=="Division")
{
	$Tt = $cantidad1 / $cantidad2;
	echo "Resultado: ".$Tt;
}
?>