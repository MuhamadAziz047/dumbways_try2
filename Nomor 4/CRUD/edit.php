<!DOCTYPE html>
<html>

<head>
	<title>Edit Produk Anda</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.button {
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}
	</style>
	<div class="judul">
		<h1>DW-Imcomp</h1>
	</div>
</head>

<body>
	<br />
	<a href="index.php" class="button">Lihat Semua produk</a>
	<br />

	<h3>Edit Produk</h3>

	<?php
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query("SELECT * FROM user WHERE id='$id'") or die(mysqli_error());
	$nomor = 1;
	while ($data = mysqli_fetch_array($query_mysql)) {
	?>
		<form action="update.php" method="post">
			<table>
				<tr>
					<td>id</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
						<input type="text" name="id" value="<?php echo $data['id'] ?>">
					</td>
				</tr>
				<tr>
					<td>name</td>
					<td><input type="text" name="name" value="<?php echo $data['name'] ?>"></td>
				</tr>
				<tr>
					<td>Importir.id</td>
					<td><input type="text" name="importir.id" value="<?php echo $data['importir.id'] ?>"></td>
				</tr>
				<tr>
					<td>Photo</td>
					<td><input type="text" name="photo" value="<?php echo $data['photo'] ?>"></td>
				</tr>
				<tr>
					<td>Qty/td>
					<td><input type="text" name="qty" value="<?php echo $data['qty'] ?>"></td>
				</tr>
				<tr>
					<td>Price</td>
					<td><input type="text" name="price" value="<?php echo $data['price'] ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Simpan"></td>
				</tr>
			</table>
		</form>
	<?php } ?>
</body>

</html>