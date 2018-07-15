<?php
  session_start();
	include_once("koneksi.php");
  date_default_timezone_set('Asia/Jakarta');

  $fnama = $_POST['fname'];
  $lnama = $_POST['lname'];
  $email = $_SESSION['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $country = $_POST['country'];
  $zip = $_POST['zip-code'];
  $tel = $_POST['tel'];
  $waktu = date("Y-m-d h:i:sa");
  $pengiriman = $_POST['shipping'];
  $pembayaran = $_POST['payments'];
  $total = $_SESSION['total'];

  if($pengiriman == 'standar')
    $total += 10000;

  $dataForm = http_build_query($_POST);

  if(!preg_match("/^[0-9]*$/",$zip)){
		echo "<script> window.location='../keranjang.php?$dataForm&notif=numberZip'</script>";
  }elseif(strlen($zip) < 5){
    echo "<script> window.location='../keranjang.php?$dataForm&notif=minZip'</script>";
  }elseif(!preg_match("/^[0-9]*$/",$tel)){
		echo "<script> window.location='../keranjang.php?$dataForm&notif=numberTel'</script>";
  }elseif(strlen($zip) < 5){
    echo "<script> window.location='../keranjang.php?$dataForm&notif=minZip'</script>";
  }else{
    mysqli_query($koneksi, "INSERT INTO checkout (f_name, l_name, email, address, city, country, zip, telphone, waktu, pengiriman, pembayaran, total)
                  VALUES ('$fnama', '$lnama', '$email', '$address', '$city', '$country', '$zip', '$tel', '$waktu', '$pengiriman', '$pembayaran', '$total' )");
    mysqli_query($koneksi, "DELETE FROM keranjang WHERE email_user = '$email'");
    echo "<script> window.location='../keranjang.php'</script>";
  }

?>
