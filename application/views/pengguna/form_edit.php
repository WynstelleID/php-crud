<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data</title>
</head>

<body>
  <h3>Form Edit Data Pengguna</h3>

  <table>
    <form action="<?php echo base_url('Pengguna/AksiEdit') ?>" method="post">
      <tr>
        <td>Id Pengguna</td>
        <td>:</td>
        <td>
        <input type="text" name="idpengguna" value="<?php echo $data_pengguna->IdPengguna ?>" disabled> <!-- untuk menampilkan data -->
          <input type="hidden" name="idpengguna" value="<?php echo $data_pengguna->IdPengguna ?>">
          <!-- untuk menampilkan data IdPengguna (pk database) -->
        </td>
      </tr>
      <tr>
        <td>Nama Pengguna</td>
        <td>:</td>
        <td><input type="text" name="namapengguna" value="<?php echo $data_pengguna->NamaPengguna ?>"></td>
      </tr>
      <tr>
        <td>Nama Depan</td>
        <td>:</td>
        <td><input type="text" name="namadepan" value="<?php echo $data_pengguna->NamaDepan ?>"></td>
      </tr>
      <tr>
        <td>Nama Belakang</td>
        <td>:</td>
        <td><input type="text" name="namabelakang" value="<?php echo $data_pengguna->NamaBelakang ?>"></td>
      </tr>
      <tr>
        <td>NoHp</td>
        <td>:</td>
        <td><input type="text" name="nohp" value="<?php echo $data_pengguna->NoHp ?>"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="alamat" value="<?php echo $data_pengguna->Alamat ?>"></td>
      </tr>
      <tr>
        <td>Hak Akses</td>
        <td>:</td>
        <td>
        <select name="idakses">
          <?php 
           foreach ($data_hak_akses as $row) {
          ?>
          <pre><?php echo $data_pengguna->IdAkses ?></pre>
          <option selected="<?php echo $data_pengguna->IdAkses ?>" value="<?php echo $row->IdAkses ?>"><?php echo $row->NamaAkses ?></option>
          <?php }  ?>
        </select>
        
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <center><input type="submit" value="SIMPAN"></center>
        </td>
      </tr>
  </table>
</body>

</html>