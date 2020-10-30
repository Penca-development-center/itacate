<?php

    if($_SERVER['REQUEST_METHOD'] == 'GET') {

        try{
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

        $statement = $pdo->prepare("SELECT * FROM pedidos WHERE status = 'pendiente'");
        $statement->execute();

        $result = $statement->fetchAll();

        echo json_encode($result);
    }

?>