	<?php
	‘vendor/autoload.php’;
	$nombre = $_POST[‘nombre’];
	$email = $_POST[‘email’];
	$mensaje = $_POST[‘mensaje’];
	$telefono = $_POST[‘inputPhone’];
	$para = ‘colombopisos@gmail.com’;
	$titulo = ‘Nueva consulta de la web’;
	$header = ‘From: ‘ . $email;
	$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n  Telefóno: $telefono\n Mensaje:\n $mensaje";



	$transport = Swift_SmtpTransport::newInstance(‘smtp.gmail.com’, 587,‘tls’);
	$transport->setUsername(‘colombopisos@gmail.com’);
	$transport->setPassword(‘’);

	?>



