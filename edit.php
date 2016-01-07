<?php

	require 'conn.php';
	$data = $pdo->prepare("select*from data_mitra where id_mitra='".$_GET['id']."'");
	$data->execute();

	$row = $data->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="update.php" method="POST">
<table>
	<tr>
		<td>Brand Name</td>
		<td><input type="text" name="brand_name" value="<?php echo $row['brand_name'];?>">
		<input type="hidden" name="id_mitra" value="<?php echo $row['id_mitra'];?>"></td>
	</tr>
	<tr>
		<td>Prefix</td>
		<td><input type="text" name="prefix" value="<?php echo $row['prefix'];?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="save" value="Save"></td>
	</tr>
</table>
</form>
</body>
</html>