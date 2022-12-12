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
        $consulta=$this->db->query("select * from datos;");
        if (!$consulta){
            //echo "Error: ".$this->db->error;
            return false;
        }

        while($filas=$consulta->fetch_assoc()){
            $this->base[]=$filas;
        }
        return $this->base;
    }

    public function postBase(string $nombre,int $edad,string $sexo){
       $sql = "INSERT INTO datos (nombre, edad, sexo) VALUES ('".$nombre."',".$edad.",'".$sexo."')"; 

        if (!$this->db->query($sql)) {
            //echo "Error: ".$this->db->error;
            return false;
        }else{
            return true;
        }
    }
}
?>
