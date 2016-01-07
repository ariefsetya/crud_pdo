<?php

$pdo = null;

try {

    $hostname = "localhost";
    $dbname = "dbname";
    $username = "user";
    $pw = "secret";
    $pdo = new PDO ("mysql:host=$hostname;dbname=$dbname","$username","$pw");

}catch(PDOException $e){
    echo $e->getMessage();
}
?>