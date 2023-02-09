<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Pembelian</title>
</head>

<body>
  <button onclick="document.location.href='<?php echo base_url('HakAkses') ?>'">Kembali</button>
  <button onclick="document.location.href='<?php echo base_url('Pembelian/formInput/'). end($data_pembelian)->IdPembelian ?>'">Tambah Data</button>
  <table>
    <tr>
      <td><b>No.</b></td>
      <td><b>ID Pembelian</b></td>
      <td><b>Jumlah Pembelian</b></td>
      <td><b>Harga Beli</b></td>
      <td><b>Id Pengguna</b></td>
      <td><b>Action</b></td>
    </tr>
    <?php 
      $count = 0;
      foreach ($data_pembelian as $row) {
        $count = $count + 1;
    ?>
    <tr>
      <td><?php echo $count ?></td>
      <td><?php echo $row->IdPembelian ?></td>
      <td><?php echo $row->JumlahPembelian ?></td>
      <td><?php echo $row->HargaBeli ?></td>
      <td><?php echo $row->IdPengguna ?></td>
      
      <td><a href="<?php echo base_url("Pembelian/formEdit/"). $row->IdPembelian ?>">Edit</a><a
          href="<?php echo base_url("Pembelian/AksiDeleteData/"). $row->IdPembelian ?>">Delete</a></td>
    </tr>

    <?php }  ?>

  </table>
</body>

</html>