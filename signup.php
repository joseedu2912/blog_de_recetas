<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO - COCINALTINOAMERICANA</title>
	<link rel="stylesheet" type="text/css" href="css/formato.css">
</head>
<body>
<form action="signup-check.php" method="post">
	<h2>REGISTRO</h2>
	<?php if (isset($_GET['error'])){ ?>
<p class="error"><?php echo $_GET['error']; ?></p>
	<?php } ?>

	<?php if (isset($_GET['success'])){ ?>
<p class="success"><?php echo $_GET['success']; ?></p>
	<?php } ?>

	<label>Nombre</label>
	<?php if (isset($_GET['name'])){ ?>
<input type="text" 
       name="name" 
       placeholder="Por favor ingresa el nombre" value="<?php echo $_GET['name']; ?>"><br>
	<?php }else{ ?>
	<input type="text" 
	       name="name" 
	       placeholder="Por favor ingresa el nombre"><br>
	<?php } ?>


	<label>Apellido paterno</label>
	<?php if (isset($_GET['lastname'])){ ?>
<input type="text" 
       name="lastname" 
       placeholder="Por favor ingresa el apellido" value="<?php echo $_GET['lastname']; ?>"><br>
	<?php }else{ ?>
	<input type="text" 
	       name="lastname" 
	       placeholder="Por favor ingresa el apellido"><br>
	<?php } ?>

		<label>Apellido materno</label>
	<?php if (isset($_GET['lastname2'])){ ?>
<input type="text" 
       name="lastname2" 
       placeholder="Por favor ingresa el apellido" value="<?php echo $_GET['lastname2']; ?>"><br>
	<?php }else{ ?>
	<input type="text" 
	       name="lastname2" 
	       placeholder="Por favor ingresa el apellido"><br>
	<?php } ?>

	<label>Correo de Usuario</label>
	<?php if (isset($_GET['uname'])){ ?>
<input type="text" 
       name="uname" 
       placeholder="Por favor ingresa el nombre de usuario" value="<?php echo $_GET['uname']; ?>"><br>
	<?php }else{ ?>
	<input type="text" 
	       name="uname" 
	       placeholder="Por favor ingresa el nombre de usuario"><br>
	<?php } ?>

	<label>Edad</label>
	<?php if (isset($_GET['edad'])){ ?>
<input type="text" 
       name="edad" 
       placeholder="Por favor ingresa la edad" value="<?php echo $_GET['edad']; ?>"><br>
	<?php }else{ ?>
	<input type="text" 
	       name="edad" 
	       placeholder="Por favor ingresa la edad"><br>
	<?php } ?>


		<label>Genero</label>
	<?php if (isset($_GET['genero'])){ ?>
<input type="text" 
       name="genero" 
       placeholder="Por favor ingresa el genero" value="<?php echo $_GET['genero']; ?>"><br>
	<?php }else{ ?>
	<input type="text" 
	       name="genero" 
	       placeholder="Por favor ingresa el genero"><br>
	<?php } ?>



	<label>Contraseña</label>
	<input type="password" 
	       name="password" 
	       placeholder="Password"><br>

	<label>Re Contraseña</label>
	<input type="password" 
	       name="re_password" 
	       placeholder="Re_Password"><br>

	<button type="submit">Sign up</button>
    <a href="index.php" class="ca"> Regresar al login </a>

</form>
</body>
</html>