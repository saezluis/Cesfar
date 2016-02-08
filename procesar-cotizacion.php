<?php
	
	header('Content-Type: text/html; charset=utf-8');
	
	//luis.manzano@cesfar.cl; 
	//romina.biagi@cesfar.cl
	
	$nombre_apellido = $_REQUEST['nombre_apellido'];
	$domicilio = $_REQUEST['domicilio'];
	$ciudad = $_REQUEST['ciudad'];
	$email = $_REQUEST['email'];
	$telefono = $_REQUEST['telefono'];
	$cotizacion = $_REQUEST['cotizacion'];
	/*
	echo "nombre_apellido: ".$nombre_apellido;
	echo "<br>";
	echo "domicilio: ".$domicilio;
	echo "<br>";
	echo "ciudad: ".$ciudad;
	echo "<br>";
	echo "email: ".$email;
	echo "<br>";
	echo "telefono: ".$telefono;
	echo "<br>";
	echo "cotizacion: ".$cotizacion;
	*/
	
	$to = "luis.manzano@cesfar.cl";
	$toDos = "romina.biagi@cesfar.cl";
	$subject = "Cotización desde página web Cesfar";
	$headers = "De: $email";
	$message = "Un visitante de tu página web Cesfar te ha enviado la siguiente cotización:
	\n Nombre y Apellido: $nombre_apellido
	\n Correo electronico: $email
	\n Teléfono: $telefono		
	\n Comentario: $cotizacion
	";
	
	
	mail($to,$subject,$message,$headers);
	mail($toDos,$subject,$message,$headers);
		
	//montar aviso de notificacion al usuario
	
	$user = $email;
	$usersubject = "Cotización pagina web Cesfar (www.cesfar.cl)";
	$userheaders = "De: cotizaciones@cesfar.cl ";  //OJO ver que email de retorno para el usuario colocar aqui
	$usermessage = "Hemos recibido su cotización, la misma será enviada en el transcurso de las proximas 24 horas.";
		
	mail($user,$usersubject,$usermessage,$userheaders);

	include_once 'config.php';
		
	$conexion=mysqli_connect($host,$username,$password,$db_name) or die("Problemas con la conexión");
	$acentos = $conexion->query("SET NAMES 'utf8'");
	
	
	mysqli_query($conexion,"insert into cotizacion(nombre_apellido,domicilio,ciudad,email,telefono,cotizacion) 
							values ('$nombre_apellido',
									'$domicilio',
									'$ciudad',
									'$email',
									'$telefono',
									'$cotizacion')")or die("Problemas con el insert del contacto");
	
?>