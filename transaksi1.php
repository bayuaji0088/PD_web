<?php
include 'koneksi.php';
    date_default_timezone_set("Asia/Bangkok");
    $kodetr=date("Ymd.His");
    echo $kodetr;
    echo "</br>";

    $tanggal=$_POST['tanggal'];
    echo $tanggal;
    echo"</br>";

    $nama=$_POST['nama'];
    echo $nama;
    echo "</br>";
    
    $alamat=$_POST['alamat'];
    echo $alamat;
    echo"</br>";
    
    $telp=$_POST['telp'];
    echo $telp;
    echo"</br>";

    $keterangan=$_POST['keterangan'];
    echo $keterangan;
    echo"</br>";

    $total=$_POST['total'];
    echo $total;
    echo"</br>";

    $diskon=$_POST['diskon'];
    echo $diskon;
    echo"</br>";

    $ppn=$_POST['ppn'];
    echo $ppn;
    echo"</br>";

    $grandtotal=$_POST['grandtotal'];
    echo $grandtotal;
    echo"</br>";

    $bayar=$_POST['bayar'];
    echo $bayar;
    echo"</br>";

    $kembalian=$_POST['kembalian'];
    echo $kembalian;
    echo"</br>";

    $array1 = explode(",",$_POST['isitabel1']);
    print_r($array1);
    echo "<br>";

    $array2 = explode(",",$_POST['isitabel2']);
    print_r($array2);
    echo "<br>";

    $array3 = explode(",",$_POST['isitabel3']);
    print_r($array3);
    echo "<br>";

    $array4 = explode(",",$_POST['isitabel4']);
    print_r($array4);
    echo "<br>";

    $array5 = explode(",",$_POST['isitabel5']);
    print_r($array5);
    echo "<br>";

    $array6 = explode(",",$_POST['isitabel6']);
    print_r($array6);
    echo "<br>";

    $i = 0;
    // looping untuk detil penjualan
    foreach ($array1 as $key) {
        $query = "INSERT INTO tb_detail_penjualan VALUES(
            NULL,
            '$kodetr',
            '$array1[$i]',
            '$array2[$i]',
            '$array3[$i]',
            '$array5[$i]',
            '$array4[$i]',
            '$array6[$i]')";

        $insert_detil = mysqli_query($con, $query);
        $i++;
    }
    //insert ke tb_penjualan
    $query2 = "INSERT INTO tb_penjualan VALUES('$kodetr','$nama','$alamat','$telp','$keterangan','$total','$ppn','$diskon','$grandtotal')";
    $insert_penjualan = mysqli_query($con, $query2);

    if ($insert_detil && $insert_penjualan) {
        header("location:../transaksi/penjualan-tabel.php");
    }else{
        echo mysqli_error($con);
    }


?>