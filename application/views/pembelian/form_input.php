<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input data</title>
</head>

<body>
  <h3>Form Input Data Pembelian</h3>

  <table>
    <form action="<?php echo base_url('Pembelian/AksiInsert')?>" method="post">
      <tr>
        <td>ID Pembelian</td>
        <td>:</td>
        <td>
        <input type="text" name="idpembelian" value="<?php echo $data_pembelian->IdPembelian + 1 ?>" disabled> <!-- untuk menampilkan data -->
        <input type="hidden" name="idpembelian" value="<?php echo $data_pembelian->IdPembelian + 1 ?>">
        </td>
      </tr>
      <tr>
        <td>Jumlah Pembelian</td>
        <td>:</td>
        <td><input type="text" name="jumlahpembelian" required></td>
      </tr>
      <tr>
        <td>HargaBeli</td>
        <td>:</td>
        <td><input type="text" name="hargabeli" required></td>
      </tr>
      <tr>
        <td>IdPengguna</td>
        <td>:</td>
        <td><input type="text" name="idpengguna" required></td>
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