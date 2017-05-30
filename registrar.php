<?php
	
	include 'conexion.php';
	//Proceso insertar un usuario
	if ($_POST['accion']=='insertar') {
		$nombre=$_POST['nombre'];
		$email=$_POST['email'];
		$telefono=$_POST['telefono'];
		$password=$_POST['password'];
		$idrol=$_POST['rol'];
		$fecha_modificacion=date("Y-m-d");

		$insertar="INSERT INTO usuario(nombre,email,telefono,fecha_modificacion, password,rol) VALUES ('$nombre','$email','$telefono','$fecha_modificacion','$password','$idrol')";//query que inserta en la tabla usuario

		$verificarusuario = mysqli_query($con,"SELECT email FROM usuario WHERE email='$email'");//verificamos que no exista el usuario
		if (mysqli_num_rows($verificarusuario)>0) {//si existe avisamos al usuario
			echo '<script>
					alert("Ya existe un usuario registrado con ese e-mail");
					window.history.go(-1);
				</script>';
			exit;
		}

		$resultado= mysqli_query($con, $insertar);//insertamos en la base de datos
		if (!$resultado) {//si hubo un error avisamos al usuario
			echo '<script>
					alert("ERROR, No se pudo registrar el usuario");
					window.history.go(-1);
				</script>';
		}else{//avisamos al usuario que se ha registrado 
			echo '<script>
					alert("Se ha registrado el usuario exitosamente");
					window.history.go(-1);
				</script>';
			}
		
	}

	if ($_POST['accion']=='eliminar') {
		$nombre=$_POST['nombre'];
		$email=$_POST['email'];
		$telefono=$_POST['telefono'];
		$password=$_POST['password'];
		$idrol=$_POST['rol'];
		$fecha_modificacion=date("Y-m-d");

		$insertar="UPDATE usuario SET nombre=$nombre,email=$email,telefono=$telefono,fecha_modificacion=fecha_modificacion, password=$password,rol=rol) VALUES ('$nombre','email','$telefono','$fecha_modificacion','$password','$idrol')";//query que inserta en la tabla usuario

		$resultado= mysqli_query($con, $insertar);//insertamos en la base de datos
		if (!$resultado) {//si hubo un error avisamos al usuario
			echo '<script>
					alert("ERROR, No se pudo modificóla información del usuario");
					
				</script>';
		}else{//avisamos al usuario que se ha registrado pero que valide su cuenta
			echo '<script>
					alert("Se ha modificado la información  del usuario exitosamente");
					window.history.go(-1);
				</script>';
			}
		
	}

mysqli_close($con);//cerramos conexion de base de datos
	
?>