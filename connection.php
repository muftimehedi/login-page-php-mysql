<?php

$conn = "";
 
try {
    $servername = "localhost:3306";
    $dbname = "log22";
    $username = "root";
    $password = "";
 
    $conn = new PDO(
        "mysql:host=$servername; dbname=log22",
        $username, $password
    );
    
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>