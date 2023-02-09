<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Supplier</title>
</head>

<body>
  <button onclick="document.location.href='<?php echo base_url('HakAkses') ?>'">Kembali</button>
  <button onclick="document.location.href='<?php echo base_url('Supplier/formInput/'). end($data_supplier)->IdSupplier ?>'">Tambah Data</button>
  <table>
    <tr>
      <td><b>No.</b></td>
      <td><b>Nama Supplier</b></td>
      <td><b>ID Supplier</b></td>
      <td><b>Nohp</b></td>
      <td><b>ID Pembelian</b></td>
      <td><b>Action</b></td>
    </tr>
    <?php 
      $count = 0;
      foreach ($data_supplier as $row) {
        $count = $count + 1;
    ?>
    <tr>
      <td><?php echo $count ?></td>
      <td><?php echo $row->NamaSupplier ?></td>
      <td><?php echo $row->IdSupplier ?></td>
      <td><?php echo $row->NoHp ?></td>
      <td><?php echo $row->IdPembelian ?></td>
      
      <td><a href="<?php echo base_url("Supplier/formEdit/"). $row->IdSupplier ?>">Edit</a><a
          href="<?php echo base_url("Supplier/AksiDeleteData/"). $row->IdSupplier ?>">Delete</a></td>
    </tr>

    <?php }  ?>

  </table>
</body>

</html>