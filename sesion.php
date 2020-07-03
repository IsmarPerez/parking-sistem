<?php

$alert ='';
session_start();
if(!empty($_SESSION['active'])){
	header('location: pagina.php');
}else{



if(!empty($_POST)){

	 if(empty($_POST['usuario']) || empty($_POST['clave'])){
	 	$alert = '¡¡Ingrese su usuario y su clave!!';
	 }else{
	 	require_once "conecion.php";
	 	$user = $_POST['usuario'];
	 	$pass = $_POST['clave'];



	 	$query = mysqli_query($conection ,"SELECT * FROM usuarios WHERE NOMBRE=  '$user' AND CONTRASEÑA ='$pass'");
        $result = mysqli_num_rows($query);

        if($result > 0){
        	$data = mysqli_fetch_array($query);
     
        	$_SESSION['active'] = true;
        	$_SESSION['nombre'] = $data['NOMBRE'];
        	$_SESSION['correo'] = $data['CORREO'];
        	$_SESSION['clave'] = $data['CONTRASEÑA'];
        	$_SESSION['codigo'] = $data['CODIGO_USUARIOS'];

        	header('location: pagina.php');
        }else{
        	  $alert = '¡El Usuario o la contraseña son incorrectos!';
        	session_destroy();
        
        }


	 }

}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/login3.css">
<meta charset="utf-8">
<html lang="en">
<body background="/parking/IMG/carro5.jpg">
	
	<br>
	<style>
	 h5{
	color: red;
	text-align: center;

}
		.btn-regresar{
			padding-bottom: auto;
  background: red;
  color: #fff;
  margin: auto;
  padding: 15px 40px;
  cursor: pointer;
  font-size: 15px;
 border-spacing: 15px;
	}	
		.btn-Iniciar{
  background: red;
  color: #fff;
  margin: auto;
  padding: 15px 40px;
  cursor: pointer;
  font-size: 15px;
 border-spacing: 15px;

	
	</style>

<a href="index.php"><input type="submit" name="12" value="Regresar" class="btn-regresar"></a>
	<br>
	<br>
	<br>
	<br>
	<h1>Inicia Sesión</h1>
	<form action="" method="POST" class="form-register">
	<h2 class="form__titulo">Inicia Sesión<img src="\parking\IMG/candado.png" width="72" height="40"></h2>
    <div class="contenedor-inputs">
		<center><h1 class="form__titulos">Usuario</h1><input type="text" name="usuario" placeholder="Usuario"></center>
		<center><h1 class="form__titulos">Contraseña</h1><input type="password" name="clave" placeholder="Contraseña"></center>
		
		
	</div>
	<center><input type="submit" name="12" value="Entrar" class="btn-Iniciar"></center>	
	<br>
	<center><h1 class="form__titulos"></h1><div  class="alert"><h5><?php echo isset($alert)? $alert : '';  ?></h5></div></center>
	</form>
</body>
</html>