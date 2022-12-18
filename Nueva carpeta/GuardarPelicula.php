<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	include("conexion.php");
	$varPelicula=$_POST['frmPelicula'];
	$varCosto=$_POST['frmCosto'];
	$varFechaEstreno=$_POST['frmFechaEstreno'];
	$varCartel=addslashes(file_get_contents($_FILES['frmCartel']['tmp_name']));
	$varTrama=$_POST['frmTrama'];
	$query= "INSERT INTO peliculas(Pelicula,Costo,FechaEstreno,Cartel,Trama)
	VALUES('$varPelicula','$varCosto','$varFechaEstreno','$varCartel','$varTrama')";
	$almacenar = $conexion->query($query);
	if ($almacenar){
		echo("Registro exitoso");
	}
	else{
		echo("No se pudieron almacenar los datos ");
	}
	?>
</body>
</html>