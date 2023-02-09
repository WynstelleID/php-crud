<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Barang</title>
</head>

<body>
  <button onclick="document.location.href='<?php echo base_url('HakAkses') ?>'">Kembali</button>
  <button onclick="document.location.href='<?php echo base_url('Barang/formInput/'). end($data_barang)->IdBarang ?>'">Tambah Data</button>
  <table>
    <tr>
      <td><b>No.</b></td>
      <td><b>ID Barang</b></td>
      <td><b>Nama Barang</b></td>
      <td><b>Keterangan</b></td>
      <td><b>Satuan</b></td>
      <td><b>Bundling</b></td>
      <td><b>ID Pengguna</b></td>
      <td><b>Action</b></td>
    </tr>
    <?php 
      $count = 0;
      foreach ($data_barang as $row) {
        $count = $count + 1;
    ?>
    <tr>
      <td><?php echo $count ?></td>
      <td><?php echo $row->IdBarang ?></td>
      <td><?php echo $row->NamaBarang ?></td>
      <td><?php echo $row->Keterangan ?></td>
      <td><?php echo $row->Satuan ?></td>
      <td><?php echo $row->Bundling ?></td>
      <td><?php echo $row->IdPengguna ?></td>      
      <td><a href="<?php echo base_url("Barang/formEdit/"). $row->IdBarang ?>">Edit</a><a
          href="<?php echo base_url("Barang/AksiDeleteData/"). $row->IdBarang ?>">Delete</a></td>
    </tr>

    <?php }  ?>

  </table>
</body>

</html>