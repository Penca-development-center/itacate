<?php 
	class DatabseConnection 
	{
    private $host;
    private $userName;
    private $password;
    private $dbName;

		public function ConnectToDb()
		{
				/* Local server */
        $this->host ="localhost";
        $this->userName="root";
        $this->password="Penca.1234";
				$this->dbName="itacate";

				/*Ionos server*/ 						
				// $this->host ="db5000972804.hosting-data.io";
        // $this->userName="dbu618955";
        // $this->password="Pencadev.12345abc";
        // $this->dbName="dbs846067";

				try 
				{
            $dsn = "mysql:host=".$this->host.";dbname=".$this->dbName.";";
            $pdo = new PDO ($dsn, $this->userName, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
				} 
				
				catch (PDOException $e) 
				{
            echo "Connection Failed: ".$e->getMessage();
        }
    }
	}
?>