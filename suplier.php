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
    <div class="col-sm-12">
    <table class="table table-striped table-bordered">
    <thead class="thead-dark">

    <thead class="thead-dark">
    <p style="font-size:50px; text-align:center;">Suplier</p><hr>

    <div class="row">
      <p class="left"></p>
    <a style="margin-right: 120px;" href="tambahsuplier.php"><button type="button" class="btn btn-danger" >Tambah data Suplier</button></a>
    <br><br>
  </div>

    <tr> 
      <th width="50" weight="50">kode suplier</th>
      <th width="50" weight="50">Nama suplier</th>
      <th width="50" weight="50">No. Telp</th>
      <th width="50" weight="50">kota</th>
      <th width="50" weight="50">Nama Perushaan</th>
      <th width="50" weight="50">keterangan</th>
      <th width="50" weight="50">Edit/Hapus</th>
   </tr>
    <thead>
      <tbody>

      <?php
  include 'koneksi.php';

  $query="select * from tb_suplier";

  if(mysqli_query($con,$query)){
    $result=mysqli_query($con,$query);
  }else die("error".mysqli_error());

  
    while($row=mysqli_fetch_assoc($result)){
      ?>

        <tr>
        <td><?php echo $row["kode_sup"]?></td>
        <td><?php echo $row["nama_sup"]?></td>
        <td><?php echo $row["no_telp"]?></td>
        <td><?php echo $row["kota"]?></td>
        <td><?php echo $row["nama_per"]?></td>
        <td><?php echo $row["ket"]?></td>
        <td><a  href="editsuplier.php?id=<?php echo $row["kode_sup"]?>"><button type="button" class="btn btn-outline-primary" >EDIT</button></a>
        <a href="hapus.php?id=<?php echo $row["kode_sup"]?>&status=suplier"><button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal" >HAPUS</button></a>
        </td>
    
        <?php
  }
 
  ?>

        </tr>

        
      </tbody>
    </table>

    <div>
  <a class="mr-auto" style="margin-right:200px;">
  <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
  </a>
</nav>
  </div> 

<!-- Modal -->
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
        Data Suplier Telah Dihapus
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