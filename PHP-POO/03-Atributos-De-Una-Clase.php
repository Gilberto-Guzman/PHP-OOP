<?php
include 'includes/header.php';

//Clase
class Empleado 
{
    //Modificadores de acceso --> public, private, protected
    
    //Abstracciones
    //MA    Atributos
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;


}

//objeto        instancia
$empleado = new Empleado;

//Asignamos valores
$empleado -> nombre = "José Gilberto";
$empleado -> apellido = "Guzmán Gutiérrez";

echo "<pre>";
var_dump($empleado);
echo "</pre>";



//objeto        instancia
$empleado2 = new Empleado;

//Asignamos valores
$empleado2 -> nombre = "Sophia";
$empleado2 -> apellido = "Hernández Garcia";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";