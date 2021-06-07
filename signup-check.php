<?php 
session_start();
include "db_conn.php";
if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['re_password']) && isset($_POST['lastname']) && isset($_POST['edad']) && isset($_POST['genero'])){

function validate($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$uname = validate($_POST['uname']);
$pass = validate($_POST['password']);

$re_pass = validate($_POST['re_password']);
$name = validate($_POST['name']);
$lastname = validate($_POST['lastname']);
$lastname2 = validate($_POST['lastname2']);
$edad = validate($_POST['edad']);
$genero = validate($_POST['genero']);

$user_data = 'uname='. $uname. '&name='. $name. '&lastname'. $lastname. '&eded'. $edad. '&genero'. $genero;


if (empty($name)){
header("Location: signup.php?error=Nombre de usuario requerido&$user_data");
exit();
}

else if (empty($lastname)){
header("Location: signup.php?error=Apellido paterno requerido&$user_data");
exit();
}

else if (empty($lastname2)){
header("Location: signup.php?error=Apellido materno requerido&$user_data");
exit();
}

else if (empty($edad)){
header("Location: signup.php?error=Edad requerida&$user_data");
exit();
}

else if (empty($genero)){
header("Location: signup.php?error=Genero requerido&$user_data");
exit();
}


else if(empty($pass)){
header("Location: signup.php?error=Password requerido&$user_data");
exit();

}


else if($pass !== $re_pass){
header("Location: signup.php?error=La contraseña no coincide&$user_data");
exit();

}

else{

$pass = md5($pass);

$sql = "SELECT * FROM u where usuario='$uname'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0){
header("Location: signup.php?error=La contraseña no coincide&$user_data");
exit();
	}else{
      $sql2 = "INSERT INTO u(usuario, password, nombre, apellidoP, apellidoM, edad, genero) VALUES('$uname', '$pass', '$name', '$lastname', '$lastname2', '$edad', '$genero')";
      $result2 = mysqli_query($conn, $sql2);
      if ($result2){
         header("Location: signup.php?success=Cuenta creada con exito");
       exit();
      }else{
header("Location: signup.php?error=Ocurrio un error desconocido&$user_data");
exit();
      }
	}
    
}

}else{
	header("Location: signup.php");
	exit();
}
?>