<?php
  include 'koneksi.php';

  $nama_produk   = $_POST['nama_produk'];
  $keterangan     = $_POST['keterangan'];
  $harga    = $_POST['harga'];
  $jumlah    = $_POST['jumlah'];

  $query = "INSERT INTO produk (nama_produk, keterangan, harga, jumlah) VALUES ('$nama_produk', '$keterangan', '$harga', '$jumlah')";
  $result = mysqli_query($koneksi, $query);
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
  } else {
    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
  }
?>