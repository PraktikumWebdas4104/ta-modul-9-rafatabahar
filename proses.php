<?php
include 'database.php';
$db = new database(); //isi dengan deklarasi method

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
   $film = implode(" ",$_POST['film']);
   $wisata = implode(", ",$_POST['wisata']);
 	$db->input($_POST['nama'],$_POST['alamat'],$_POST['usia'],$film,$wisata);
 	//echo $_POST['nama']; //panggil method input dari class database
 	header("location:tampil.php");
 }elseif($aksi == "hapus"){
 	$db->hapus($_GET['id']); //panggil method hapus dari class database
 	//echo $_GET['id'];
	header("location:tampil.php");
 }elseif($aksi == "update"){
   $film = implode(" ",$_POST['film']);
   $wisata = implode(", ",$_POST['wisata']);
 	$db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia'],$film,$wisata); //panggil method update dari class database
 	header("location:tampil.php");
 }
?>
