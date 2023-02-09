<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data</title>
</head>

<body>
  <h3>Form Edit Data Pembelian</h3>

  <table>
    <form action="<?php echo base_url('Pembelian/AksiEdit') ?>" method="post">
      <tr>
        <td>Id Pembelian</td>
        <td>:</td>
        <td>
        <input type="text" name="idpembelian" value="<?php echo $data_pembelian->IdPembelian ?>" disabled> <!-- untuk menampilkan data -->
          <input type="hidden" name="idpembelian" value="<?php echo $data_pembelian->IdPembelian ?>">
          <!-- untuk menampilkan data IdPembelian (pk database) -->
        </td>
      </tr>
      <tr>
        <td>Jumlah Pembelian</td>
        <td>:</td>
        <td><input type="text" name="jumlahpembelian" value="<?php echo $data_pembelian->JumlahPembelian ?>"></td>
      </tr>
      <tr>
        <td>Harga Beli</td>
        <td>:</td>
        <td><input type="text" name="hargabeli" value="<?php echo $data_pembelian->HargaBeli ?>"></td>
      </tr>
      <tr>
        <td>Id Pengguna</td>
        <td>:</td>
        <td><input type="text" name="idpengguna" value="<?php echo $data_pembelian->IdPengguna ?>"></td>
      </tr>
      <tr>
        <td colspan="3">
          <center><input type="submit" value="SIMPAN"></center>
        </td>
      </tr>
  </table>
</body>

</html>