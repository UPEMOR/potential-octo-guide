<!DOCTYPE html>
<html>
<head>
	<title>Usuario</title>

	<!--Referencia a el framework de diseño que utilizaremos (W3.css)-->
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

</head>
<body>
<center><h1>Bienvenido</h1></center>
<center>
<br><br><br><br><img src="Imagenes/user_add.png"  onclick="document.getElementById('1').style.display='block'" class="w3-btn  w3-hover-opacity w3-round-xxlarge">
<a href="mostrarUsuarios.php">
	<img src="Imagenes/consultar.jpeg"  class="w3-btn   w3-round-xxlarge">
</a>
</center>



<div id="1" class="w3-modal">
	<div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:400px">
		<div class="w3-center"><br>
	        <span onclick="document.getElementById('1').style.display='none'" class="w3-closebtn  w3-container w3-padding-8 w3-display-topright" title="Cerrar">&times;</span>
	        
     	 </div>
		<form action="registrar.php" method="post"><!--Formulario para la modificación de usuarios-->
			<center>
			<h3><b>Registrar usuario</b></h3>
				<label>Nombre</label><br>
				<input type="text" name="nombre"><br>
				<label>E-mail</label><br>
				<input type="text" name="email"><br>
				<label>Teléfono</label><br>
				<input type="text" name="telefono"><br>
				<label>Contraseña</label><br>
				<input type="password" name="password">	<br>
				<label>Rol</label><br>
				<p>1.-Administrador 
				2.-Empleado 
				3.-Visitante </p>
				<select class="btn btn-default" id="rol" name="rol">
			          <option>1</option>
			          <option>2</option>
			          <option>3</option>
			          </select><br><br>
				<button class="w3-blue w3-border-blue" name="accion" value="insertar">Registrar</button><br>
			</center>
		</form>
	</div>
</div>

</body>
</html>