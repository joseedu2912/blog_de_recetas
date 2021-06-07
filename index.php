<?php 
session_start(); 

if(!isset($_SESSION['usuario'])){
header ("Location: index.php");
}

include ("db_conn.php");

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: datos.php?error=Correo de usuario requerido");
	    exit();
	}else if(empty($pass)){
        header("Location: datos.php?error=Password requerido");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM u WHERE usuario='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['usuario'] === $uname && $row['password'] === $pass) {
            	$_SESSION['usuario'] = $row['usuario'];
            	$_SESSION['nombre'] = $row['nombre'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: principal.html");
		        exit();
            }else{
				header("Location: datos.php?error=Nombre y/o Password incorrecto");
		        exit();
			}
		}else{
			header("Location: datos.php?error=Nombre y/o Password incorrecto");
	        exit();
		}
	}
	
}else{
	header("Location: datos.php");
	exit();
}