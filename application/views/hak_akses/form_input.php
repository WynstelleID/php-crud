<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input data</title>
</head>

<body>
  <h3>Form Input Data</h3>

  <table>
    <form action="<?php echo base_url('HakAkses/AksiInsert')?>" method="post">
      <tr>
        <td>ID Akses</td>
        <td>:</td>
        <td><input type="text" name="idakses" required></td>
      </tr>
      <tr>
        <td>Nama Akses</td>
        <td>:</td>
        <td><input type="text" name="namaakses" required></td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td>:</td>
        <td><input type="text" name="keterangan" required></td>
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