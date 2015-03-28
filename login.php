
<?php include("koneksi_database_exploresby.php");

//require_once("Cipher.php");
//$cipher = new Cipher(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
$kunci = "%^%ddmpt$";

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>ExploreSBY</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="images/CitrusIsland.css" type="text/css" />
</head>
<body>
<div id="wrap">
  <div id="header">
    <form method="post" class="search" action="#">
      <p>
        <input name="search_query" class="textbox" type="text" />
        <input name="search" class="button" value="Search" type="submit" />
      </p>
    </form>
    <h1 id="logo">Explore<span>Surabaya</span></h1>
	<h1 </span></h1>
    <h2 id="slogan">Surabaya Tourism Information</h2>
  </div>
  <div id="menu">
    <ul>
      <li id="current"><a href="#">Beranda</a></li>
      <li><a href="#">Daftar Wisata</a></li>
      <li><a href="#">Event and News</a></li>
       
   
 
 
 
 <?php //Penangganan login jika form diisi 
if(isset($_POST['email']) && isset($_POST['Password']) ) 
{ //cek isian 
if(!empty($_POST['email']) && !empty($_POST['Password']) ) 
 

$email=$_POST['email']; 
$Password=$_POST['Password']; 

$myquery="select email , Password from akun where email='$email' and Password='$Password' limit 1"; 
$result=mysql_query($myquery) or die (mysql_error()); 
if (mysql_num_rows($result) == 1) { 
//jika account dan Password cocok 


 $_SESSION['login']=true; 
 $_SESSION['uname']=$email;
 $_SESSION['pswd']=$Password;
 
 header("location:halaman_utama.php");
 }
  else { //jika username dan password tidak cocok 
 echo "<h1 align=\"center\">Login Gagal!Coba lagi yaa</h1>"; }}  
 
 

 
 else { //jika form kosong munculkan pesan 
 echo "<h1 align=\"center\">Whoops, masih kosong tuh!</h1>"; 
 }
  
  
 ?> 
 
 
 
 
 
 <div id="FormLogin">
  <h1>LOGIN APLIKASI Explore Surabaya</h1>
  <form id="FLogin" name="FLogin" method="post" action="">
    <label>Email : </label>
    <input name="email" type="text" id="email" size="50" maxlength="50" class="text">
    <br>
	<br>
    <label>Password : </label>
    <input name="Password" type="Password" id="Password" size="50" maxlength="50" class="text">
    <br>
	<br>
	
      <input type="submit" name="button" id="button" value="Login" />
	  
    </p>

    <div class="clear"></div>
  </div>
</div>
<br>
<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
 <div id="FormRegister">
 <h1>OR</h1>
  <h1>REGISTER Explore Surabaya</h1>
  <form id="FRegister" name="FRegister" method="post" action="register.php">
    <label>Nama :</label>
    <input name="account" type="text" id="account" size="50" maxlength="50" class="text">
    <br>
	<br>
	<label>Email :</label>
    <input name="account" type="text" id="account" size="50" maxlength="50" class="text">
    <br>
	<br>
    <label>Password :</label>
    <input name="password" type="password" id="password" size="50" maxlength="50" class="text">
    <br>
	<br>
	<label>Confirm Password :</label>
    <input name="account" type="text" id="account" size="50" maxlength="50" class="text">
    <br>
	<br>
	
      <input type="submit" name="button" id="button" value="Create an Account" />
	  
    </p>

    <div class="clear"></div>
  </div>
</div>
<div id="footer">
  <div id="footer-content">
 
    <div id="footer-left"> contact us </div>
  </div>
</div>
</body>
</html>
