<?php 

include("koneksi.php");
include("index.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: lihatberita.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM berita WHERE id=$id";
$query = mysqli_query($koneksi, $sql);
$berita = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<body>
	<header>
		<h3>Formulir Edit Berita</h3>
	</header>
	
	<form action="edit.php" method="POST">
		
		<fieldset>
			
			<input type="hidden" name="id" value="<?php echo $berita['id'] ?>" />
		
		<p>
			<label for="nama">Judul </label>
			<input type="text" name="judul" placeholder="Isikan Judul" value="<?php echo $berita['judul'] ?>" />
		</p>
		<p>
			<label for="alamat">Isi </label>
			<textarea name="isi" cols="100" rows="10" tabindex="4"></><?php echo $berita['isi'] ?></textarea>
		</p>
		<p>
			<label for="sekolah_asal">URL </label>
			<input type="text" name="url" placeholder="Isikan URL" value="<?php echo $berita['url'] ?>" />
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	
	</body>
</html>
