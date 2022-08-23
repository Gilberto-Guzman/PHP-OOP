<?php
include 'includes/header.php';
include 'DB.php';

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
$nombre = $Gilberto_Empleado -> getNombre();

echo $nombre;

$db = new DB($nombre);
$db -> guardar();

//var_dump($db);