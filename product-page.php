<?php
	session_start();
	include_once("function/rupiah.php");

	$email = isset($_SESSION['email']) ? $_SESSION['email'] : false;

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>WEAR</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="bootstrap.min.js" ></script>

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="index.php">
							<img src="./img/logo.jpg" alt="">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
						<form action="products.php" method="GET">
							<input class="input search-input" type="text" placeholder="Cari Barang" name="cari">
							<button class="search-btn" value="cari"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- /Search -->
				</div>

				<div class="pull-right">
					<ul class="header-btns">
						<!-- Account -->
						<?php if($email)
						{
							?>
								<li class="header-account">
									<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
										<div class="header-btns-icon">
											<i class="fa fa-user-o"></i>
										</div>
										<strong class="text-uppercase">Hi, <?php echo "$email";?>  </strong>
									</div>
									<a href="function/logout.php" class="text-uppercase">Keluar</a>
									<ul class="custom-menu">
										<li><a href="login.php"><i class="fa fa-unlock-alt"></i> Masuk</a></li>
										<li><a href="register.php"><i class="fa fa-user-plus"></i> Buat Akun</a></li>
									</ul>
								</li>
								<?php
							} else{
						 ?>
								<li class="header-account dropdown default-dropdown">
									<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
										<div class="header-btns-icon">
											<i class="fa fa-user-o"></i>
										</div>
										<strong class="text-uppercase">Akun Saya &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<i class="fa fa-caret-down"></i></strong>
									</div>
									<a href="#" class="text-uppercase">Lupa Kata Sandi</a>
									<ul class="custom-menu">
										<li><a href="login.php"><i class="fa fa-unlock-alt"></i> Masuk</a></li>
										<li><a href="register.php"><i class="fa fa-user-plus"></i> Buat Akun</a></li>
									</ul>
								</li>
								<?php
							}
							?>
						<!-- /Account -->

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				<div class="category-nav show-on-click">
					<span class="category-header">Kategori <i class="fa fa-list"></i></span>
					<ul class="category-list">
            <li class="dropdown side-dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Sepatu Perempuan <i class="fa fa-angle-right"></i></a>
              <div class="custom-menu">
                <div class="row">
                  <div class="col-md-5">
                    <ul class="list-links">
                      <li>
                        <h3 class="list-links-title">Kategori Sepatu Perempuan</h3></li>
                        <li><a href="products.php?perempuan=true&formal=true">Sepatu Formal</a></li>
                        <li><a href="products.php?perempuan=true&kasual=true">Sepatu Kasual</a></li>
                        <li><a href="products.php?perempuan=true&sneaker=true">Sepatu Sneaker</a></li>
                    </ul>
                </div>
                <div class="row hidden-sm hidden-xs">
                  <div class="col-md-6">
                    <a class="banner banner-1" href="#">
                      <img src="./img/banner05.jpg" alt="">
                      <div class="banner-caption text-center">
                        <h2 class="white-color">NEW COLLECTION</h2>
                        <h3 class="white-color font-weak">HOT DEAL</h3>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </li>

            <li class="dropdown side-dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Sepatu Pria <i class="fa fa-angle-right"></i></a>
              <div class="custom-menu">
                <div class="row">
                  <div class="col-md-5">
                    <ul class="list-links">
                      <li>
                        <h3 class="list-links-title">Kategori Sepatu Pria</h3></li>
                        <li><a href="products.php?pria=true&formal=true">Sepatu Formal</a></li>
                        <li><a href="products.php?pria=true&kasual=true">Sepatu Kasual</a></li>
                        <li><a href="products.php?pria=true&sneaker=true">Sepatu Sneaker</a></li>
                    </ul>
                </div>
                <div class="row hidden-sm hidden-xs">
                  <div class="col-md-6">
                    <a class="banner banner-1" href="#">
                      <img src="./img/banner05.jpg" alt="">
                      <div class="banner-caption text-center">
                        <h2 class="white-color">NEW COLLECTION</h2>
                        <h3 class="white-color font-weak">HOT DEAL</h3>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </li>

            <li class="dropdown side-dropdown">
							<a href="custom.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Custom Sepatu <i class="fa"></i></a>
						</li>

            <li class="dropdown side-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Perawatan Sepatu <i class="fa"></i></a>
						</li>

					</ul>
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="index.php">Beranda</a></li>
						<li><a href="products.php">Shop</a></li>
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.php">Beranda</a></li>
				<li><a href="products.php">Produk</a></li>
				<li class="active">Detail Produk
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!--  Product Details -->
				<div class="product product-details clearfix">
				<?php
					include_once("function/koneksi.php");
					$id_b = isset($_GET['id_p']) ? $_GET['id_p'] : false;

							if($id_b == true){
								$id_p = $_GET['id_p'];
								$data = mysqli_query($koneksi, "SELECT * FROM produk_sepatu where id_produk = $id_p");
							}
					while($d = mysqli_fetch_array($data)){
										$id_p = $d['id_produk'];
										$nama = $d['nama_produk'];
										$harga = $d['harga'];
										$gambar = $d['gambar'];
										$warna = $d['warna'];

				?>
					<div class="col-md-6">
						<div id="product-main-view">
							<div class="product-view">
								<img src="./file/<?php echo $gambar; ?>" height="450" alt="">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="product-body">
							<h2 class="product-name"><?php echo $nama; ?></h2>
							<h3 class="product-price"><?php echo rupiah($harga); ?></h3>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o empty"></i>
								</div>
							</div>
							<p><strong>Availability:</strong> Tersedia</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
								dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="product-options ">
								<ul class="size-option">
									<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    <label class="input-group-text" for="inputGroupSelect01">Ukuran</label>
									  </div>
										<form action="function/aksi_cart.php" method="get">
									  <select name="ukuran" class="custom-select" >
									    <option value="41">41</option>
									    <option value="42">42</option>
									    <option value="43">43</option>
											<option value="43">44</option>
											<option value="43">45</option>
											<option value="43">46</option>
									  </select>

									</div>
								</ul>
								<ul class="color-option">
									<li><span class="text-uppercase">Warna: <?php echo $warna; ?></span></li>
									<li><input type="text" hidden name="warna" value="<?php echo $warna; ?>"> </li>
									<li><input type="text" hidden name="id_p" value="<?php echo "$id_p"; ?>"> </li>
									<li><input type="text" hidden name="email" value="<?php echo "$email"; ?>"> </li>
								</ul>
							</div>

							<div class="product-btns">
								<div class="qty-input">
									<span class="text-uppercase">Jumlah : </span>
									<input name="jumlah" class="input" type="number" min="1" value="1">
								</div> <br> <br>
								<!-- <a href="function/aksi_cart.php?id_p= <?php echo "$id_p"; ?>&email= <?php echo "$email"; ?>&warna= <?php echo "$warna"; ?>&jumlah='jumlah' " class="primary-btn add-to-cart" target="_blank"> <i class="fa fa-shopping-cart"></i> Add to Cart</a> -->
								<button type="submit" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart </button>
							</div>
						</div> </form>
					</div>

				</div>
				<!-- /Product Details -->
				<?php } ?>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<a class="logo" href="#">
		            <img src="./img/logo.jpg" alt="">
		          </a>
						</div>
						<!-- /footer logo -->

						<p>Tempat beli sepatu terkini dan terbaru, serta perawatan sepatu nomor satu di Indonesia.</p>

						<!-- footer social -->
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Customer Service</h3>
						<ul class="list-links">
							<li><a href="#">Tentang Kami</a></li>
							<li><a href="#">Pengiriman & Pengembalian</a></li>
							<li><a href="#">Pedoman Pengiriman</a></li>
							<li><a href="hub_kami.php">Hubungi Kami</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Langganan</h3>
						<p>Dapatkan info produk terbaru dari kami serta penawaran khusus.</p>
						<form>
							<div class="form-group">
								<input class="input" placeholder="Enter Email Address">
							</div>
							<button class="primary-btn">Gabung langganan</button>
						</form>
					</div>
				</div>
				<!-- /footer subscribe -->
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
