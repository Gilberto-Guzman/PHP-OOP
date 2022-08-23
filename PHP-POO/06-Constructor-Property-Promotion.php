<?php
include 'includes/header.php';

//Clase
class Empleado 
{

    //CONSTRUCTOR PROPERTY PROMOTION    
    public function __construct(

    //Modificadores de acceso --> public, private, protected
    
    //Abstracciones
    //MA    Atributos
    public $nombre,
    public $apellido,
    public $departamento,
    public $email,
    public $codigo
    )
    {

    }
}


//objeto        
$Gilberto_Empleado = new Empleado('José Gilberto', 'Guzmán Gutiérrez', 'Software', 'josegilbertoguzmangutierrez@gmail.com', 001);
$Sophia_Empleada = new Empleado('Sophia', 'Hernández Garcia', 'TI', 'Sophia@msn.com', 002);


echo "<pre>";
var_dump($Gilberto_Empleado);
echo "</pre><br>";

echo "<pre>";
var_dump($Sophia_Empleada);
echo "</pre><br>";