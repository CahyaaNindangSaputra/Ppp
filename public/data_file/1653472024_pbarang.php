<?php
include('index.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add"){
	$koneksi->tambah_data($_POST['id_barang'], $_POST['nama_barang'], $_POST['stok'], $_POST['harga_beli'], $_POST['harga_jual']);
	header('location:tdata.php');
	}
?>