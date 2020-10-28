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

        $errores = '';

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

            $result = $statement->fetch();
            print_r($result);

            if($result !== false ) {
                $errores .= '<li> El usuario ya eciste </li>';
            }
        }
    }

    	require_once './alta.view.php';
?>