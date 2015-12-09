<?

	// Replace this with your own email address
	$to="ventas@parasolesydisenos.co";

	// Extract form contents
	$name = $_POST['nombre'];
	$tel = $_POST['telefono'];
	$email = $_POST['email'];
	$comentarios = $_POST['comentarios'];
		
	// Validate email address
	function valid_email($str) {
		return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
	}
	
	// Return errors if present
	$errors = "";
	
	if($name =='') { $errors .= "nombre,"; }
	if(valid_email($email)==FALSE) { $errors .= "email,"; }
	if($comentarios =='') { $errors .= "comentarios,"; }

	// Send email
	if($errors =='') {

		$headers =  'De: Parasoles y disenos <ventas@parasolesydisenos.co>'. "\r\n" .
					'Reply-To: '.$email.'' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
		$email_subject = "Nuevo mensaje desde Parasoles y disenos: $email";
		$message="Nombre: $name \n\nEmail: $email \n\nTel: $teléfono \n\nComentarios: $comentarios";
	
		mail($to, $email_subject, $message, $headers);
		header('Location: /gracias.php');	
	} else {
		echo $errors;
	}
	
?>