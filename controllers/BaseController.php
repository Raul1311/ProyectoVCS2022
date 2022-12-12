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
        require_once("views/templates/header.php");
        require_once("views/templates/nav.php");
        require_once("views/form.php"); 
        require_once("views/templates/footer.php");
    }


    public function insertarDatos(){
        $nombre = $_POST['nombre'];
        $edad = intval($_POST['edad']);
        $sexo = $_POST['sexo'];
        if ($this->modelo->postBase($nombre,$edad,$sexo))
            header("Location: /index.php/listar", TRUE, 301);
        else
            header("Location: /index.php/agregar", TRUE, 301);
        
        exit();
    }
}
?>
