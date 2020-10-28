<?php

    if($_SERVER['REQUEST_METHOD']) {

        $idProducto = htmlspecialchars($_POST['idProducto']);

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

        $statement = $pdo->prepare("DELETE FROM productos WHERE id_producto = :id_producto");
        $statement->execute(array(
            ':id_producto' => $idProducto
        ));
        echo $statement->rowCount();

    }

?>