<?php
  include 'koneksi.php';

  if (isset($_GET['id'])) {
    $id = ($_GET["id"]);
    
    $query = "SELECT * FROM produk WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    $data = mysqli_fetch_assoc($result);
    if (!count($data)) {
      echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
    }
  } else {
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }
  ?>
  
<!DOCTYPE html>
<html>
  <head>
    <title>Ahmad Maulana | PHP</title>
  </head>
  <body>
    <center>
      <h1>Edit Produk <?php echo $data['nama_produk']; ?></h1>
    <center>
    <form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
    <section class="base">
      <input name="id" value="<?php echo $data['id']; ?>"  hidden />
      <div>
        <label>Nama Produk</label>
        <input type="text" name="nama_produk" value="<?php echo $data['nama_produk']; ?>" autofocus="" required="" />
      </div>
      <div>
        <label>Keterangan</label>
        <input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>" />
      </div>
      <div>
        <label>Harga</label>
        <input type="text" name="harga" required=""value="<?php echo $data['harga']; ?>" />
      </div>
      <div>
        <label>Jumlah</label>
        <input type="text" name="jumlah" required="" value="<?php echo $data['jumlah']; ?>"/>
      </div>
      <div>
        <button type="submit">Simpan Perubahan</button>
      </div>
    </section>
    </form>
  </body>
</html>