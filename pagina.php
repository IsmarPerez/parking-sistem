
<!DOCTYPE html>
<html>
<head>
    <title>Pagina Principal</title>
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1,maximum-scalable=1,mininum-scalable=1">
 <link rel="stylesheet" type="text/css" href="Css/estilos.css">
  <link rel="stylesheet" type="text/css" href="assets/css/menu.css">
  <link rel="stylesheet" type="text/css" href="assets/css/banner.css">
  <link rel="stylesheet" type="text/css" href="assets/css/blog.css">
  <link rel="stylesheet" type="text/css" href="assets/css/info.css">


</head>
<body bgcolor="#7FFFD4">
  

<style>
  .btn-cerrar{
  background: red;
  color: #fff;
  margin: auto;
  padding: 6px 10px;
  cursor: pointer;
  font-size: 10px;

    }

    p{
      color: red;
    }
</style>
<header>
    <div class="contenedor">
        <h1 class="icon-dog">Smart Parking System</h1>
        <p></p>
        <input type="checkbox" id="menu-bar">
        <label class="fontawesome-align-justify" for="menu-bar"></label>
                <nav class="menu">
                    <a href="pagina.php">Inicio</a>
                    <a href="reservar.php">Reservar</a>
                    <a href="">Galeria</a>
                    <a href="salir.php"><p>Cerrar Sesion</p></a><img src="/parking/IMG/user.png" height="35" width="35">


                    
                </nav>
            </div>

     </header> 
        <main>
    <section id="banner">
      <img src="/parking/IMG/banner.jpg">
      <div class="contenedor">
      <h2>Soluciones De Parqueo</h2>
      <h5>¿Cual es el mejor automovil para usted?</h5>
      <a href="https://es.digitaltrends.com/autos/mejores-carros-usados/">Leer mas</a>
        </div>
    </section>
    <section id="bienvenidos">
      <h2>BIENVENIDOS A SMAR PARKING SYSTEM</h2>
    </section>

    <section id="blog">
      <h3>Lo ultimo de nuestro sitio</h3>
      <div class="contenedor">
        <article>
          <img src="/parking/IMG/1.jpg">
          <h4>Escoge tu coche favorito</h4>
        </article>
        <article>
          <img src="/parking/IMG/2.jpg">
          <h4>Los coches necesitan mantenimiento</h4>
        </article>
        <article>
          <img src="/parking/IMG/3.jpg">
          <h4>Cuida tu coche</h4>
        </article>
      </div>
    </section>
    <section id="info">
      <h3>Para nosostros los coches son maquinas muy importantes que nos ayudan  a movilizarnos a los lugures que queremos</h3>
      <div class="contenedor">
        <div class="info-pet">
          <img src="/parking/IMG/4.jpg">
          <h4>Eura</h4>
        </div>
        <div class="info-pet">
          <img src="/parking/IMG/5.jpg">
          <h4>Hankook</h4>
        </div>
        <div class="info-pet">
          <img src="/parking/IMG/6.jpg">
          <h4>Pirelli</h4>
        </div>
        <div class="info-pet">
          <img src="/parking/IMG/7.jpg">
          <h4>Work</h4>
        </div>
      </div>
    </section>
  </main>
  <center>
  <footer>
    <div class="contenedor">
      <p class="copy">Smart Parking System &copy; 2020</p>
      <div class="sociales">
        <a class="icon-facebook" href=""><img src="/parking/IMG/facebook.png" width="50" height="47"></a>
        <a class="icon-youtube" href=""><img src="/parking/IMG/youtube.png" width="45" height="40"></a>
        <a class="icon-instagram" href=""><img src="/parking/IMG/instagram.png" width="40" height="37"></a>

      </div>
    </div>
  </center>
  </footer>
</body>
</html>

<?php

if (isset($_POST['nombre'])) {
    $Nombre = $_POST['nombre'];
  }
    ?>

<?php
  //conectamos el servidor
   $conectar=mysqli_connect('localhost','root','','db_reserva');
   //verificamos si la conexion es correcta
   if(!$conectar){
      echo"no se pudo conectar con el servidor";
     }
   //recuperar las variables
   @$Nombre=$_POST['nombre'];
   @$Correo=$_POST['correo'];
   @$Contraseña=$_POST['contraseña'];
   @$Codigo=$_POST["codigo"];
   
   //hacemos la sentecia de sql
   $sql="INSERT INTO usuarios VALUES ('$Nombre','$Correo','$Contraseña','$Codigo')";
                                                                                                                                                                     
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