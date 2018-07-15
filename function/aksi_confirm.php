<?php
  session_start();
	include_once("koneksi.php");
  date_default_timezone_set('Asia/Jakarta');

  $nama = $_POST['name'];
  $norek = $_POST['no_rek'];
  $bank = $_POST['bank'];
  $jumlah = $_POST['jumlah'];
  $notrans = $_POST['no_transaksi'];

  $dataForm = http_build_query($_POST);

  if(!preg_match("/^[0-9]*$/",$nama)){
		echo "<script> window.location='../confirm.php?$dataForm&notif=numberNama'</script>";
  }elseif(!preg_match("/^[0-9]*$/",$norek)){
		echo "<script> window.location='../confirm.php?$dataForm&notif=numberRek'</script>";
  }elseif(!preg_match("/^[0-9]*$/",$jumlah)){
		echo "<script> window.location='../confirm.php?$dataForm&notif=numberJum'</script>";
  }elseif(!preg_match("/^[0-9]*$/",$notrans)){
		echo "<script> window.location='../confirm.php?$dataForm&notif=numberTrans'</script>";
  }elseif(strlen($notrans) != 6){
    echo "<script> window.location='../confirm.php?$dataForm&notif=nilaiTrans'</script>";
  }else{
    mysqli_query($koneksi, "INSERT INTO konfirmasi (nama, no_rek, bank, jumlah, no_transaksi)
                  VALUES ('$nama', '$norek', '$bank', '$jumlah', '$notrans' )");
  }

?>
