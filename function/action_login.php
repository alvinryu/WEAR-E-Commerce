<?php

	include_once("koneksi.php");

	$email = $_POST['email'];
	$password = $_POST['pwd'];

	$query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' AND passwd ='$password'");

	unset($_POST['pwd']);
	$dataForm = http_build_query($_POST);

	if(mysqli_num_rows($query) == 0){
		echo "<script> window.location='../login.php?notif=true&$dataForm'</script>";
	}else{
		$row = mysqli_fetch_assoc($query);

		session_start();

		$_SESSION['email'] = $row['email'];

		echo "<script> window.location='../index.php'</script>";

	}

?>
