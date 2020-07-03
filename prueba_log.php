<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Inicia Sesción</h1>

	<form action="comprobar.php" method="POST">
		
		<table>
			<tr>
				<td class="izq">
					Login:</td><td class="der"><input type="text" name="login"></td></tr>
			<tr><td class="izq">Contraseña</td><td class="der"><input type="password" name="password"></td></tr><tr><td colspan="2"><input type="submit" name="enviar" value="login"></td></tr></table>
	</form>
</body>
</html>