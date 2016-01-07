<?php

require 'conn.php';

$id_mitra = $_POST['id_mitra']; 
$brand_name = $_POST['brand_name']; 
$prefix = $_POST['prefix']; 

$member = $pdo->prepare("update data_mitra set
					`brand_name`='".$brand_name."',
					`prefix`='".$prefix."'
					where id_mitra='".$id_mitra."'");
$member->execute();

header('location:index.php');

?>