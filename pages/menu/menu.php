<?php session_start();

    if(!isset($_SESSION['usuario'])) {
        header('location:../../index.php');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id_categoria = htmlspecialchars($_POST['categoria']);
        $id_seccion = htmlspecialchars($_POST['seccion']);
        $nombre = htmlspecialchars($_POST['nombre']);
        $foto = 'n/a';
        $descripcion = htmlspecialchars($_POST['desc']);
        $precio = htmlspecialchars($_POST['precio']);

        try 
        {
            $host ="localhost";
            $userName="root";
            $password="Penca.1234";
			$dbName="itacate";

            $dsn = "mysql:host=".$host.";dbname=".$dbName.";";
            $pdo = new PDO ($dsn, $userName, $password);
        }   
        catch (PDOException $e) 
        {
                //throw $th;
            echo "Error: ". $e->getMEssage();
        }

        $statement = $pdo->prepare("INSERT INTO productos(id_producto, id_categoria, id_seccion, nombre, foto, descripcion, precio) VALUES (null, :categoria, :seccion, :nombre, :foto ,:des, :precio )");
        $statement->execute(array(
            ':categoria' =>  $id_categoria,
            ':seccion' =>  $id_seccion,
            ':nombre' =>  $nombre,
            ':foto' =>  $foto,
            ':des' =>  $descripcion,
            ':precio' =>  $precio
        ));        
    } 
    // else if( $_SERVER['REQUEST_METHOD'] == 'GET') {
    //     echo 'get';

    // } 
    else if ($_SERVER['REQUEST_METHOD'] == 'PUT') {

    try 
        {
            $host ="localhost";
            $userName="root";
            $password="Penca.1234";
			$dbName="itacate";

            $dsn = "mysql:host=".$host.";dbname=".$dbName.";";
            $pdo = new PDO ($dsn, $userName, $password);
        }   
        catch (PDOException $e) 
        {
                //throw $th;
            echo "Error: ". $e->getMEssage();
        }

        $_PUT['idProducto'];

        
    } else if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
        echo 'delete';
    }



    include './menu.view.php';

?>

