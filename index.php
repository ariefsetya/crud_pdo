<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
require 'conn.php';
//query
$member = $pdo->prepare("select*from data_mitra order by id_mitra desc limit 10 ");
$member->execute();

//menampilkan 1 data
//$row_array = $member->fetch(PDO::FETCH_ASSOC);
//print_r($row_array);
//echo $row_array['brand_name']; 

//menampilkan seluruh data
$result_array = $member->fetchAll();
//print_r($result_array);

//melakukan perulangan untuk menampilkan data
?>
<table>
<?php
foreach ($result_array as $key) {
?>
<tr>
	<td><?php echo $key['brand_name'];?></td>
	<td><?php echo $key['prefix'];?></td>
	<td><a href="edit.php?id=<?php echo $key['id_mitra'];?>">Edit</a></td>
	<td><a href="delete.php?id=<?php echo $key['id_mitra'];?>">Delete</a></td>
</tr>
<?php
}

?>
</table>
</body>
</html>