<?php


$conexion=mysqli_connect('localhost','root','','db_reserva')


?>


<!DOCTYPE html>
<html>
<head>
	<title>Mis Cuentas</title>
</head>
<meta charset="utf-8">


<body>

	<style>
		body{
	background-color: #00FFFF;
	font-family: Arial;
}

#main-container{
	margin: 190px auto;
	width: 600px;
}

table{
	background-color: white;
	text-align: left;
	border-collapse: collapse;
	width: 100%;


}
th, td{
	padding: 30;
}

thead{
	background-color: #246355;
	border-bottom: solid 5px #0F362D;
	color: white;
}

tr:nth-child(even){
	background-color: #ddd;
}

tr:hover td{
	background-color: #369681;
	color: white;
}

.form__titulo{
	color: #fff;
	padding: 20px; 
	text-align: center;
	font-weight: 100;
	font-size: 40px;


	</style>

	<h2 class="form__titulo">TUS CUENTAS</h2>
	<div id="main-container">
	<table>
		<thead>
		<tr>
			<th>NOMBRE</th>
			<th>CORREO</th>
			<th>CONTRASEÑA</th>
			<th>CODIGO_USUARIOS</th>
		</tr>
	</thead>
<?php
$sql="SELECT * from usuarios";
$result=mysqli_query($conexion,$sql);

 while($mostrar=mysqli_fetch_array($result)){
?>
		<tr>
			<td><?php echo $mostrar ['NOMBRE']?> </td>
			<td><?php echo $mostrar ['CORREO']?> </td>
			<td><?php echo $mostrar ['CONTRASEÑA']?> </td>
			<td><?php echo $mostrar ['CODIGO_USUARIOS']?> </td>	
		</tr>
<?php
}
?>
</table>
</thead>
</div>
</body>
</html>