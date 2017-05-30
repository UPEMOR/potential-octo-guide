<?php

include 'conexion.php';//conexion a base de datos


$email=$_GET['email'];


$insertar="DELETE FROM usuario WHERE email='$email'";//query que elimina en la tabla usuario

$resultado= mysqli_query($con, $insertar);//insertamos en la base de datos
if (!$resultado) {//si hubo un error avisamos al usuario
	echo '<script>
			alert("ERROR, No se pudo eliminar el usuario, intentelo más tarde");
			window.history.go(-1);
		</script>';
}else{//avisamos al usuario que se ha registrado pero que valide su cuenta
	echo '<script>
			alert("El usuario se eliminó correctamente");
			window.history.go(-1);
		</script>';
		
	}
	mysqli_close($con);//cerramos conexion de base de datos
?>