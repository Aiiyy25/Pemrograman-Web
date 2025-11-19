<?php 
include("koneksi.php"); 
echo "<table border=1 align=center cellpadding=0 
cellspacing=0> 
<tr><h3>ini adalah data forum</h3></tr> 
<tr> 
<td>No.</td> 
<td><div align=center>Nama</div></td> 
<td>pesan</td>"; 
$sql="select * from forum order by idf"; 
$qry = mysql_query($sql); 
while ( $a = mysql_fetch_array ( $qry ) ) { 
$i++; 
echo ("<tr><td><center><font face=verdana 
size=3>$i.</td>"); 
echo ("<td><font face=verdana size=3>$a[nama]</td>"); 
echo ("<td><font face=verdana 
size=3>$a[pesan]</td></tr>"); 
} 
echo "</table>"; 