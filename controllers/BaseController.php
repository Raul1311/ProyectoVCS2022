<?php
require_once("models/BaseModel.php");
class BaseController{
    private $modelo;
    function __construct()
    {
        $this->modelo = new BaseModel();
    }

    public function index(){
        require_once("solartec-1.0.0/index.html");
    }
    
    public function agregar(){
        require_once("solartec-1.0.0/contact.html");
        
    }


    public function insertarDatos(){
        $Nombre = $_POST['nombre'];
        $Apellido = $_POST['apellido'];
        $Telefono = intval($_POST['telefono']);
        $Correo = $_POST['correo'];
        $Mensaje = $_POST['mensaje'];
        if ($this->modelo->postBase($Nombre,$Apellido,$Telefono,$Correo,$Mensaje))
            header("Location: solartec-1.0.0/contact.html", TRUE, 301);
        exit();
    }
}
?>
