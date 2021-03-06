<?php
  include('koneksi.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Ahmad Maulana | PHP</title>
  </head>
  <body>
    <center><h1>Data Produk</h1><center>
    <center><a href="tambah_produk.php">+ &nbsp; Tambah Produk</a><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Produk</th>
          <th>Keterangan</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
        $query = "SELECT * FROM produk ORDER BY id ASC";
        $result = mysqli_query($koneksi, $query);
        if(!$result){
          die ("Query Error: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }
        $no = 1;
        while($row = mysqli_fetch_assoc($result))
        {
          ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['nama_produk']; ?></td>
            <td><?php echo substr($row['keterangan'], 0, 20); ?>...</td>
            <td>Rp <?php echo number_format($row['harga'],0,',','.'); ?></td>
            <td><?php echo $row['jumlah']; ?> buah</td>
            <td>
                <a href="edit_produk.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
            </td>
          </tr>
        <?php
        $no++;
      }
      ?>
    </tbody>
    </table>
  </body>
</html>