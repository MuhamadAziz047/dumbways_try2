<!DOCTYPE html>
<html>

<head>
	<title>Tambahkan Produk anda</title>
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
</head>

<body style="background-color:powderblue;">
	<div class="judul">
		<h1>DW-Imcomp</h1>
	</div>

	<br />

	<a href="index.php" class="button">Lihat Semua produk</a>

	<br />
	<h3>Tambahkan Produk baru</h3>
	<form action="input-aksi.php" method="post">
		<table>
			<tr>
				<td>id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>importir_id</td>
				<td><input type="text" name="importir_id"></td>
			</tr>
			<tr>
				<td>Photo</td>
				<td><input type="text" name="photo"></td>
			</tr>
			<tr>
				<td>qty</td>
				<td><input type="text" name="qty"></td>
			</tr>
			<tr>
				<td>price</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>

</html>