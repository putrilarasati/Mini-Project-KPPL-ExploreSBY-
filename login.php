
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
if(isset($_POST['account']) && isset($_POST['password']) ) 
{ //cek isian 
if(!empty($_POST['account']) && !empty($_POST['password']) ) 
 
{

$account=$_POST['account']; 
$password=$_POST['password']; 

$myquery="select account, password from akun where account='$account' and password='$password' limit 1"; 
$result=mysql_query($myquery) or die (mysql_error()); 
if (mysql_num_rows($result) == 1) { 
//jika account dan password cocok 


 $_SESSION['login']=true; 
 $_SESSION['uname']=$account;
 $_SESSION['pswd']=$password;
 
 header("location:halaman_utama.php");
 }
 
 
 
 else { //jika username dan password tidak cocok 
 echo "<h1 align=\"center\">Login Gagal!Coba lagi yaa</h1>"; }}  
 
 

 }
 else { //jika form kosong munculkan pesan 
 echo "<h1 align=\"center\">Whoops, masih kosong tuh!</h1>"; 
 }
  
  
 ?> 
 
 
 
 
 
 <div id="FormLogin">
  <h1>LOGIN APLIKASI Explore Surabaya</h1>
  <form id="FLogin" name="FLogin" method="post" action="">
    <label>Username</label>
    :
    <input name="account" type="text" id="account" size="50" maxlength="50" class="text">
    <br>
	<br>
    <label>Password</label>
    :
    <input name="password" type="password" id="password" size="50" maxlength="50" class="text">
    <br>
	<br>
	

    
	
	
      <input type="submit" name="button" id="button" value="Login" />
      <input type="reset" name="Reset" id="button" value="Reset" />
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
