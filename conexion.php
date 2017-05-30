<?php
	$con= mysqli_connect("127.0.0.1","root","","api");//Establecemos la conexion con la base de datos mandando los siguientes
        //parámetros: Servidor, usuario, contraseña y base de datos. 
	if(!$con){//Si la conexion no se pudo lograr notificamos al usuario
		echo '
		<script>
			alert("ERROR, No se estableció conexión con la base de datos");
		</script>
		';
	}
?>