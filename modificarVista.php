<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html>
<title>Modificar</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<body>

<div style="margin-top:53px">
    <?php
          $email=$_GET["email"];

          $query="SELECT * FROM usuario WHERE email='$email'";
          $resquery=$con->query($query);
          $info=$resquery->fetch_array(MYSQLI_BOTH);
       
      ?>
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:400px">

      <div class="w3-center"><br>
        <a  href="mostrarUsuarios.php" class="w3-closebtn  w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</a>
      </div>
      

      <form  action="modificar.php" method="post">
        <div class="w3-section">
        <center>
        <h5>Modificar Información</h5> 
          <label><b>Nombre</b></label><br>
          <input class="w3-input w3-border" value="<?php echo $info['nombre']?>" type="text" id="nombre" name="nombre" required >
          <br><label><b>email</b></label><br>
          <input class="w3-input w3-border" type="text" value="<?php echo $info['email']?>" id="email" name="email" readonly="readonly" required>
          <label><b>Teléfono</b></label><br>
          <input class="w3-input w3-border" type="text" value="<?php echo $info['telefono']?>" id="telefono" name="telefono" required>
          <label><b>Contraseña</b></label><br>
          <input class="w3-input w3-border" type="password" value="<?php echo $info['password']?>" id="password" name="password" required>s
          
          <button class="w3-btn-block w3-red w3-section w3-padding" type="submit">Modificar</button>
        </center>
        </div>
      </form>
    </div>
  </div>  
</body>
</html>

