<?php
include 'koneksi.php';
$id = $_GET["id"];
$query="select * from tb_barang1 where kode_brg= '$id'";

if(mysqli_query($con,$query)){
  $result=mysqli_query($con,$query);
}else die("error".mysqli_error());

  while($row=mysqli_fetch_assoc($result)){

?>

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
    <p style="font-size:50px; text-align:center;">Edit Barang</p>

   <form method="post">
    <div class="form-grup">
    <label>Kode barang</label>
    <input type="text" name="kodebar" value="<?php echo $row["kode_brg"]?>" class="form-control" id="exampleFormControlInput1" >
    <label>Nama Barang</label>
    <input type="text" name="nabar" value="<?php echo $row["nama_brg"]?>" class="form-control" id="exampleFormControlInput1" >
    <label>satuan</label>
    <input type="text" name="satuan" value="<?php echo $row["satuan"]?>" class="form-control" id="exampleFormControlInput1" >
    <label>Harga jual</label>
    <input type="number" name="harjul" value="<?php echo $row["harga_jual"]?>" class="form-control" id="exampleFormControlInput1" >
    <label>Harga beli</label>
    <input type="number" name="harbel" value="<?php echo $row["harga_beli"]?>" class="form-control" id="exampleFormControlInput1" >
    <br>
    <button type="submit" name="kirim" value="" class="btn btn-danger">Simpan</button>
  </div>
    </form>
</div>
</div>
</body>
</html>

<?php
    
  }
 
  if(isset($_POST["kirim"])){

    $kode_barang=$_POST["kodebar"];
    $nama_barang=$_POST["nabar"];
    $satuan=$_POST["satuan"];
    $harga_beli=$_POST["harbel"];
    $harga_jual=$_POST["harjul"];
    
    $sql="UPDATE tb_barang1 set nama_brg='$nama_barang',satuan='$satuan',harga_jual='$harga_jual',harga_beli='$harga_beli' where kode_brg= '$kode_barang'";
    if(mysqli_query($con,$sql)){
      echo "berhasil diinputkan";
      header('Location: barang.php');
    }else{
      echo "gagal diinputkan".mysqli_error($con);
    }
    
    
    }
  ?>