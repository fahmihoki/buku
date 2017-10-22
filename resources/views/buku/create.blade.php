<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>create</title>

<body>
	
<form action="/buku" method="post">
	judul   : 
	<input type="text" name="judul" placeholder="judul"><br>
	noisbn  : 
	<input type="text" name="noisbn" placeholder="noisbn"><br>
	penulis  : 
	<input type="text" name="penulis" placeholder="penulis"><br>
	penerbit  : 
	<input type="text" name="penerbit" placeholder="penerbit"><br>
	stok : 
	<input type="text" name="stok" placeholder="stok"><br>
	harga_pokok  : 
	<input type="text" name="harga_pokok" placeholder="harga pokok"><br>
	harga_jual  : 
	<input type="text" name="harga_jual" placeholder="harga jual"><br>
	ppn  : 
	<input type="text" name="ppn" placeholder="ppn"><br>
	diskon  : 
	<input type="text" name="diskon" placeholder="diskon"><br>


	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	
	<input type="submit" value="ok">
</form>

</body>
</html>