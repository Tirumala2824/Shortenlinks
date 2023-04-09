<?php
try {
    $host = 'localhost';
    $dbname = 'project1';
    $user = 'pr1';
    $password = 'Pitani@789';


    $conn = new PDO("mysql:host = $host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'error is : ' . $e->getMessage();

}
?>