<?php
include "koneksi.php";

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM diary WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    mysqli_query($conn, "UPDATE diary SET judul='$judul', isi='$isi' WHERE id=$id");
    echo "<script>alert('Catatan berhasil diperbarui!'); window.location='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Catatan</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; padding: 30px; }
        .form-box { max-width: 500px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        input, textarea { width: 100%; padding: 8px; margin: 5px 0 10px; border: 1px solid #ccc; border-radius: 5px; }
        button { background: #ffc107; color: #000; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer; }
        button:hover { background: #e0a800; }
        a { text-decoration: none; color: #007bff; }
    </style>
</head>
<body>

<div class="form-box">
    <h2>✏️ Edit Catatan</h2>
    <form method="POST">
        <label>Judul:</label><br>
        <input type="text" name="judul" value="<?php echo htmlspecialchars($data['judul']); ?>" required><br>
        <label>Isi Catatan:</label><br>
        <textarea name="isi" rows="5" required><?php echo htmlspecialchars($data['isi']); ?></textarea><br>
        <button type="submit" name="update">Simpan Perubahan</button>
    </form>
    <br>
    <a href="index.php">⬅️ Kembali</a>
</div>

</body>
</html>
