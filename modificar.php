<?php
header("Content-Type: text/html;charset=utf-8");//nos permite mostrar caracteres especiales
include 'conexion.php';//conexion a base de datos


$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$password=$_POST['password'];
$idrol=(int)$_POST['rol'];
$fecha_modificacion=date("Y-m-d");


$query="UPDATE usuario SET nombre='$nombre', email='$email', telefono='$telefono', password='$password', fecha_modificacion='$fecha_modificacion' WHERE email='$email'";//query que actualiza en la tabla usuario
 
$resultado= mysqli_query($con, $query);//modificamos en la base de datos
if (!$resultado) {//si hubo un error avisamos al usuario
	echo '<script>
			alert("ERROR, No se pudo modifcar la información del usuario");
			window.history.go(-2);
		</script>';
}else{//avisamos al usuario que se ha registrado
	echo '<script>
			alert("Se ha modificado la informacion del usuario exitosamente");
			window.history.go(-2);
		</script>';
		
	}	
	mysqli_close($con);//cerramos conexion de base de datos
?>