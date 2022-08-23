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

    //Constructor             
    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        //echo "Desde el constructor";
        

        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> departamento = $departamento;
        $this -> email = $email;
        $this -> codigo = $codigo;

        //$this -> nombreEmpleado();
    }

    //Metodo
    public function nombreEmpleado ()
    {
        //echo "Mostrando nombre de empleado";
        echo $this->nombre . " " . $this->apellido;
    }

    public function departamentoEmpleado ()
    {
        return $this->departamento;
    }
}



//objeto        
$Gilberto_Empleado = new Empleado('José Gilberto', 'Guzmán Gutiérrez', 'Software', 'josegilbertoguzmangutierrez@gmail.com', 001);
//Llamamos al metodo
//$Gilberto_Empleado -> nombreEmpleado();

$Sophia_Empleada = new Empleado('Sophia', 'Hernández Garcia', 'TI', 'Sophia@msn.com', 002);
//$Sophia_Empleada -> nombreEmpleado();

echo "<pre>";
var_dump($Gilberto_Empleado);
echo "</pre><br>";

echo "<pre>";
var_dump($Sophia_Empleada);
echo "</pre><br>";


echo $Gilberto_Empleado->nombreEmpleado();
echo $Sophia_Empleada->nombreEmpleado();

$departamento1 = $Gilberto_Empleado->departamentoEmpleado();
echo $departamento1;