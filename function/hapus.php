<?php
  include_once("koneksi.php");

  $idcart = $_GET['id_cart'];

  mysqli_query($koneksi,"DELETE FROM keranjang WHERE id_keranjang='$idcart'")or die(mysqli_error());

  header("location:../keranjang.php");

 ?>
