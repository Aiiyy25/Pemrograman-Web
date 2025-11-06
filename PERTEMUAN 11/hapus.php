<?php
include "koneksi.php";

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM diary WHERE id=$id");

echo "<script>alert('Catatan berhasil dihapus!'); window.location='index.php';</script>";
?>
