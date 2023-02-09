<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input data</title>
</head>

<body>
  <h3>Form Input Data Supplier</h3>

  <table>
    <form action="<?php echo base_url('Supplier/AksiInsert')?>" method="post">
      <tr>
        <td>ID Supplier</td>
        <td>:</td>
        <td>
        <input type="text" name="idsupplier" value="<?php echo $data_supplier->IdSupplier + 1 ?>" disabled> <!-- untuk menampilkan data -->
        <input type="hidden" name="idsupplier" value="<?php echo $data_supplier->IdSupplier + 1 ?>">
        </td>
      </tr>
      <tr>
        <td>Nama Supplier</td>
        <td>:</td>
        <td><input type="text" name="namasupplier" required></td>
      </tr>
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
        <td>Id Pembelian</td>
        <td>:</td>
        <td><input type="text" name="idpembelian" required></td>
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