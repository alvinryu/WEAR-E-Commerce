<?php
  include_once("koneksi.php");

  $idcart = $_GET['id_cart2'];

  mysqli_query($koneksi,"DELETE FROM keranjang WHERE id_keranjang2='$idcart'")or die(mysqli_error());

  header("location:../keranjang2.php");

 ?>
