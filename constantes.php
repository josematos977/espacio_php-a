<?php


//constantes
$curso='php';
echo $curso;
echo "<br/>";



define('curso', 'php');
echo curso;
echo "<br/>";




define('NOMBRE_EMPRESA','Matos s.a');
echo NOMBRE_EMPRESA;
echo "<br/>";


define( "pi", 31416);
echo pi;

//ejercicio

echo "<br/>";
define("iva","0.20");
$precio=100;

$total=$precio*(1+iva);

echo "total con iva  ". $total;








?>