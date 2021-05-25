<?php 
if(isset($_COOKIE['username'])) { 
 echo "<h1>Cookie 'username' ada. Isinya : " .
 $_COOKIE['username']; } 
 else { echo "<h1>Cookie 'username' TIDAK ada.</h1>"; } 
 if(isset($_COOKIE['nama lengkap'])) {
 echo "<h1>Cookie 'nama lengkap' ada. Isinya : " .
  $_COOKIE['namalengkap'];
  } else { 
  	echo "<h1>Cookie 'nama lengkap' TIDAK ada.</h1>"; } 
  	echo "<h2>Klik <a href='cookies_1.php'>di sini</a> untuk penciptaan cookies</h2>"; 
  	echo "<h2>Klik <a href='cookies_3.php'>di sini</a> untuk penghapusan cookies</h2>";
   ?> 