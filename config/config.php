<?php

ini_set("error_reporting", "true");
error_reporting(E_ALL);

$config['config'] = array(
    "db" => array(
        //"dbName" => "",
        "username" => "root",
        "password" => "",
        "host" => "mysql:host=127.0.0.1;dbname=simple-blog-php"
    ),
    "urls" => array(
        "baseUrl" => "index.php" //base url
    )
);


?>