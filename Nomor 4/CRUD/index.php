<!DOCTYPE html>
<html>

<head>
	<style>
		.button {
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

		.button1 {
			background-color: #FF0000;
		}

		/* Green */
		.button2 {
			background-color: #FF0000;
		}

		/* Blue */
	</style>
	<title>DW-Imcomp</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="judul">
		<h1>DW-Imcomp</h1>
	</div>
	<br />

	<?php
	if (isset($_GET['pesan'])) {
		$pesan = $_GET['pesan'];
		if ($pesan == "input") {
			echo "Produk berhasil di input.";
		} else if ($pesan == "update") {
			echo "Produk berhasil di update.";
		} else if ($pesan == "hapus") {
			echo "produk berhasil di hapus.";
		}
	}
	?>
	<br />
	<a class="tombol" href="input.php">+ Tambah Produk Baru</a>

	<h3>Data Produk</h3>
	<table border="1" class="table">
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>importir.id</th>
			<th>Photo</th>
			<th>qty</th>
			<th>Price</th>
		</tr>
		<?php
		include "koneksi.php";
		$query_mysql = mysqli_query("SELECT * FROM user") or die(mysqli_error());
		$nomor = 1;
		while ($data = mysqli_fetch_array($query_mysql)) {
		?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $data['id']; ?></td>
				<td><?php echo $data['name']; ?></td>
				<td><?php echo $data['importir.id']; ?></td>
				<td><?php echo $data['photo']; ?></td>
				<td><?php echo $data['qty']; ?></td>
				<td><?php echo $data['price']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $data['id']; ?>">Edit Produk</a> |
					<a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus Hapus</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>

</html>