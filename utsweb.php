<?php
session_start();
if($_SESSION['status']!='login'){
  header('location:login.php');
}

include 'koneksi.php';
$a = $_SESSION['username'];
$query = mysqli_query($con,"SELECT * FROM `tb_karyawan` WHERE username = '$a'");
$row = mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Komputerku</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <Link rel="stylesheet" type="text/css" href="barang.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
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
        <?php
        if($row['m1']==1){
          echo "<a class='dropdown-item' style='color:black;' href='barang.php'>barang</a>";
        }else{
          echo "<a class='dropdown-item' style='color:black;' href='#'>barang</a>";
        }
        if($row['m2']==1){
          echo "<a class='dropdown-item' style='color:black;' href='karyawan.php'>karyawan</a>";
        }else{
          echo "<a class='dropdown-item' style='color:black;' href='#'>karyawan</a>";
        }
        if($row['m3']==1){
          echo "<a class='dropdown-item' style='color:black;' href='suplier.php'>suplier</a>";
        }else{
          echo "<a class='dropdown-item' style='color:black;' href='#'>suplier</a>";
        }
        ?>
      
      </div>  
    </div>

    <div class="btn-group" style="width: 100%; margin-bottom:5px;">
    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
        Transaksi &nbsp
      </button>
      <div class="dropdown-menu">
      <?php
        if($row['t1']==1){
          echo "<a class='dropdown-item' style='color:black;' href='penjualan.php'>penjualan</a>";
        }else{
          echo "<a class='dropdown-item' style='color:black;' href='#'>penjualan</a>";
        }
        if($row['t2']==1){
          echo "<a class='dropdown-item' style='color:black;' href='pembelian.php'>pembelian</a>";
        }else{
          echo "<a class='dropdown-item' style='color:black;' href='#'>pembelian</a>";
        }
      
        ?>
     
      </div>  
    </div>

    <div class="btn-group" style="width: 100%; margin-bottom:5px;">
    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
        Laporan &nbsp
      </button>
      <div class="dropdown-menu">
      <?php
        if($row['l1']==1){
          echo "<a class='dropdown-item' style='color:black;' href='laporanstok.php'>stok</a>";
        }else{
          echo "<a class='dropdown-item' style='color:black;' href='#'>stok</a>";
        }
        if($row['l2']==1){
          echo "<a class='dropdown-item' style='color:black;' href='laporanPenjualan.php'>Penjualan</a>";
        }else{
          echo "<a class='dropdown-item' style='color:black;' href='#'>penjualan</a>";
        }
        if($row['l3']==1){
          echo "<a class='dropdown-item' style='color:black;' href='laporanpembelian.php'>pembelian</a>";
        }else{
          echo "<a class='dropdown-item' style='color:black;' href='#'>pembelian</a>";
        }
        ?>
     
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

   <thead>
   
      <thead>

      <tbody><br><br>
      <p style="text-align:center; font-size:40px; font-family: Georgia, 'Times New Roman', Times, serif ">TOKO KOMPUTERku</p><hr>

      
      <marquee width="1000" height="40" style="font-size:30px; color:red;">=====Selamat Datang Di Website kami,Toko Komputerku=====</marquee>
      

    </tbody>
    </table>
</div>
</div>
</body>
</html>