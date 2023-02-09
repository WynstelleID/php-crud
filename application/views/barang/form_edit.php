<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data</title>
</head>

<body>
  <h3>Form Edit Data Barang</h3>

  <table>
    <form action="<?php echo base_url('Barang/AksiEdit') ?>" method="post">
      <tr>
        <td>Id Barang</td>
        <td>:</td>
        <td>
        <input type="text" name="idbarang" value="<?php echo $data_barang->IdBarang ?>" disabled> <!-- untuk menampilkan data -->
          <input type="hidden" name="idbarang" value="<?php echo $data_barang->IdBarang ?>">
          <!-- untuk menampilkan data IdPengguna (pk database) -->
        </td>
      </tr>
      <tr>
        <td>Nama Barang</td>
        <td>:</td>
        <td><input type="text" name="namabarang" value="<?php echo $data_barang->NamaBarang ?>"></td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td>:</td>
        <td><input type="text" name="keterangan" value="<?php echo $data_barang->Keterangan ?>"></td>
      </tr>
      <tr>
        <td>Satuan</td>
        <td>:</td>
        <td><input type="text" name="satuan" value="<?php echo $data_barang->Satuan ?>"></td>
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
        <td><input type="text" name="idpengguna" value="<?php echo $data_barang->IdPengguna?>" disabled></td>
      </tr>
    
      <tr>
        <td colspan="3">
          <center><input type="submit" value="SIMPAN"></center>
        </td>
      </tr>
  </table>
</body>

</html>