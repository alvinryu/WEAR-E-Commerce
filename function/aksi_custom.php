<?php

	include_once("koneksi.php");

  session_start();


  $email = isset($_SESSION['email']) ? $_SESSION['email'] : false;
  $nama_k = $_POST['name'];
	$warna = $_POST['warna'];
	$ukuran = $_POST['ukuran'];
	$jumlah = $_POST['jumlah'];

	// $_SESSION['email'] = $row['email'];
	$dataForm = http_build_query($_POST);

	if($email == false){
		echo "<script> window.location='../index.php'</script>";
	}elseif(strlen($nama_k) > 7){
			echo "<script> window.location='../custom.php?$dataForm&notif=maxName'</script>";
	}else{
		mysqli_query($koneksi, "INSERT INTO keranjang2 (email_user, nama_kustom, warna, ukuran, jumlah)
									VALUES ('$email', '$nama_k', '$warna', '$ukuran', '$jumlah')");
		echo "<script> window.location='../keranjang.php'</script>";
	}
?>
