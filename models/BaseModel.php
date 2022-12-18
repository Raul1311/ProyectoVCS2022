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

    public function postBase(string $nombre,string $nombre,int $telefono,string $correo,string $mensaje){
       $sql = "INSERT INTO contacto (Nombre, Apellido, Telefono, Correo, Mensaje) VALUES ('".$nombre."','".$apellido."','".$telefono."',".$correo.",'".$mensaje."')"; 

        if (!$this->db->query($sql)) {
            //echo "Error: ".$this->db->error;
            return false;
        }else{
            return true;
        }
    }
}
?>
