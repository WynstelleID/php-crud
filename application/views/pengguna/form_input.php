<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input data</title>
</head>

<body>
  <h3>Form Input Data Pengguna</h3>

  <table>
    <form action="<?php echo base_url('Pengguna/AksiInsert')?>" method="post">
      <tr>
        <td>ID Pengguna</td>
        <td>:</td>
        <td>
        <input type="text" name="idpengguna" value="<?php echo $data_pengguna->IdPengguna + 1 ?>" disabled> <!-- untuk menampilkan data -->
        <input type="hidden" name="idpengguna" value="<?php echo $data_pengguna->IdPengguna + 1 ?>">
        </td>
      </tr>
      <tr>
        <td>Nama Pengguna</td>
        <td>:</td>
        <td><input type="text" name="namapengguna" required></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="text" name="password" required></td>
      </tr>
      <tr>
        <td>Nama Depan</td>
        <td>:</td>
        <td><input type="text" name="namadepan" required></td>
      </tr>
      <tr>
        <td>Nama Belakang</td>
        <td>:</td>
        <td><input type="text" name="namabelakang" required></td>
      </tr>
      <tr>
        <td>NoHp</td>
        <td>:</td>
        <td><input type="text" name="nohp" required></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="alamat" required></td>
      </tr>
      <tr>
        <td>Hak Akses</td>
        <td>:</td>
        <td>
        <select name="idakses">
          <?php 
           foreach ($data_hak_akses as $row) {
          ?>

          <option value="<?php echo $row->IdAkses ?>"><?php echo $row->NamaAkses ?></option>
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