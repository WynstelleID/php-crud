<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data</title>
</head>

<body>
  <h3>Form Edit Data Supplier</h3>

  <table>
    <form action="<?php echo base_url('Supplier/AksiEdit') ?>" method="post">
      <tr>
        <td>Id Supplier</td>
        <td>:</td>
        <td>
        <input type="text" name="idsupplier" value="<?php echo $data_supplier->IdSupplier ?>" disabled> <!-- untuk menampilkan data -->
          <input type="hidden" name="idsupplier" value="<?php echo $data_supplier->IdSupplier ?>">
          <!-- untuk menampilkan data IdSupplier (pk database) -->
        </td>
      </tr>
      <tr>
        <td>Nama Supplier</td>
        <td>:</td>
        <td><input type="text" name="namasupplier" value="<?php echo $data_supplier->NamaSupplier ?>"></td>
      </tr>
      
      <tr>
        <td>NoHp</td>
        <td>:</td>
        <td><input type="text" name="nohp" value="<?php echo $data_supplier->NoHp ?>"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="alamat" value="<?php echo $data_supplier->Alamat ?>"></td>
      </tr>
      <tr>
        <td>Id Pembelian</td>
        <td>:</td>
        <td><input type="text" name="idpembelian" value="<?php echo $data_supplier->IdPembelian ?>"></td>
      </tr>
      <tr>
        <td colspan="3">
          <center><input type="submit" value="SIMPAN"></center>
        </td>
      </tr>
  </table>
</body>

</html>