<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

    require 'libs/Exception.php';
    require 'libs/PHPMailer.php';
    require 'libs/SMTP.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nombre = filter_var(htmlspecialchars($_POST['nombre']), FILTER_SANITIZE_STRING);
		$restaurant = filter_var(htmlspecialchars($_POST['restaurant']), FILTER_SANITIZE_STRING);
		$telefono = filter_var(htmlspecialchars($_POST['telefono']), FILTER_SANITIZE_NUMBER_INT);
		$correo = filter_var(htmlspecialchars($_POST['correo']), FILTER_SANITIZE_EMAIL);

		$errores = '';

		$subject = "Hola me llamo: " .$nombre .'<br>' ."Tengo un restaurante llamado: " .$restaurant ."<br>" ."Este es mi correo: $correo y mi telefono $telefono";

		// echo $subject;


		// Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);
		$mail->Mailer="smtp";
		$contact = "felipe@penca.com.mx";

		try {
			//Server settings
			$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
			$mail->isSMTP();                                            // Send using SMTP
			$mail->Host       = 'smtp.ionos.mx';                    // Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			$mail->Username   = 'felipe@penca.com.mx';                     // SMTP username
			$mail->Password   = 'D4rkS0ul_ind';                               // SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			//Recipients
			$mail->setFrom($correo, $nombre);
			$mail->addAddress($contact, "Itacate");
			// Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = 'Contacto con ITACATE';
			$mail->Body    = '<b>' .$subject .'</b>';
			$mail->AltBody = $subject;

			$mail->send();
            echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert" style = "display:inline-block"; margin:0 auto;>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                Tu mensaje se ha enviado con exito
                </div>';
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}


	}

	require_once './index.view.php';
?>
