<?php
include 'koneksi.php';
$id = $_POST['id'];
$name = $_POST['name'];
$importir_id = $_POST['importir_id'];
$Photo = $_POST['photo'];
$qty = $_POST['qty'];
$price = $_POST['price'];

mysqli_query("INSERT INTO user VALUES('','$id','$name','$importir_id','$Photo','$qty','$price')");

header("location:index.php?pesan=input");
