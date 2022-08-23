<?php
include 'includes/header.php';

//Clase
class Empleado 
{
    //Abstracciones
    //MA    Atributos
    protected $nombre;
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;

    //Constructor             
    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> departamento = $departamento;
        $this -> email = $email;
        $this -> codigo = $codigo;
    }

    /*
        Get - Para Obtener un valor
        Set - Para modificar un valor
    */

    public function getNombre() 
    {
        return $this -> nombre;
    }
    public function SetNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function getApellido()
    {
        return $this -> apellido;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }


    public function getDepartamento()
    {
        return $this -> departamento;
    }
    public function setDepartamento($departamento)
    {
        $this -> departamento = $departamento;
    }


    public function getEmail()
    {
        return $this -> email;
    }
    public function setEmail($email)
    {
        $this -> email = $email;
    }


    public function getCodigo()
    {
        return $this -> codigo;
    }
    public function setCodigo($codigo)
    {
        $this -> codigo = $codigo;
    }
}



//valores inciales     
$Gilberto_Empleado = new Empleado('José Gilberto', 'Guzmán Gutiérrez', 'Software', 'josegilbertoguzmangutierrez@gmail.com', 001);

//Modificamos los valores
$Gilberto_Empleado -> SetNombre("Miguel");
$Gilberto_Empleado -> setApellido("López González");
$Gilberto_Empleado -> setDepartamento("Diseño");
$Gilberto_Empleado -> setCodigo('003');
$Gilberto_Empleado -> setEmail('miguel@gmail.com');

//Mostramos los valores
echo $Gilberto_Empleado -> getNombre();
echo $Gilberto_Empleado -> getApellido();
echo $Gilberto_Empleado -> getDepartamento();
echo $Gilberto_Empleado -> getCodigo();
echo $Gilberto_Empleado -> getEmail();


