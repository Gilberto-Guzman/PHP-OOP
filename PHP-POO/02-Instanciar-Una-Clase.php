<?php
include 'includes/header.php';

//Clase
class Empleado 
{

}

//1.- Puedes tener multiples instancias de una misma clase 

//objeto        instancia
$empleado = new Empleado;
$empleado2 = new Empleado;
$empleado3 = new Empleado;



// 2.- Probamos a nuestros objetos 
echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";

echo "<pre>";
var_dump($empleado3);
echo "</pre>";