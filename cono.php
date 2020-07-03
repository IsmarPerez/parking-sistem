
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1,maximum-scalable=1,mininum-scalable=1">
  <link rel="stylesheet" type="text/css" href="Css/estilos.css">
  <link rel="stylesheet" type="text/css" href="assets/css/carga.css">

  <html lang="es">
  <title>Conecion</title>
</head>
<body>

  <div class="container" id="container">
    <div class="preloader">
      <p>Generando..</p>
    </div> 
  </div>

  <header>
    <div class="contenedor">
      <h1 class="icon-cab">Smart Parking System</h1>
      <input type="checkbox" id="menu-bar">
      <label class="" for="menu-bar"><img src="/parking/IMG/icono.png" height="25" width="30"></label>
      <nav class="menu">
        <a href="usuarios.php">incio</a>
        <a href="reservar.php">Reservar</a>
        <a href="">Galeria</a>
      </nav>
    </div>
  </header>


  <style>


    tr,td{

    padding: 15px;
    border: 1px solid black;
    border-collapse: collapse;
    text-align: center;
    border-spacing: 15px;
    border-radius: 3%;
    margin: auto;


    }
   .btn-Descargar{
  background: green;
  color: #fff;
  margin: auto;
  padding: 15px 40px;
  cursor: pointer;
  font-size: 20px;

    }

    .btn-Salir{
  background: green;
  color: #fff;
  margin: auto;
  padding: 15px 40px;
  cursor: pointer;
  font-size: 20px;

    }

    .btn-Descargar:active{
transform: scale(1.05);
transform: scale3d(1.05);
}

.btn-Salir:active{
transform: scale(1.09);
transform: scale3d(1.09);
}
 </style>


 
<!-- ticket -->

   <center>
  <br>
  <br>
  <br>
  <br>
  <h2 style="color: gray">Tu Ticket Esta Listo</h2>
<table bgcolor="#FFD700">
    <td>
  <table bgcolor="#FFD700">
  <thead>
    <tr>
        <center><img src="\parking\IMG/barras.png" width="335" height="-50"></center>
        <tr><td>Nombre <td><?php echo $Nombre = $_POST["nombre"];?></td>
        <tr><center><td>Fecha Reservacion</td></center><td><?php echo $Fecha_Reservacion = $_POST['fechare'];?></td>
          <tr><td>Hora <td><?php echo $Hora = $_POST["hora"];?></td>
            <tr><td>Tu Codigo</td><td><?php echo $Codigo = $_POST["codigo"];?></td> 
    </tr>
  </thead>
</table>
</table>
</td>





<br>
<center><a href="informe.php"><input type="submit" name="submit" value="Imprimir" class="btn-Descargar"></a><a href="pagina.php"><input type="submit" name="submit" value="Salir" class="btn-Salir"></a></div></center>

<?php

if (isset($_POST['nombre'])) {
    $Nombre = $_POST['nombre'];
}
if (isset($_POST['apellido'])) {
    $Apellido = $_POST['apellido'];
}
if (isset($_POST['fechare'])) {
    $Fecha_Reservacion = $_POST['fechare'];
}
if (isset($_POST['hora'])) {
    $Hora= $_POST['hora'];
}
if (isset($_POST['evento'])) {
    $Evento = $_POST['evento'];
}
if (isset($_POST['vehiculo'])) {
    $Vehiculo = $_POST['vehiculo'];
}
if (isset($_POST['dirrecion'])) {
    $Dirrecion = $_POST['dirrecion'];
}
if (isset($_POST['codigo'])) {
    $Codigo = $_POST['codigo'];   
}
   $conectar=mysqli_connect('localhost','root','','db_reserva');
   if(!$conectar){
      echo"no se pudo conectar con el servidor";
     }
   @$sql="INSERT INTO reserva VALUES ('$Nombre',
                                     '$Apellido',
                                     '$Fecha_Reservacion',
                                     '$Hora',
                                     '$Evento',
                                     '$Vehiculo',
                                     '$Dirrecion',
                                     '$Codigo')"; 
   //ejecutamos la sentencia de sql
   $ejecutar=mysqli_query($conectar,$sql);
   //verificamos la ejecucion
   if(!$ejecutar){
       echo"";
       echo mysqli_error($conectar);
    }else{
      echo "";
    }

                              




?>

<script src="cerrar.js"></script>
</body>
</html>




