<?php
session_start();

// Define database
define('dbhost', 'csdm-webdev');
define('dbuser', '1614072');
define('dbpass', '1614072');
define('dbname', 'db1614072_group-e');


// Connecting database
try {
        $connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo $e->getMessage();
}

?>