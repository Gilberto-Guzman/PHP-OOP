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

    //Constructor               2.- Este recibe los datos
    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        //echo "Desde el constructor";
        
        // 3.- Y aqui pasamos esos datos a los atributos
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> departamento = $departamento;
        $this -> email = $email;
        $this -> codigo = $codigo;
    }
}


//objeto        instancia 1.- Le pasamos los datos al constructor
$Gilberto_Empleado = new Empleado('José Gilberto', 'Guzmán Gutiérrez', 'Software', 'josegilbertoguzmangutierrez@gmail.com', 001);
$Sophia_Empleada = new Empleado('Sophia', 'Hernández Garcia', 'TI', 'Sophia@msn.com', 002);


echo "<pre>";
var_dump($Gilberto_Empleado);
echo "</pre><br>";

echo "<pre>";
var_dump($Sophia_Empleada);
echo "</pre><br>";