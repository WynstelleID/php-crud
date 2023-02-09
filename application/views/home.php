<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>

<body>
  <button onclick="document.location.href='<?php echo base_url('HakAkses/formInput') ?>'">Tambah Akses</button>
  <button onclick="document.location.href='<?php echo base_url('Pengguna') ?>'">Tabel Pengguna</button>
  <button onclick="document.location.href='<?php echo base_url('Barang') ?>'">Tabel Barang</button>
  <button onclick="document.location.href='<?php echo base_url('Supplier') ?>'">Tabel Supplier</button>
  <button onclick="document.location.href='<?php echo base_url('Pembelian') ?>'">Tabel Pembelian</button>

  <table>
    <tr>
      <td><b>No.</b></td>
      <td><b>ID Akses</b></td>
      <td><b>Nama Akses</b></td>
      <td><b>Keterangan</b></td>
      <td><b>Action</b></td>
    </tr>
    <?php 
      $count = 0;
      foreach ($data_hak_akses as $row) {
        $count = $count + 1;
    ?>
    <tr>
      <td><?php echo $count ?></td>
      <td><?php echo $row->IdAkses ?></td>
      <td><?php echo $row->NamaAkses ?></td>
      <td><?php echo $row->Keterangan ?></td>
      <td><a href="<?php echo base_url("HakAkses/formEdit/"). $row->IdAkses ?>">Edit</a><a
          href="<?php echo base_url("HakAkses/AksiDeleteData/"). $row->IdAkses ?>">Delete</a></td>
    </tr>

    <?php }  ?>

  </table>
</body>

</html>