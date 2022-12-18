<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
	
<body>
<?php 
	$conexion = new mysqli("localhost","root","mvc","contacto");
	if($conexion){
		echo "conexion correcta";
			}
	else{
		echo "conexion incorrecta";
	}
	?>
</body>
</html>