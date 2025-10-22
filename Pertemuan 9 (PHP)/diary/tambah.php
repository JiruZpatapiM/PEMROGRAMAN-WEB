<?php
include "config.php";

if (isset($_POST['submit'])) {
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];
  $tanggal = $_POST['tanggal'];

  mysqli_query($conn, "INSERT INTO diary (judul, isi, tanggal) VALUES ('$judul', '$isi', '$tanggal')");
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Catatan</title>
</head>
<body>
  <h2>Tambah Catatan Baru</h2>
  <form method="POST">
    <label>Judul:</label><br>
    <input type="text" name="judul" required><br><br>
    <label>Isi:</label><br>
    <textarea name="isi" required></textarea><br><br>
    <label>Tanggal:</label><br>
    <input type="date" name="tanggal" required><br><br>
    <input type="submit" name="submit" value="Simpan">
  </form>
</body>
</html>
