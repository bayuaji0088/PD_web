<?php
include 'koneksi.php';

$id = $_GET["id"];
$status = $_GET["status"];


if($status == "barang"){
    $sql="DELETE FROM `tb_barang1` WHERE kode_brg = '$id'";
    if(mysqli_query($con,$sql)){
    echo "berhasil diinputkan";
    header('Location: barang.php');
    }else{
    echo "gagal diinputkan".mysqli_error($con);
    }
}elseif($status == "karyawan"){
    $sql="DELETE FROM `tb_karyawan` WHERE NIK = '$id'";
    if(mysqli_query($con,$sql)){
    echo "berhasil diinputkan";
    header('Location: karyawan.php');
    }else{
    echo "gagal diinputkan".mysqli_error($con);
    }
}elseif($status == "suplier"){
    $sql="DELETE FROM `tb_suplier` WHERE  kode_sup= '$id'";
    if(mysqli_query($con,$sql)){
    echo "berhasil diinputkan";
    header('Location: suplier.php');
    }else{
    echo "gagal diinputkan".mysqli_error($con);
    }
}
?>