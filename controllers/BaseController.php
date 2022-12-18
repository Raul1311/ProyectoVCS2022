<?php
require_once("models/BaseModel.php");
class BaseController{
    private $modelo;
    function __construct()
    {
        $this->modelo = new BaseModel();
    }

    public function index(){
        require_once("views/templates/header.php");
        require_once("views/templates/nav.php");
        require_once("views/home.php"); 
        require_once("views/templates/footer.php");
    }

    public function listar(){
        $datos=$this->modelo->getBase(); 
        require_once("views/templates/header.php");
        require_once("views/templates/nav.php");
        require_once("views/lista.php"); 
        require_once("views/templates/footer.php");
    }

    public function agregar(){
        require_once("solartec-1.0.0/contact.html");
        
    }


    public function insertarDatos(){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = intval($_POST['telefono']);
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];
        if ($this->modelo->postBase($nombre,$apellido,$telefono,$correo,$mensaje))
            header("Location: /index.php/listar", TRUE, 301);
        else
            header("Location: /index.php/agregar", TRUE, 301);
        
        exit();
    }
}
?>
