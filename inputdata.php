<?php


include("koneksi_database_exploresby.php");

//require_once("Cipher.php");
//$cipher = new Cipher(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
$kunci = "%^%ddmpt$";

//Pilih nama database tempat tabel akan dibuat
mysql_select_db("explorsby");

//ambil data dari form input yang kita buat sebelumnya
// dengan method POST

$nama_tempatwisata = $_POST['nama'];
$harga_tempatwisata = $_POST['harga'];
$jenis_tempatwisata = $_POST['jenis'];
$lokasi_tempatwisata = $_POST['lokasi'];
$informasi_tempatwisata = $_POST['info'];


		$simpan = mysql_query ("INSERT INTO tempat_wisata (nama_tempatwisata, harga_tempatwisata, jenis_tempatwisata, lokasi_tempatwisata,informasi_tempatwisata) VALUES ('$nama_tempatwisata','$harga_tempatwisata','$jenis_tempatwisata','$lokasi_tempatwisata','$informasi_tempatwisata');
        if ($simpan) {
            echo '<h1><center>Pendaftaran Berhasil, </center></h1>';
			
        } else {
            echo '<h1><center>Maaf, Proses Pendaftaran Gagal!</center></h1>';
			
        }

<?