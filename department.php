<?php
include_once('database.php');

$x = "SELECT * FROM `deptartment`";
$dep = mysqli_query($conn, $x);
?>

<!DOCTYPE html>
<html>

<head>
	<title> Department Table </title>
</head>

<body>
	<table align="center" border="1px" style="width:600px; line-height:40px;">
		<tr>
			<th colspan="4">
				<h2>Department Records</h2>
			</th>
		</tr>
		<th> ID </th>
		<th> Name </th>
		<th> Description </th>
		</tr>

		<?php while ($rowDep = mysqli_fetch_assoc($dep)) {
		?>
			<tr>
				<td><?php echo $rowDep['id']; ?></td>
				<td><?php echo $rowDep['name']; ?></td>
				<td><?php echo $rowDep['description']; ?></td>
			</tr>
		<?php
		}
		?>

	</table>
</body>

</html>