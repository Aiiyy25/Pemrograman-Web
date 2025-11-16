<?php
include "koneksi.php";
$result = mysqli_query($conn, "SELECT * FROM diary ORDER BY tanggal DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>📖 My Diary</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 30px; }
        h1 { text-align: center; }
        .container { max-width: 700px; margin: 0 auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        a.button { background: #007bff; color: white; padding: 8px 12px; border-radius: 5px; text-decoration: none; }
        a.button:hover { background: #0056b3; }
        .note { border-bottom: 1px solid #ccc; padding: 10px 0; }
        .note:last-child { border-bottom: none; }
        .note h3 { margin: 0; color: #333; }
        .note p { margin: 5px 0; }
        .actions a { text-decoration: none; color: #007bff; margin-right: 10px; }
        .actions a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="container">
    <h1>📔 My Diary</h1>
    <p><a href="tambah.php" class="button">➕ Tambah Catatan</a></p>
    <hr>

    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <div class="note">
            <h3><?php echo htmlspecialchars($row['judul']); ?></h3>
            <p><?php echo nl2br(htmlspecialchars($row['isi'])); ?></p>
            <small><i><?php echo $row['tanggal']; ?></i></small>
            <div class="actions">
                <a href="edit.php?id=<?php echo $row['id']; ?>">✏️ Edit</a>
                <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin hapus catatan ini?')">🗑️ Hapus</a>
            </div>
        </div>
    <?php endwhile; ?>
</div>

</body>
</html>
