<?php
include 'includes/header.php';

//Clase
class Empleado 
{
    /*
    Modificadores de acceso:
    
    public --> - Puedes acceder y modificar sus valores dede la clase y la instancia
               - acceso a cualquier lugar (clase u objeto) 
    protected --> No se puede modificar acaso que se instancie en el constructor
    private --> Solo se puede acceder en su clase y modificar a traves de sus smetodos
    
    */
    
    //Abstracciones
    //MA    Atributos
    protected $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    //Constructor             
    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {        
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> departamento = $departamento;
        $this -> email = $email;
        $this -> codigo = $codigo;

        //$this -> nombreEmpleado();
    }

    public function obtenerNombre() 
    {
        return $this -> nombre;
    }
    public function cambiarNombre($nombre)
    {
        $this -> nombre = $nombre;
    }
}



     
$Gilberto_Empleado = new Empleado('José Gilberto', 'Guzmán Gutiérrez', 'Software', 'josegilbertoguzmangutierrez@gmail.com', 001);
$Gilberto_Empleado -> cambiarNombre("Un nuevo nombre");



//echo $Gilberto_Empleado->nombre;
echo $Gilberto_Empleado->obtenerNombre();

echo "<pre>";
var_dump($Gilberto_Empleado);
echo "</pre><br>";

