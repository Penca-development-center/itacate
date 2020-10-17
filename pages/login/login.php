<?php session_start();

    // include_once '../../libs/connect.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $mail = filter_var(htmlspecialchars(strtolower($_POST['correo'])), FILTER_SANITIZE_EMAIL);
        $pass = filter_var(htmlspecialchars($_POST['pass']), FILTER_SANITIZE_STRING);
        // $rem = htmlspecialchars($_POST['recuerdame']);
        $tipo = 'socio';

        // echo $mail .$pass .$tipo;

        $errores = '';
        if( empty($mail) || empty($pass) ) {
            $errores .= '<li> Porfavor rellena los datos </li>';
            echo 'Porfavor rellena los datos")';
        } else {
            // Logica del login :o
            try {
                    $host ="localhost";
                    $userName="root";
                    $password="Penca.1234";
				    $dbName="itacate";

                    $dsn = "mysql:host=".$host.";dbname=".$dbName.";";
                    $pdo = new PDO ($dsn, $userName, $password);
            } catch (PDOException $e) {
                //throw $th;
                echo "Error: ". $e->getMEssage();
            }

            $staement = $pdo->prepare("SELECT * FROM usuarios WHERE correo_usuario = :mail AND pass_usuario = :pass AND tipo_usuario = :tipo");
            $staement->execute(array(
                ':mail' => $mail,
                ':pass' => $pass,
                ':tipo' => $tipo
            ));

            $resultado = $staement->fetch();
            if($resultado !== false){
                $_SESSION['usuario'] = $mail;
                header('location: ../../index.php');
            } else {
                $errores .= "<li>Usuario y/o contraseña no válidos</li>";
            }
        }
    }

    require_once './login.view.php';
?>