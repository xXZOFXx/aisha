<?php

	//Proceso de conexi贸n con la base de datos
	include("conexion.php");

	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$cp = $_POST['cp'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$socio = $_POST['socio'];
	$comentarios = $_POST['comentarios'];
	$oculto = $_POST['oculto'];
	//echo "entro a ingresarDatos";

	//if ($oculto == ''){

	    $sql = "INSERT INTO cat_cliente (nombre_cliente, apellidos_cliente, codigo_postal, telefono, correo, socio, comentarios)
			VALUES ('$nombre', '$apellidos', '$cp', '$telefono', '$correo', '$socio', '$comentarios')";

		if ($conn->query($sql) === TRUE) {
		    echo "Se realizo el insert correctamente";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}


		//$to      = "david.reyes@eclipsemex.mx";
		$to      = "contacto@aisha.mx, recepcion@aisha.mx, gerencia@aisha.mx, jako@aisha.mx";
    	$subject = "Solicitud de informacion - Aisha";
    	$message = "Una persona solicita informacion acerca de Aisha, a continuacion se muestran sus datos:\n\n".
    	            "Nombre: " . $nombre . "\n".
    	            "Apellidos: " . $apellidos . "\n".
    	            "Codigo Postal: " . $cp . "\n".
    	            "Correo: " . $correo . "\n".
    	            "Telefono: " . $telefono . "\n".
    	            //"Pais: " . $pais . "\n".
    	            "Comentarios: " . $comentarios . "\n";
    	$headers = "From:" . $correo . "\r\n" .
    	    'X-Mailer: PHP/' . phpversion();

    	mail($to, $subject, $message, $headers);

	//}
	$conn->close();

?>
