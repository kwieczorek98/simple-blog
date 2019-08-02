<?php

    require ('../config/config.php');

    class Database {

        public $conn = null;
        public $serverName;
        public $username;
        public $password;

        public function __construct(){
            try {

                $this->conn = new PDO(
                    $this->serverName = "mysql:host=127.0.0.1;dbname=simple-blog-php", 
                    $this->username   = "root", 
                    $this->password   = ""
                );
                
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    echo "Connected successfully"; 
                }

            catch(PDOException $e)
                {
                echo "Connection failed: " . $e->getMessage();
            }

            
        }
    }

    //Connect

    new Database();
        

    