<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $idProducto = htmlspecialchars($_POST['idProducto']);
        $id_categoria = htmlspecialchars($_POST['categoriaU']);
        $id_seccion = htmlspecialchars($_POST['seccionU']);
        $nombre = htmlspecialchars($_POST['nombreU']);
        $descripcion = htmlspecialchars($_POST['descU']);
        $precio = htmlspecialchars($_POST['precioU']);
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

        $statement = $pdo->prepare("UPDATE productos 
            SET id_categoria = :id_categoria, id_seccion = :id_seccion, nombre = :nombre, descripcion = :descripcion, precio = :precio  
            WHERE id_producto = :id_producto");
        $statement->execute(array(
            ':id_categoria' => $id_categoria,
            ':id_seccion' => $id_seccion,
            ':nombre' => $nombre,
            ':descripcion' => $descripcion,
            ':precio' => $precio,
            ':id_producto' => $idProducto
        ));

        echo $statement->rowCount();
    }

?>