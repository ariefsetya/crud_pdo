<?php

require 'conn.php';

$id_mitra = $_GET['id']; 

$member = $pdo->prepare("delete from data_mitra where id_mitra='".$id_mitra."'");
$member->execute();

header('location:index.php');

?>