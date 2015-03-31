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
    <h2 id="slogan">Surabaya Tourism Information</h2>
  </div>
  <div id="menu">
    <ul>
      <li><a href="halaman_utama.php">Beranda</a></li>
      <li><a href="halaman_daftar_wisata.php">Daftar Wisata</a></li>
      <li><a href="halaman_eventnews.php">Event and News</a></li>
      
    </ul>
  </div>
  <div id="sidebar" >
    <h1>Jenis Wisata</h1>
    <ul class="sidemenu">
      <li><a href="museum.php">Museum</a></li>
      <li><a href="taman.php">Taman</a></li>
      <li><a href="alam.php">Wisata Alam</a></li>
      <li><a href="rekreasi.php">Taman Rekreasi</a></li>
      
    </ul>
    <h1>Harga</h1>
    <ul class="sidemenu">
      <li><a href="#">>20.000,-</a></li>
      <li><a href="#">20.000-50.000</a></li>
      <li><a href="#">50.000-100.000</a></li>
      <li><a href="#">>100.000</a></li>
    </ul>
    <h1>Lokasi</h1>
	      <li><a href="pusat.php">Surabaya Pusat</a></li>
		  <li><a href="tengah.php">Surabaya Tengah</a></li>
		  <li id= "current" ><a href="timur.php">Surabaya Timur</a></li>
		  <li><a href="selatan.php">Surabaya Selatan</a></li>
		  <li><a href="barat.php">Surabaya Barat</a></li>
    
  </div>
  <div id="main"> <a name="MostViewed"></a>
    <h1>Museum</h1>
    Kenjeran Park
    <p></p>
    <p class="post-footer align-right"> <a href="#" class="readmore">Read more</a> <a href="#" class="comments">Comments ()</a> <span class="date">Oct 11, 2006</span> </p>
    
    <br />
  </div>
  <div id="rightbar">
    <h1>Event and News</h1>
    <p>Glow Run</p>
    <h1>Rekomendasi Editor</h1>
    <p>Museum Bank Indonesia </p>
  </div>
</div>
<div id="footer">
  <div id="footer-content">
 
    <div id="footer-left"> contact us </div>
  </div>
</div>
</body>
</html>
