
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    /* body{
     width: 870px;
     margin: 0 auto;
    } */

    table{
      font-family: arial, sans-serif;
      border-collapse: collaps;
      width: 15%;
      float: right;
      margin-right: 10vh;
    }

    td,
    th{
      border: 1px solid ;
      text-align: left;
      padding: 8px;
    }
</style>
</head>
<body>

<div>
    <h1>Form Belanja</h1>
    <table>
        <tr>
            <th>Daftar Harga</th>
        </tr>
        <tr>
            <td>TV : 4.200.000</td>
        </tr>
        <tr>
            <td>Kulkas : 3.100.000</td>
        </tr>
        <tr>
            <td>Mesin Cuci : 3.800.000</td>
        </tr>
        <tr>
            <td>Harga Dapat Berubah Setiap Saat</td>
        </tr></table>
  <form method="POST" action= "form_belanja.php" class="center">
    <div class="form-group row">
      <label for="customer" class="col-4 col-form-label">Customer</label> 
      <div class="col-8">
        <input id="customer" name="customer" placeholder="Nama Pembeli" type="text" class="form-control">
      </div>
    </div> 
    <div class="form-group row">
      <label class="col-4">Produk</label> 
      <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
          <label for="produk_0" class="custom-control-label">TV</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
          <label for="produk_1" class="custom-control-label">Kulkas</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci"> 
          <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4 col-form-label" for="jumlah">Jumlah</label> 
      <div class="col-8">
        <input id="jumlah" name="jumlah" placeholder="Jumlah Barang" type="text" class="form-control">
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="hitung" type="hitung" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form> 
 
  <?php
    if (isset($_POST['hitung'])) {
      $customer = $_POST['customer'];
      $produk = $_POST['produk'];
      $jumlah = $_POST['jumlah'];

      echo 'Nama Customer : ' . $customer;
      echo '<br/>Produk Pilihan : ' . $produk;
      echo '<br/>Jumlah Beli : ' . $jumlah;

      $kulkas = 3100000 * intval($jumlah);
      $mesincuci = 3800000 * intval($jumlah);
      $TV = 4200000 * intval($jumlah);

      switch ($produk) {
        case 'KULKAS':
          echo "<br>" . "Total Belanja : " . number_format($kulkas, 0, ',', '.');
          break;
        case 'TV':
          echo "<br>" . "Total Belanja : " . number_format($TV, 0, ',', '.');
          break;
        default:
          echo "<br>" . "Total Belanja : " . number_format($mesincuci, 0, ',', '.');
          break;
      }
    }
  ?>
</div>
</body>
</html>
