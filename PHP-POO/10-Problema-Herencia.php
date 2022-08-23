<?php
include 'includes/header.php';

class Empleado
{
    //Variables o atributos
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;
    protected $codigo;
    protected $departamento;

    //Constructor
    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> email = $email;
        $this -> telefono = $telefono;
        $this -> codigo = $codigo;
        $this -> departamento = $departamento;
    }

    public function mostrarInformacion ()
    {
        echo "Nombre: " . $this -> nombre . " " . $this -> apellido . " Email: " . $this -> email;
    }
}

class Proovedor
{
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;
    protected $empresa;

        //Constructor
        public function __construct($nombre, $apellido, $email, $telefono, $empresa)
        {
            $this -> nombre = $nombre;
            $this -> apellido = $apellido;
            $this -> email = $email;
            $this -> telefono = $telefono;
            $this -> empresa = $empresa;
        }

        public function mostrarInformacion ()
        {
            echo "Nombre: " . $this -> nombre . " " . $this -> apellido . " Email: " . $this -> email;
        }
}

$empleado = new Empleado('Rodrigo', 'Müller Smith', 'rodrigo@msn.com', 96155332 , 001, 'Sistemas');
$proveedor = new Proovedor('Alejandro', 'Rodríguez Sánchez', 'alejandro@hotmail.com', 96177889, 'Google');

echo "<pre>";
var_dump($empleado);
echo "</pre><br>";

echo "<pre>";
var_dump($proveedor);
echo "</pre><br>";

$empleado -> mostrarInformacion();
echo "<br>";
$proveedor->mostrarInformacion();