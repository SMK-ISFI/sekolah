<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Guru</title>

  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  
  <?php include 'navbar.php' ?>

  <h1>Tambah Data Guru Baru</h1>

  <form action="guru_tambah_proses.php" method="POST">
    <div class="mb">
      <label for="nama">Nama Lengkap</label>
      <input type="text" name="nama" id="nama" required/>
    </div>

    <div class="mb">
      <label for="gender">Jenis Kelamin</label> <br/>
      <input type="radio" name="gender" id="gender" value="Laki-laki" checked/> Laki-laki <br/>
      <input type="radio" name="gender" id="gender" value="Perempuan" /> Perempuan 
    </div>

    <div class="mb">
      <label for="mapel">Mata Pelajaran</label>
      <input type="text" name="mapel" id="mapel" required/>
    </div>

    <button type="submit" name="simpan" class="btn">Simpan</button>
  </form>

</body>
</html>