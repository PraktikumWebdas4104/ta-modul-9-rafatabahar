<?php
include 'database.php';
$db = new database(); //isi dengan deklarasi method
?>

<h1>CRUD OOP PHP</h1>
<h3>Edit Data User</h3>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){ //panggil method edit dari class database
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia" value="<?php echo $d['usia'] ?>"></td>
	</tr>
	<tr>
		<td>Genre Film</td>
		<td>
			<input type="checkbox" name="film[]" value="Horror" <?php if(strpos(" ".$d['film'],"Horror")) echo "Checked"; ?>>Horror<br>
			<input type="checkbox" name="film[]" value="Action" <?php if(strpos(" ".$d['film'],"Action")) echo "Checked"; ?>>Action<br>
			<input type="checkbox" name="film[]" value="Anime" <?php if(strpos(" ".$d['film'],"Anime")) echo "Checked"; ?>>Anime<br>
			<input type="checkbox" name="film[]" value="Thriller" <?php if(strpos(" ".$d['film'],"Thriller")) echo "Checked"; ?>>Thriller<br>
			<input type="checkbox" name="film[]" value="Animasi" <?php if(strpos(" ".$d['film'],"Animasi")) echo "Checked"; ?>>Animasi<br>
		</td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td>Tujuan Wisata</td>
		<td>
			<input type="checkbox" name="wisata[]" value="Bali" <?php if(strpos(" ".$d['wisata'],"Bali")) echo "Checked"; ?>>Bali<br>
			<input type="checkbox" name="wisata[]" value="Raja Ampat" <?php if(strpos(" ".$d['wisata'],"Raja Ampat")) echo "Checked"; ?>>Raja Ampat<br>
			<input type="checkbox" name="wisata[]" value="Pulau Derawan" <?php if(strpos(" ".$d['wisata'],"Pulau Derawan")) echo "Checked"; ?>>Pulau Derawan<br>
			<input type="checkbox" name="wisata[]" value="Bangka Belitung" <?php if(strpos(" ".$d['wisata'],"Bangka Belitung")) echo "Checked"; ?>>Bangka Belitung<br>
			<input type="checkbox" name="wisata[]" value="Labuan Bajo" <?php if(strpos(" ".$d['wisata'],"Labuan Bajo")) echo "Checked"; ?>>Labuan Bajo<br>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>
