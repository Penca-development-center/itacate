<?php 
    // session_start();
    // if(!(isset($_['SESSION']))){
    //     header('location: ../../index.php');
    // } 
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = filter_var(htmlspecialchars($_POST['nombre']), FILTER_SANITIZE_STRING);
		$restaurant = filter_var(htmlspecialchars($_POST['restaurant']), FILTER_SANITIZE_STRING);
		$telefono = filter_var(htmlspecialchars($_POST['telefono']), FILTER_SANITIZE_NUMBER_INT);
        $correo = filter_var(htmlspecialchars($_POST['correo']), FILTER_SANITIZE_EMAIL);
        $pass = filter_var(htmlspecialchars($_POST['password']), FILTER_SANITIZE_STRING);
        $rPass = filter_var(htmlspecialchars($_POST['rPassword']), FILTER_SANITIZE_STRING);
        $sPass = "";
        $errores = '';
        $mensajes = '';

        if(empty($nombre) or empty($restaurant) or empty($telefono) or empty($correo) or empty($pass) or empty($rPass)) {
            $errores .= "<li> No deje espacios en blanco </li>";
        } else {
            try {
                $host ="localhost";
                $userName="root";
                $password="Penca.1234";
                $dbName="itacate";

                $dsn = "mysql:host=".$host.";dbname=".$dbName.";";
                $pdo = new PDO ($dsn, $userName, $password);
            }catch (PDOException $e){
                        //throw $th;
                    echo "Error: ". $e->getMEssage();    
            }

            $statement = $pdo->prepare("SELECT * FROM usuarios WHERE nombre_usuario = :nombre LIMIT 1");
            $statement->execute(array(':nombre' => $nombre));

            $result = $statement->fetchAll();
            print_r($result);
            var_dump($result);

            if( $pass !== $rPass) {
                $errores .= '<li>Las contraseñas no coinciden</li>';
            } else {
                $sPass .= $rPass;
            }

            if($result !== false ) {
                $errores .= '<li> El usuario ya existe </li>';
            } 

            if(!$errores) {
                $statement = $pdo->perpare("INSERT INTO usuarios(id_usuario, nombre_usuario, nombre_restaurante, telefono_usuario, correo_usuario, pass_usuario, tipo_usuario) 
                    VALUES (null, :nombre, :restaurante, :telefono, :correo, :pass, 'socio' )");
                $statement -> execute(array(':nombre' => $nombre, ':restaurante' => $restaurant, ':telefono' => $restaurant, ':correo' => $correo, ':pass' => $sPass));

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
                $mail->setFrom($contact, 'Team Itacate');
                $mail->addAddress($correo, $nombre);
                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Registro exitoso';
                $mail->Body    = '<b>'. 'Hola: '.$nombre .' <br> Hemos recibido tu solicitud y despues de alguna revisión hemos aceptado tu sloitud. Tu correo de ingreso es: ' .$correo .'Y tu contraseña es: ' .$pass .'</b>';
                $mail->AltBody = $subject;

                $mail->send();
                echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert" style = "display:inline-block"; margin:0 auto;>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    Tu mensaje se ha enviado con exito
                    </div>';
                echo 'Se envio un correo a' .$correo;
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
                    header('Location: ../login.php');                
                }
            }
        }

    	require_once './alta.view.php';
?>