<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	try{

		$base=new PDO("mysql:host=localhost; dbname=pruebas", "root" ,"");

		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "SELECT * FROM USUARIOS_PASS WHERE USUARIOS= :login AND PASSWORD: password";

		$resultado=$base->prepare($sql);

		$login=htmlentities(addslashes($_POST["login"]));

		$password=htmlentities(addslashes($_POST["password"]));

		$resultado->bindValue(":login", $login);

		$resultado->bindValue(":password", $password);

		$resultado->execute();

		$numero_registro=$resultado->rowCount();

		if($numero_registro!=0){

			header("location:pagina.php");

		}else{

			header("location:prueba_log.php");

		}

	}catch(exception $e){
		die("error:" . $e->getMessage());
	
	}

	?>
</body>
</html>

insert