<?php 
include("koneksi.php"); 
echo "<table border=1 align=center cellpadding=0 
cellspacing=0> 
<tr><h3>ini adalah data anggota</h3></tr> 
<tr> 
<td>No.</td> 
<td><div align=center>Nama</div></td> 
<td>Alamat</td> 
<td>E-Mail</td> 
<td>telp</td></tr>"; 
$sql="select * from anggota order by id"; 
$qry = mysql_query($sql); 
while ( $a = mysql_fetch_array ( $qry ) ) { 
$i++; 
echo ("<tr><td><center><font face=verdana 
size=3>$i.</td>"); 
echo ("<td><font face=verdana size=3>$a[nama]</td>"); 
echo ("<td><font face=verdana size=3>$a[alamat]</td>"); 
echo ("<td><font face=verdana size=3>$a[email]</td>"); 
echo ("<td><font face=verdana 
size=3>$a[telp]</td></tr>"); 
} 
echo "</table>"; 
?> 