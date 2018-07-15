<?php

	include_once("koneksi.php");

	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$pesan = $_POST['pesan'];;
	
	$dataForm = http_build_query($_POST);
	
	if(empty($email) || empty($subject) || empty($pesan) ){
		echo "<script> window.location='../hub_kami.php?$dataForm&notif=require'</script>";
	}elseif(strlen($subject) < 5){
		echo "<script> window.location='../hub_kami.php?$dataForm&notif=minSub'</script>";
	}elseif(strlen($pesan) < 15){
		echo "<script> window.location='../hub_kami.php?$dataForm&notif=minMes'</script>";
	}else{
		mysqli_query($koneksi, "INSERT INTO pesan (email, subject, pesan) 
									VALUES ('$email', '$subject', '$pesan' )");
		echo "<script> window.location='../hub_kami.php?notif=sukses'</script>";
	}
	
?>

