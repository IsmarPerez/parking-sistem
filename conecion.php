<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'reserva';

$conection = @mysqli_connect('localhost','root','','db_reserva');

if(!$conection){
	echo "Error en la conecion";
}

?>












