<?php

include 'koneksi.php';
$id = $_POST['id'];
$name = $_POST['name'];
$importir_id = $_POST['importir_id'];
$Photo = $_POST['photo'];
$qty = $_POST['qty'];
$price = $_POST['price'];

mysqli_query("UPDATE user SET id= '$id', name='$name',importir_id='$importir_id',photo='$Photo',qty='$qty',price='$price' WHERE id='$id'");


header("location:index.php?pesan=update");
