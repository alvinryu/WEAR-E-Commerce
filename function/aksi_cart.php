<?php

	include_once("koneksi.php");

	$email = isset($_GET['email']) ? $_GET['email'] : false;
	$id_p = $_GET['id_p'];
	$warna = $_GET['warna'];
	$ukuran = $_GET['ukuran'];
	$jumlah = $_GET['jumlah'];

	// $_SESSION['email'] = $row['email'];

	if($email == false){
		echo "<script> window.location='../login.php'</script>";
	}else{
		mysqli_query($koneksi, "INSERT INTO keranjang (email_user, id_produk, ukuran, jumlah)
									VALUES ('$email', '$id_p', '$ukuran', '$jumlah')");
		echo "<script> window.location='../keranjang.php'</script>";
	}
?>
