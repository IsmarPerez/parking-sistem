<!DOCTYPE html>
<html>
<head>
	<title>reserva</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="assets/css/login2.css">
</head>
<body background="/parking/IMG/carro2.jpg">
	<style>

		
    .btn-Cancelar{
  background: red;
  color: #fff;
  margin: auto;
  padding: 15px 40px;
  cursor: pointer;
  font-size: 16px;
  float: right 15px 10px;

    }

  .btn-enviar{
  background: green ;
  color: #fff;
  margin: auto;
  padding: 15px 40px;
  cursor: pointer;
  font-size: 16px;

    }

	</style>
	<br>
	<div align="right"><a href="pagina.php"><input type="submit" name="submit" value="Cancelar" class="btn-Cancelar"></a></div>
	<form method="POST" action="cono.php" class="form-register">
	<h2 class="form__titulo">Reservar Ticket </h2>	
	<div class="contenedor-inputs">
	<center><h1 class="form__titulos">Nombre</h1><input type="text" name="nombre" placeholder="Nombre" required=""> </center>
	<center><h1 class="form__titulos">Apellido</h1><input type="text" name="apellido" placeholder="Apellido" required=""></center>
	<center><h1 class="form__titulos">Fecha Reservacion</h1><input type="date" name="fechare" placeholder="" required=""></center>
	<center><h1 class="form__titulos">hora</h1><input type="time" name="hora" size="30" placeholder="" required=""></center>
	<center><h1 class="form__titulos">Evento</h1><input type="text" name="evento" placeholder="Evento" required=""></center>
	<center><h1 class="form__titulos">Vehiculo</h1><input type="text" name="vehiculo" placeholder="Ejem.color,nombre,año" required=""></center>
	<center><h1 class="form__titulos">Dirrecion</h1><input type="text" name="dirrecion" placeholder="Dirrecion" required=""></center>
	<center><h1 class="form__titulos">Numero de Placa</h1><input type="number" name="codigo" placeholder="" value="" required=""></center>
	</div>
	<br>
	<center><input type="submit" name="submit" value="Reservar" class="btn-enviar"></center>
	<br>
    </form>
    <br>	
</body>
</html>


