<?php
/**
 * Contact
 *
   Template Name:  Contact Page
 *
 * @file           template-contact.php
 * @package        StanleyWP 
 * @author         Brad Williams & Carlos Alvarez 
 * @copyright      2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
   ?>

   <?php
   if(isset($_POST['submitted'])) {
    if(trim($_POST['contactName']) === '') {
        $nameError = 'Por favor ingrese su nombre.';
        $hasError = true;
    } else {
        $name = trim($_POST['contactName']);
    }
    if(trim($_POST['email']) === '')  {
        $emailError = 'Por favor ingrese su email.';
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
        $emailError = 'Dirreción de email invalida.';
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }
     if(trim($_POST['telefono']) === '') {
        $telError = 'Por favor ingrese su teléfono.';
        $hasError = true;
    } else {
        $telefono = trim($_POST['telefono']);
    }
    if(trim($_POST['comments']) === '') {
        $commentError = 'Por favor ingresa un mensaje.';
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['comments']));
        } else {
            $comments = trim($_POST['comments']);
        }
    }
    if(!isset($hasError)) {
        $emailTo = get_option('tz_email');
        if (!isset($emailTo) || ($emailTo == '') ){
            $emailTo = get_option('admin_email');
        }
        $subject = '[Contacto axemos] From '.$name;
        $body = "Nombre: $name \n\nEmail: $email \n\nTeléfino: $telefono \n\nComments: $comments";
        $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
        wp_mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }
} ?>

<?php include "header.php"; ?>

	<div class="page">

    	<div class="container">
			
			<h2>CONTÁCTENOS</h2>
			<hr>
			
			<!-- Formulario de Contacto -->
			<div class="twelve columns">
				<form action="send.php" method="post">
					<div class="five columns offset-by-one right">
						<label>NOMBRE <input type="text" name="nombre"></label>
						<label>EMAIL <input type="email" name="email"></label>
						<label>TELÉFONO <input type="text" name="telefono"></label>
					</div>
					<div class="five columns">
						<label>MENSAJE <br><textarea name="comentarios" id="" cols="30" rows="30"></textarea></label>
						<input class="button button-primary" type="submit" value="enviar">
					</div>
				</form>			
			</div>
				
			<!--/ Formulario de Contacto -->

			<div class="iframe twelve columns">
				<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d2260.1264184404795!2d-74.07636455389189!3d4.666236804041506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8e3f9a556102c673%3A0xe829cfd0d012d3dd!2sCarrera+50+%2371-1+a+71-99%2C+Bogot%C3%A1%2C+Colombia!3m2!1d4.6666332!2d-74.0752606!5e0!3m2!1ses!2ses!4v1445264603206" width="100%" height="200" frameborder="0" style="border:15px;" allowfullscreen></iframe>
			</div>


			<div class="twelve columns"><br><hr></div>
			
			<div class="ten columns offset-by-one">
				<ul class="quienes--valores">
					<li class="four columns"><img src="images/quienes-somos/alta-calidad.png" alt=""></li>
					<li class="four columns"><img src="images/quienes-somos/responsabilidad-entrega.png" alt=""></li>
					<li class="four columns"><img src="images/quienes-somos/confianza-seguridad.png" alt=""></li>
				</ul>
			</div>

		</div>
	</div>
<?php include "footer.php"; ?>