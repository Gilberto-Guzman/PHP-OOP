<?php
include 'includes/header.php';

class Persona 
{
    //Variables o atributos
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;

    //Constructor
    public function __construct($nombre, $apellido, $email, $telefono)
    {
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> email = $email;
        $this -> telefono = $telefono;
    }
    
    public function mostrarInformacion ()
    {
        echo "Nombre: " . $this -> nombre . " " . $this -> apellido . " Email: " . $this -> email;
    }
    
    public function getTelefono ()
    {
        return $this -> telefono;
    }
}

class Empleado extends Persona
{
    protected $codigo;
    protected $departamento;

    //Constructor
    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this -> codigo = $codigo;
        $this -> departamento = $departamento;
    }
}

class Proovedor extends Persona
{
    protected $empresa;

        //Constructor
        public function __construct($nombre, $apellido, $email, $telefono, $empresa)
        {
            parent::__construct($nombre, $apellido, $email, $telefono);
            $this -> empresa = $empresa;
        }
    
        public function mostrarInformacion ()
        {
        echo "Nombre: " . $this -> nombre . " " . $this -> apellido . " Email: " . $this -> email . " de la empresa: " . $this -> empresa;
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
echo "<br>";
echo $proveedor -> getTelefono();