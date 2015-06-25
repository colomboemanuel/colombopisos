	[php]
	<?php
	$nombre = $_POST[‘nombre’];
	$email = $_POST[‘email’];
	$mensaje = $_POST[‘mensaje’];
	$telefono = $_POST[‘inputPhone’];
	$para = ‘colomboemanue@gmail.com';
	$titulo = ‘Nueva consulta de la web';
	$header = ‘From: ‘ . $email;
	$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n  Telefóno: $telefono\n Mensaje:\n $mensaje";



	if ($_POST[‘submit’]) {
	if (mail($para, $titulo, $msjCorreo, $header)) {
	echo "<script language=’javascript’>
	alert(‘Mensaje enviado, muchas gracias.’);
	window.location.href = ‘http://colombopisos.com.ar';
	</script>";
	} else {
	echo ‘Falló el envio';
	}
	}

	?>
	[/php]



