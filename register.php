
<?php include("koneksi_database_exploresby.php");

//require_once("Cipher.php");
//$cipher = new Cipher(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
$kunci = "%^%ddmpt$";


$nama = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);
$Password = htmlspecialchars($_POST['Password']);
$Confirmpassword = htmlspecialchars($_POST['Confirmpassword']);


$simpan = mysql_query("INSERT INTO akun VALUES('$nama','$email','$Password','$Confirmpassword')");

if($simpan){
    echo "Berhasil Register";
}
else{
    echo "Gagal browww";
}
?>