<?php
require 'koneksi.php';

$result = mysqli_query($connect, "SELECT * FROM guru");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/style.css" />
</head>
<body>
  <?php include 'navbar.php' ?>

  <h1>Daftar Guru</h1>
  <a href="guru_tambah.php" class="btn">Tambah Data Guru</a>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Mata Pelajaran</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      while($data = mysqli_fetch_assoc($result)):
      ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $data['id'] ?></td>
        <td><?=  $data['nama'] ?></td>
        <td><?= $data['jenis_kelamin'] ?></td>
        <td><?= $data['mapel'] ?></td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>

</body>
</html>