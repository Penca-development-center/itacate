<?php 

    if($_SERVER['REQUEST_METHOD'] == 'POST' ){
    
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

        $statement = $pdo->prepare("SELECT * FROM productos WHERE id_producto = :id");
        $statement->execute(array(
            ':id' => $idProducto
        ));

        $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultado);
        // if($resultado !== false) {
        //     echo 'si';
        // } else {
        //     echo 'no';
        // }

    }

?>