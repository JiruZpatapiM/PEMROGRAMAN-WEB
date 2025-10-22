<?php
include "config.php";

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM diary WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];
  $tanggal = $_POST['tanggal'];

  mysqli_query($conn, "UPDATE diary SET judul='$judul', isi='$isi', tanggal='$tanggal' WHERE id=$id");
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Catatan</title>
</head>
<body>
  <h2>Edit Catatan</h2>
  <form method="POST">
    <label>Judul:</label><br>
    <input type="text" name="judul" value="<?= $data['judul'] ?>" required><br><br>
    <label>Isi:</label><br>
    <textarea name="isi" required><?= $data['isi'] ?></textarea><br><br>
    <label>Tanggal:</label><br>
    <input type="date" name="tanggal" value="<?= $data['tanggal'] ?>" required><br><br>
    <input type="submit" name="submit" value="Update">
  </form>
</body>
</html>
