<?php 
// buka koneksi ke database server 
$database="belajar"; // sesuaikan dengan database
$hostname="localhost"; // sesuaikan 
$username="root"; // sesuaikan 
$password=""; //sesuaikan 
if (!$dbh=mysql_connect($hostname,$username,$password)) 
{ 
echo mysql_error(); 
exit; 
}else { 
// select default database 
mysql_select_db($database, $dbh); 
echo "<h1><b>selamat anda sukses mengakses 
database</b></h1><br/><hr/>"; 
} 
?>