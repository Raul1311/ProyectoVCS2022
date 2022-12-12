<?php
    //Controladores a utilizar
    require("controllers/BaseController.php");
    
    //Instancia el controladores
    $controller = new BaseController;
    
    //Ruta del home
    $home = "/index.php/";
    
        //Quitar ruta
    $ruta = str_replace($home, "", $_SERVER["REQUEST_URI"]);
    
        //Dividir url por /  
    $array_ruta = array_filter(explode("/", $ruta));

        //Dividir url por ? 
    if (strpos($ruta, "?")) {
        $array_ruta = array_filter(explode("?",implode($array_ruta)));
    }
    

    //LLamar los metodos del los controladores

    if (isset($array_ruta[0])) {
        if ($array_ruta[0] == "")
            $controller->index();  
        
        if ($array_ruta[0] == "listar")
            $controller->listar();
        
        if ($array_ruta[0] == "agregar") 
            $controller->agregar();
            
        if ($array_ruta[0] == "insertar")
            $controller->insertarDatos();
    }
    else{
        //LLamar metodo por defecto
        $controller->index();  
    } 
?>
