<?php
require 'koneksi.php';

$result = mysqli_query($connect, "SELECT * FROM jurusan");
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

  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Jumlah Kelas</th>
        <th>Tahun</th>
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
        <td><?= $data['jumlah_kelas'] ?></td>
        <td><?= $data['tahun'] ?></td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>

</body>
</html>