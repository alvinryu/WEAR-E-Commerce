<!DOCTYPE html>
<html>
<head>
	<title>Membuat Upload File Dengan PHP Dan MySQL | www.malasngoding.com</title>
</head>
<body>
	<h1>Membuat Upload File Dengan PHP Dan MySQL <br/> www.malasngoding.com</h1>
	<form action="insert_produk.php" method="post" enctype="multipart/form-data">
		Nama Produk <br/>
		<input type="text" name="nama"> <br/>
		Kategori <br/>
		<input type="text" name="kategori"> <br/>
		Warna <br/>
		<input type="text" name="warna"> <br/>
		Harga <br/>
		<input type="text" name="harga"> <br/>
		Gambar<br/>
		<input type="file" name="file"> <br/>
		<input type="submit" name="upload" value="Upload">
	</form>
</body>
</html>