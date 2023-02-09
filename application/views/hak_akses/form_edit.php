<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data</title>
</head>

<body>
  <h3>Form Edit Data</h3>

  <table>
    <form action="<?php echo base_url('HakAkses/AksiEdit') ?>" method="post">
      <tr>
        <td>Id Akses</td>
        <td>:</td>
        <td>
        <input type="text" name="idakses" value="<?php echo $data_hak_akses->IdAkses ?>" disabled> <!-- untuk menampilkan data -->
          <input type="hidden" name="idakses" value="<?php echo $data_hak_akses->IdAkses ?>">
          <!-- untuk menampilkan data idakses (pk database) -->
        </td>
      </tr>
      <tr>
        <td>Nama Akses</td>
        <td>:</td>
        <td><input type="text" name="namaakses" value="<?php echo $data_hak_akses->NamaAkses ?>"></td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td>:</td>
        <td><input type="text" name="keterangan" value="<?php echo $data_hak_akses->Keterangan ?>"></td>
      </tr>
      <tr>
        <td colspan="3">
          <center><input type="submit" value="SIMPAN"></center>
        </td>
      </tr>
  </table>
</body>

</html>