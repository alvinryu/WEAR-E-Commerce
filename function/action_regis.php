<?php

	include_once("koneksi.php");

	$level = "customer";
	$nama = $_POST['nama'];
	$telphone = $_POST['telphon'];
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	$alamat = "";
	
	unset($_POST['pwd']);
	$dataForm = http_build_query($_POST);
	
	$query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");
	
	if(empty($nama) || empty($telphone) || empty($email) || empty($password) ){
		echo "<script> window.location='../register.php?$dataForm&notif=require'</script>";
		
	}elseif(mysqli_num_rows($query) == 1){
		echo "<script> window.location='../register.php?$dataForm&notif=emailSame'</script>";
	}elseif(strlen($nama) < 5){
		echo "<script> window.location='../register.php?$dataForm&notif=minNama'</script>";
	}elseif(strlen($telphone) < 11){
		echo "<script> window.location='../register.php?$dataForm&notif=minTel'</script>";
	}elseif(strlen($password) < 6){
		echo "<script> window.location='../register.php?$dataForm&notif=minPwd'</script>";
	}elseif(!preg_match("/^[0-9]*$/",$telphone)){
		echo "<script> window.location='../register.php?$dataForm&notif=numberTel'</script>";
	}else{
		mysqli_query($koneksi, "INSERT INTO user (level, nama, telepon, email, passwd, alamat) 
									VALUES ('$level', '$nama', '$telphone', '$email', '$password', '$alamat' )");
		echo "<script> window.location='../login.php'</script>";
	}
	
?>
