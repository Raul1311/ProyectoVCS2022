<?php
require_once("config/db.php");
class BaseModel{
    private $db;
    private $base;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->base=array();
    }
    public function getBase(){
        $consulta=$this->db->query("select * from contacto;");
        if (!$consulta){
            //echo "Error: ".$this->db->error;
            return false;
        }

        while($filas=$consulta->fetch_assoc()){
            $this->base[]=$filas;
        }
        return $this->base;
    }

    public function postBase(string $Nombre,string $Apellido,int $Telefono,string $Correo,string $Mensaje){
       $sql = "INSERT INTO contacto (nombre, apellido, telefono, correo, mensaje) VALUES ('".$Nombre."','".$Apellido."','".$Telefono."','".$Correo."','".$Mensaje."')"; 

        if (!$this->db->query($sql)) {
            //echo "Error: ".$this->db->error;
            return false;
        }else{
            return true;
        }
    }
}
?>
