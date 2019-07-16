<?php
session_start();
if($_SESSION['status']!='login'){
  header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Komputerku</title>
    <Link rel="stylesheet" type="text/css" href="barang.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="sidenav">
<p class="text-white" style="font-size:20px; text-color:white;">TOKO KOMPUTERku</p>
<hr style="border-color: white;">
    <div class="btn-group" style="width: 100%; margin-bottom:5px;">
    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
        Master &nbsp
      </button>
      <div class="dropdown-menu">
      <a class="dropdown-item" style="color:black;" href="barang.php">barang</a>
        <a class="dropdown-item" style="color:black;" href="karyawan.php">karyawan</a>
        <a class="dropdown-item" style="color:black;" href="suplier.php">suplier</a>
      </div>  
    </div>

    <div class="btn-group" style="width: 100%; margin-bottom:5px;">
    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
        Transaksi &nbsp
      </button>
      <div class="dropdown-menu">
      <a class="dropdown-item" style="color:black;" href="Penjualan.php">Penjualan</a>
        <a class="dropdown-item" style="color:black;" href="pembelian.php">Pembelian</a>
      </div>  
    </div>

    <div class="btn-group" style="width: 100%; margin-bottom:5px;">
    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
        Laporan &nbsp
      </button>
      <div class="dropdown-menu">
      <a class="dropdown-item" style="color:black;" href="laporanstok.php">Stok</a>
      <a class="dropdown-item" style="color:black;" href="laporanPenjualan.php">Penjualan</a>
      <a class="dropdown-item" style="color:black;" href="laporanpembelian.php">Pembelian</a>
      </div>  
    </div>

    <div>
    <a href="logout.php" style="position: fixed;bottom: 0px; margin-left: 17px;"><button class="btn btn-danger">LOGOUT</button></a>
  </div>
</div>    


<div class="main">

<form>
<p style="font-size:50px; text-align:center;">Pembelian</p>    
    <div class="row" style="background-color: lightgray">

        <div class="col-sm"><br>
                <label>No. Transaksi</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" >
                
                <a style="font-size:25px; margin-bottom: 5px;" >Data Barang</a><hr>
                <div class="form-grup">
                <label>Kode</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" >
                <label>Nama Barang</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" >
                <label>Harga</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" >
        </div><br><br>
        </div>
        <div class="col-sm"><br><br><br><br>
        <a style="font-size:25px; margin-bottom: 5px;" >Data Suplier</a><hr>
                <div class="form-grup">
                <label>Nama Suplier</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" >
                <label>Jumlah Pembelian</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" >
                <br>
                <a  href="#"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1" >Simpan</button></a><br>
        </div>
        <div class="col-sm"></div>
    </div>

    <div class="row" style="background-color: lightgray">
        <div class="col-sm"><br><br><br><br>
        <a style="font-size:25px; margin-bottom: 5px;" >Data Pembelian</a><hr>
                <div class="form-grup">
                <label>Nama Pembeli</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" >
                <label>Jumlah Pembelian</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" >
        </div><br>
        </div>
        
        </div>

    </form>



<div class="col-sm-12" style="background-color: white;">


    <table class="table table-striped table-bordered">
    <thead class="thead-dark">

    <thead class="thead-dark">

    <form><br>
    <a style="font-size:25px; margin-bottom: 5px;" >Data Pembelian Barang</a><hr>

    <tr>
      <th width="30" weight="30">No.</th>
      <th width="30" weight="30">No Transaksi</th>
      <th width="30" weight="30">Kode barang</th>
      <th width="50" weight="70">Pemasok</th>
      <th width="50" weight="50">Nama Barang</th>
      <th width="50" weight="50">Harga Satuan</th>
      <th width="50" weight="50">Jumlah</th>
      <th width="50" weight="50">Total harga</th>
      <th width="50" weight="50">Edit/Hapus</th>
   </tr>
    <thead>
      <tbody>
        <tr>
        <td>1.</td>
        <td>UK555</td>
        <td>K7000</td>
        <td>PT. Logitech Indonesia</td>
        <td>LOGITECH G413</td>
        <td>Rp 1.400.000</td>
        <td>Rp 3</td>
        <td>Rp 4.200.000</td>
        <td><button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal" >HAPUS</button>
        </td>
        </tr>

        <tr>
        <td>2.</td>
        <td>UK555</td>
        <td>K7000</td>
        <td>PT. Logitech Indonesia</td>
        <td>LOGITECH G413</td>
        <td>Rp 1.400.000</td>
        <td>Rp 3</td>
        <td>Rp 4.200.000</td>
        <td><button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal" >HAPUS</button>
            </td>
        </tr>

        <tr>
        <td>3.</td>
        <td>UK555</td>
        <td>K7000</td>
        <td>PT. Logitech Indonesia</td>
        <td>LOGITECH G413</td>
        <td>Rp 1.400.000</td>
        <td>Rp 3</td>
        <td>Rp 4.200.000</td>        
        <td><button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal" >HAPUS</button>
        </td>
        
      </tr>    

      </tbody>
</form>
    </table>
  


<!-- Modal hapus -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Data Telah Dihapus
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal simpan -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Simpan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Data Telah Disimpan
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


  </div>
</div>
</body>
</html>