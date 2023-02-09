<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input data</title>
</head>

<body>
  <h3>Form Input Data Barang</h3>

  <table>
    <form action="<?php echo base_url('Barang/AksiInsert')?>" method="post">
      <tr>
        <td>ID Barang</td>
        <td>:</td>
        <td>
        <input type="text" name="idbarang" value="<?php echo $data_barang->IdBarang + 1 ?>" disabled> <!-- untuk menampilkan data -->
        <input type="hidden" name="idbarang" value="<?php echo $data_barang->IdBarang + 1 ?>">
        </td>
      </tr>
      <tr>
        <td>Nama Barang</td>
        <td>:</td>
        <td><input type="text" name="namabarang" required></td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td>:</td>
        <td><input type="text" name="keterangan" required></td>
      </tr>
      <tr>
        <td>Satuan</td>
        <td>:</td>
        <td><input type="text" name="satuan" required></td>
      </tr>
      <tr>
        <td>Bundling</td>
        <td>:</td>
        <td>
          <select name="bundling">
            <option value="1">Ya</option>
            <option value="0">Tidak</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>ID Pengguna</td>
        <td>:</td>
        <td>
        <select name="idpengguna">
          <?php 
           foreach ($data_pengguna as $row) {
          ?>

          <option value="<?php echo $row->IdPengguna ?>"><?php echo $row->NamaPengguna ?></option>
          <?php }  ?>
        </select>
        
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <center><input type="submit" value="SIMPAN"></center>
        </td>
      </tr>
      <form>
  </table>
</body>

</html>