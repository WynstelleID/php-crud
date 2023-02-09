<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Pengguna</title>
</head>

<body>
  <button onclick="document.location.href='<?php echo base_url('HakAkses') ?>'">Kembali</button>
  <button onclick="document.location.href='<?php echo base_url('Pengguna/formInput/'). end($data_pengguna)->IdPengguna ?>'">Tambah Data</button>
  <table>
    <tr>
      <td><b>No.</b></td>
      <td><b>ID Pengguna</b></td>
      <td><b>Nama Pengguna</b></td>
      <td><b>Nama Depan</b></td>
      <td><b>Nama Belakang</b></td>
      <td><b>Nohp</b></td>
      <td><b>ID Akses</b></td>
      <td><b>Action</b></td>
    </tr>
    <?php 
      $count = 0;
      foreach ($data_pengguna as $row) {
        $count = $count + 1;
    ?>
    <tr>
      <td><?php echo $count ?></td>
      <td><?php echo $row->IdPengguna ?></td>
      <td><?php echo $row->NamaPengguna ?></td>
      <td><?php echo $row->NamaDepan ?></td>
      <td><?php echo $row->NamaBelakang ?></td>
      <td><?php echo $row->NoHp ?></td>
      <td><?php echo $row->IdAkses ?></td>
      
      <td><a href="<?php echo base_url("Pengguna/formEdit/"). $row->IdPengguna ?>">Edit</a><a
          href="<?php echo base_url("Pengguna/AksiDeleteData/"). $row->IdPengguna ?>">Delete</a></td>
    </tr>

    <?php }  ?>

  </table>
</body>

</html>