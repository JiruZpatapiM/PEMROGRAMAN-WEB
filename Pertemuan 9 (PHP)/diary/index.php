<?php
include "config.php";
$result = mysqli_query($conn, "SELECT * FROM diary ORDER BY tanggal DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Diary Harian</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>📖 Diary Harian</h2>
  <a href="tambah.php">+ Tambah Catatan</a>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Isi</th>
      <th>Tanggal</th>
      <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
        <td>$no</td>
        <td>{$row['judul']}</td>
        <td>{$row['isi']}</td>
        <td>{$row['tanggal']}</td>
        <td>
          <a href='edit.php?id={$row['id']}'>Edit</a> |
          <a href='hapus.php?id={$row['id']}' onclick='return confirm(\"Hapus catatan ini?\")'>Hapus</a>
        </td>
      </tr>";
      $no++;
    }
    ?>
  </table>
</body>
</html>
