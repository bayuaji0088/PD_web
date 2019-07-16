<?php
include 'koneksi.php';
$id = $_GET["id"];
$query="select * from tb_karyawan where NIK= '$id'";

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
    <p style="font-size:50px; text-align:center;">Edit Karyawan</p>
    <tr>
      
   </tr>
    <form method="post">
    <div class="form-grup">
    <label>NIK</label>
    <input type="text" name="NIK" value="<?php echo $row["NIK"]?>" class="form-control" id="exampleFormControlInput1" value="Paijo">
    <label>Nama Karyawan</label>
    <input type="text" name="nama_kar" value="<?php echo $row["nama_kar"]?>" class="form-control" id="exampleFormControlInput1" value="Paijo">
    <label>Jabatan</label>
    <input type="text" name="jabatan" value="<?php echo $row["jabatan"]?>" class="form-control" id="exampleFormControlInput1" value="Manager">
    <label>Alamat</label>
    <input type="text" name="alamat" value="<?php echo $row["alamat"]?>" class="form-control" id="exampleFormControlInput1" value="jl. Bratang">
    <label>No Telp</label>
    <input type="text" name="telp" value="<?php echo $row["no_telp"]?>" class="form-control" id="exampleFormControlInput1" value="081818181">
    <label>jenis kelamin</label>
    <input type="text" name="jeniskel" value="<?php echo $row["jenis_kel"]?>" class="form-control" id="exampleFormControlInput1" value="081818181">
    <label>tgl lahir</label>
    <input type="date" name="tgl_lahir" value="<?php echo $row["tgl_lahir"]?>" class="form-control" id="exampleFormControlInput1" value="081818181">
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

    $NIK=$_POST["NIK"];
    $nama_kar=$_POST["nama_kar"];
    $jabatan=$_POST["jabatan"];
    $alamat=$_POST["alamat"];
    $no_telp=$_POST["telp"];
    $jenis_kel=$_POST["jeniskel"];
    $tgl_lahir=$_POST["tgl_lahir"];
    
    $sql="UPDATE tb_karyawan set nama_kar='$nama_kar',jabatan='$jabatan',alamat='$alamat',no_telp='$no_telp',jenis_kel='$jenis_kel',tgl_lahir='$tgl_lahir' where NIK= '$NIK'";
    if(mysqli_query($con,$sql)){
      echo "berhasil diinputkan";
      header('Location: karyawan.php');
    }else{
      echo "gagal diinputkan".mysqli_error($con);
    }
    
    
    }
  ?>