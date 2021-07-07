<?php
  include('koneksi.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Ahmad Maulana | PHP</title>
  </head>
  <body>
    <center>
      <h1>Tambah Produk</h1>
    <center>
    <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Produk</label>
          <input type="text" name="nama_produk" autofocus="" required="" />
        </div>
        <div>
          <label>Keterangan</label>
          <input type="text" name="keterangan" />
        </div>
        <div>
          <label>Harga</label>
          <input type="text" name="harga" required="" />
        </div>
        <div>
          <label>Jumlah</label>
          <input type="text" name="jumlah" required="" />
        </div>
        <div>
          <button type="submit">Simpan Produk</button>
        </div>
      </section>
    </form>
  </body>
</html>