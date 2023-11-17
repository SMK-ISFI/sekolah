<?php

require 'koneksi.php';

if (isset($_POST['simpan'])) {
  // Ambil semua data di input
  $nama = htmlspecialchars($_POST['nama']);
  $gender = htmlspecialchars($_POST['gender']);
  $mapel = htmlspecialchars($_POST['mapel']);

  // Membuat id
  $string = '0123456789abcdefghijklmnopqrstuvwxyz';
  $id = "guru-" . substr(str_shuffle($string), 0, 16);

  // Proses simpan ke table guru di db
  $query = "INSERT INTO guru(id, nama, jenis_kelamin, mapel) VALUES('$id', '$nama', '$gender', '$mapel')";
  $result = mysqli_query($connect, $query);

  if ($result) {
    header('location: guru.php');
  } else {
    header('location: guru_tambah.php');
  }
}