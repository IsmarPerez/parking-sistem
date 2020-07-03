<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<title>registro</title>
</head>
<body>
	<a href="tablas.php"><input type="submit" name="12" value="MIS CUENTAS" class="btn-enviar"></a>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<h1>Formulario de registro</h1>
	<form method="POST" action="usuarios.php"  class="form-register">
		<h2 class="form__titulo">CREA UNA CUENTA<img src="\parking\IMG/candado.png" width="72" height="40"></h2>
		<div class="contenedor-inputs">
			<center><h1 class="form__titulos">Nombre</h1>  <input type="text" name="nombre" placeholder="Nombre" required=""></center>
			<center><h1 class="form__titulos">Correo</h1>  <input type="email" name="correo" placeholder="Correo" required=""></center>
			<center><h1 class="form__titulos">Contraseña</h1>  <input type="password" name="contraseña" placeholder="Contraseña" required=""></center>
            <center><h1 class="form__titulos">Codigo</h1><input type="number" name="codigo" placeholder="Ejem.6666" required="" max="999999"></center>
			 <input type="submit" name="12" value="Registrar" class="btn-enviar">

		</div>
	</form>

</body>
</html>




