<!DOCTYPE html>
<html>
<head>
	<title>Usuarios registrados</title>
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<a title="Volver al inicio" class="material-icons" style="font-size:50px;color:black; margin-left:200px; margin-top:5px" href="index.php" >assignment_return</a>
<center><h2>Usuarios registrados</h2></center>

<center>
<table class="w3-table-all w3-bordered  w3-hoverable" style="width:90%; background-color:white" >
		
		<center>
			<th class="w3-green"><center>Nombre</th>
			<th class="w3-green"><center>E-mail</th>
			<th class="w3-green"><center>Teléfono</th>
			<th class="w3-green"><center>Contraseña</th>
			<th class="w3-green"><center>Fecha de modificación</th>
			<th class="w3-green"><center>Rol</th>
			<th class="w3-green" colspan="2"><center>Opciones</th>


		</center>
		</tr>
		
		<!--El código de abajo nos sirve para llenar la tabla-->
		<?php

		include 'conexion.php';
		$query="SELECT * FROM usuario INNER JOIN role ON usuario.rol=role.id_rol";
			if($resquery=$con->query($query)){
				echo "<br><br>";
				while ($usuariosRegistrados=$resquery->fetch_array(MYSQLI_BOTH)) 
				{
					echo '<tr>
						 <td><center>'.$usuariosRegistrados['nombre'].'</td>
						 <td><center>'.$usuariosRegistrados['email'].'</td>
						 <td><center>'.$usuariosRegistrados['telefono'].'</td>
						 <td><center>'.$usuariosRegistrados['password'].'</td>
						 <td><center>'.$usuariosRegistrados['fecha_modificacion'].'</td>
						 <td><center>'.$usuariosRegistrados['rol'].'</td>

						 <td><center><a href="eliminar.php?email='.$usuariosRegistrados['email'].'" ><i class="fa fa-trash" title="Eliminar Usuario" ></i></td>
						 <td><center><a href="modificarVista.php?email='.$usuariosRegistrados['email'].'" ><i class="fa fa-edit" title="Modificar usuario" ></i></td>
						 '	;
				}
			}
		?>


</body>
</html>
