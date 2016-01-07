<?php

require 'conn.php';

$brand_name = $_POST['brand_name']; 
$prefix = $_POST['prefix']; 

$member = $pdo->prepare("insert into data_mitra 
					(`brand_name`,`prefix`) values 
					('".$brand_name."','".$prefix."')");
$member->execute();

header('location:index.php');

?>