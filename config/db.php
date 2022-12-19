<?php
class Conectar{
    public static function conexion(){
        $conexion= new mysqli("localhost", "root", "", "mvc.contacto");
        $conexion->query("SET NAMES 'utf8'");
    }
    
}
?>
