<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    mysqli_query($conn, "INSERT INTO diary (judul, isi) VALUES ('$judul', '$isi')");
    echo "<script>alert('Catatan berhasil disimpan!'); window.location='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Catatan</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; padding: 30px; }
        .form-box { max-width: 500px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        input, textarea { width: 100%; padding: 8px; margin: 5px 0 10px; border: 1px solid #ccc; border-radius: 5px; }
        button { background: #28a745; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer; }
        button:hover { background: #218838; }
        a { text-decoration: none; color: #007bff; }
    </style>
</head>
<body>

<div class="form-box">
    <h2>➕ Tambah Catatan Baru</h2>
    <form method="POST">
        <label>Judul:</label><br>
        <input type="text" name="judul" required><br>
        <label>Isi Catatan:</label><br>
        <textarea name="isi" rows="5" required></textarea><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
    <br>
    <a href="index.php">⬅️ Kembali</a>
</div>

</body>
</html>
