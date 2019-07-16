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
    <p style="font-size:50px; text-align:center;">Tambah Karyawan</p>
    <tr>
      
   </tr>
   <form method="post">
    <div class="form-grup">
    <label>NIK</label>
    <input type="text" name="NIK" class="form-control" id="exampleFormControlInput1" >
    <label>Nama karyawan</label>
    <input type="text" name="nama_kar" class="form-control" id="exampleFormControlInput1" >
    <label>jabatan</label>
    <input type="text" name="jabat" class="form-control" id="exampleFormControlInput1" >
    <label>alamat</label>
    <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" >
    <label>no telp</label>
    <input type="text" name="telp" class="form-control" id="exampleFormControlInput1" >
    <label>jenis kelamin</label>
    <input type="text" name="jeniskel" class="form-control" id="exampleFormControlInput1" >
    <label>tgl lahir</label>
    <input type="date" name="tgl_lahir" class="form-control" id="exampleFormControlInput1" >
    <label>username</label>
    <input type="text" name="username" class="form-control"  >
    <label>password</label>
    <input type="password" name="password" class="form-control">
    <label>Hak Akses</label>
    <div class="form-check">
      <input class="form-check-input" name="Chekbox[]" type="checkbox" value="barang" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
        Barang
    </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" name="Chekbox[]" type="checkbox" value="karyawan" id="defaultCheck2">
      <label class="form-check-label" for="defaultCheck2">
        Karyawan
    </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" name="Chekbox[]" type="checkbox" value="suplier" id="defaultCheck2">
      <label class="form-check-label" for="defaultCheck2">
        suplier
    </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" name="Chekbox[]" type="checkbox" value="penjualan" id="defaultCheck3">
      <label class="form-check-label" for="defaultCheck3">
        penjualan
    </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" name="Chekbox[]" type="checkbox" value="pembelian" id="defaultCheck4">
      <label class="form-check-label" for="defaultCheck4">
        pembelian
    </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" name="Chekbox[]" type="checkbox" value="stok" id="defaultCheck5">
      <label class="form-check-label" for="defaultCheck5">
        stok
    </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" name="Chekbox[]" type="checkbox" value="lpenjualan" id="defaultCheck5">
      <label class="form-check-label" for="defaultCheck5">
        laporan Penjualan
    </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" name="Chekbox[]" type="checkbox" value="lpembelian" id="defaultCheck5">
      <label class="form-check-label" for="defaultCheck5">
        laporan pembelian
    </label>
    </div>
    <br>
    <button type="submit" name="kirim" class="btn btn-danger">Simpan</button>
  </div>
    </form>
</div>
</div>
</body>
</html>

<?php
include 'koneksi.php';
if(isset($_POST["kirim"])){


$NIK=$_POST["NIK"];
$nama_kar=$_POST["nama_kar"];
$jabatan=$_POST["jabat"];
$alamat=$_POST["alamat"];
$no_telp=$_POST["telp"];
$jenis_kel=$_POST["jeniskel"];
$tgl_lahir=$_POST["tgl_lahir"];
$user=$_POST["username"];
$password=$_POST["password"];

$m1 =0;
$m2 =0;
$m3 =0;
$t1 =0;
$t2 =0;
$l1 =0;
$l2 =0;
$l3 =0;

foreach($_POST['Chekbox'] as $a){
  if($a == 'barang'){
      $m1 =1;
  }
  if($a == 'karyawan'){
    $m2 =1;
  }
  if($a == 'suplier'){
    $m3 =1;
  }
  if($a == 'penjualan'){
    $t1 =1;
  }
  if($a == 'pembelian'){
    $t2 =1;
  }
  if($a == 'stok'){
    $l1 =1;
  }
  if($a == 'lpenjualan'){
    $l2 =1;
  }
  if($a == 'lpembelian'){
    $l3 =1;
  }
}

$sql="INSERT INTO tb_karyawan (`NIK`, `nama_kar`, `jabatan`, `alamat`, `no_telp`, `jenis_kel`, `tgl_lahir`, `username`, `password`, `m1`, `m2`, `m3`, `t1`, `t2`, `l1`, `l2`, `l3`)
VALUES ('$NIK','$nama_kar','$jabatan','$alamat','$no_telp','$jenis_kel','$tgl_lahir','$user','$password','$m1','$m2','$m3','$t1','$t2','$l1','$l2','$l3')";
if(mysqli_query($con,$sql)){
  echo "berhasil diinputkan";
  echo '<script>window.location.replace("karyawan.php");</script>';
}else{
  echo "gagal diinputkan".mysqli_error($con);
}


}
?>