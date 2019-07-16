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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script>
        var datako = [];
        var datana = [];
        var datasa = [];
        var dataha = [];
        var dataju = [];
        var datato = [];
        function uang(num) {
            return 'Rp' + num.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
        }
        function openini() {

        }
        function addRecord(i) {
            var a, b, c;
            a = document.getElementById('ko' + i).innerHTML;
            b = document.getElementById('na' + i).innerHTML;
            c = document.getElementById('sa' + i).innerHTML;
            d = document.getElementById('ha' + i).innerHTML;
            //window.alert(datako.length);
            document.getElementById('ko').value = a;
            document.getElementById('na').value = b;
            document.getElementById('sa').value = c;
            document.getElementById('ha').value = d;
        }
        function deleteBarang(x) {
            datako.splice(x, 1);
            datana.splice(x, 1);
            datasa.splice(x, 1);
            dataha.splice(x, 1);
            dataju.splice(x, 1);
            datato.splice(x, 1);

            var x="";
            var i;
            for (i = 0; i < datako.length; i++) {
                x += "<tr><td><button type=\"Button\" class=\"btn btn-danger\" data-dismiss=\"modal\" onclick=\"deleteBarang(" + i + ")\">X</button></td><td>" + datako[i] + "</td><td>" + datana[i] + "</td><td>" + datasa[i] + "</td><td>" + dataha[i] + "</td><td>" + dataju[i] + "</td><td>" + datato[i] + "</td></tr>";
            }

            document.getElementById("isi").innerHTML = "<table class=\"table table-hover\"><thead>" + "<tr><th>Action</th><th>Kode</th><th>Nama</th><th>Satuan</th><th>Jumlah</th><th>Harga Jual</th><th>Total</th></tr>" + "</thead><tbody>" + x + "</tbody></table>";
        }
        function ubahppn() {
            var tot = document.getElementById('total').value;
            var dis = document.getElementById('diskon').value;
            var ppn = document.getElementById('ppn').value;

            if (dis == "") {
                dis = 0;
            }
            var hasil;
            hasil = (Number(tot) * (1 - (Number(dis) / 100))) * (1 + (Number(ppn) / 100));
            document.getElementById('grandtotal').value = Number(hasil);
        }
        function ubahdiskon() {
            var tot = document.getElementById('total').value;
            var dis = document.getElementById('diskon').value;
            var ppn = document.getElementById('ppn').value;
            if (ppn == "") {
                ppn = 0;
            }
            var hasil;
            hasil = (Number(tot) * (1 - (Number(dis) / 100))) * (1 + (Number(ppn) / 100));
            document.getElementById('grandtotal').value = Number(hasil);
        }
        function ubahbayar() {
            var tot = document.getElementById('total').value;
            var dis = document.getElementById('diskon').value;
            var ppn = document.getElementById('ppn').value;
            var bayar = document.getElementById('bayar').value;

            if (dis == "") {
                dis = 0;
            }
            var hasil;
            hasil = (Number(tot) * (1 - (Number(dis) / 100))) * (1 + (Number(ppn) / 100));
            document.getElementById('grandtotal').value = hasil;

            var kembalinya;
            kembalinya = Number(bayar) - hasil;
            document.getElementById('kembalian').value = kembalian;
        }
        function addBarang() {
            var jum = datako.length;
            var ko1 = document.getElementById('ko').value;
            var na1 = document.getElementById('na').value;
            var sa1 = document.getElementById('sa').value;
            var ha1 = document.getElementById('ha').value;
            var ju1 = document.getElementById('ju').value;
            if (ko1 != "" && na1 != "" && sa1 != "" && ha1 != "" && ju1 != "") {
                datako[jum] = document.getElementById('ko').value;
                datana[jum] = document.getElementById('na').value;
                datasa[jum] = document.getElementById('sa').value;
                dataha[jum] = document.getElementById('ha').value;
                dataju[jum] = document.getElementById('ju').value;

                datato[jum] = Number(document.getElementById('ha').value) * Number(document.getElementById('ju').value);

                var x;
                var i;
                var total;
                total = 0;
                for (i = 0; i < datako.length; i++) {
                    x += "<tr><td><button type=\"button\" class=\" btn btn-danger\" data-dismis=\" modal\" onclick=\" deleteBarang(" + i + ")\">X</button></td><td>" + datako[i] + "</td><td>" + datana[i] + "</td><td>" + datasa[i] + "</td><td>" + dataha[i] + "</td><td>" + dataju[i] + "</td><td>" + datato[i] + "</td></tr>";
                    total = total + datato[i];
                }
                document.getElementById("total").value = total;
                if ((document.getElementById('diskon').value == "0") || (document.getElementById('diskon').value == "")) {
                    document.getElementById('diskon').value == "0";
                }
                if ((document.getElementById('ppn').value == "0") || (document.getElementById('ppn').value == "")) {
                    document.getElementById('ppn').value == "0";
                }
                ubahdiskon();
                ubahppn();

                document.getElementById("isi").innerHTML = "<table class=\"table table-hover\"><thead>" + "<tr><th>Action</th><th>Kode</th><th>Nama</th><th>Satuan</th><th>Harga jual</th><th>jumlah</th><th>total</th></tr>" +
                    "</thead></tbody>" + x +
                    "</tbody></table>";
                document.getElementById("ko").value = "";
                document.getElementById("na").value = "";
                document.getElementById("sa").value = "";
                document.getElementById("ha").value = "";
                document.getElementById("ju").value = "";
                window.alert(datako);
                document.getElementById("isitabel1").value = datako;
                document.getElementById("isitabel2").value = datana;
                document.getElementById("isitabel3").value = datasa;
                document.getElementById("isitabel4").value = dataha;
                document.getElementById("isitabel5").value = dataju;
                document.getElementById("isitabel6").value = datato;
            } else {
                window.alert("Ada element yang kosong");
            }
        }
    </script>
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
        <p style="font-size:50px; text-align:center;">Penjualan</p>
        <form action="transaksi1.php" method="post">
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="tanggan">Tanggal: </label>
                        <?php
                            date_default_timezone_set("Asia/Bangkok");
                        ?>
                        <input type="date" class="form-control" id="tanggal" placeholder="Tanggal" name="tanggal"
                            value=<?php echo date('Y-m-d');?> required>
                    </div>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="kode">Nama</label>
                        <input type="text" class="form-control" id="namakonsumen" placeholder="Enter nama" name="nama"
                            require>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="kode">Telp :</label>
                        <input type="text" class="form-control" id="telp" placeholder="Enter Telp" name="telp" required>
                    </div>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="keterangan">Keterangan:</label>
                        <input type="text" class="form-control" id="keterangan" placeholder="Enter Keterangan" name="keterangan" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="kode">Alamat:</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Enter Alamat" name="alamat"
                            required>
                    </div>
                </div>
                <div class="col-sm-9"></div>
                <div class="col-sm-1">
                    <div class="form-group">
                        <button type="button" class="form-control btn btn-primary" data-toggle="modal" data-target="#modalbarang">+</button>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <input type="text" class="form-control" id="ko" placeholder="Kode" name="ko">

                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <input type="text" class="form-control" id="na" placeholder="Nama" name="na">
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <input type="text" class="form-control" id="sa" placeholder="Satuan" name="sa">
                    </div>
                </div>

                <div class="col-sm-1">
                    <div class="form-group">
                        <input type="text" class="form-control" id="ha" placeholder="Harga" name="ha">
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <input type="text" class="form-control" id="ju" placeholder="Jumlah" name="ju">
                    </div>
                </div>

                <div class="col-sm-1">
                    <div class="form-group">
                        <button type="button" class="form-control btn btn-primary" onclick="addBarang()">Add</button>
                    </div>
                </div>
                <div class="col-sm-12" id="isi">

                    <table class="table table-hoover">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Satuan</th>
                                <th>Jumlah</th>
                                <th>Harga Jual</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>...</th>
                                <th>...</th>
                                <th>...</th>
                                <th>...</th>
                                <th>...</th>
                                <th>...</th>
                                <th>...</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-9"></div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="kode">Total:</label>
                        <input type="number" class="form-control" id="total" placeholder="Total" data-a-sign="Rp."
                            data-a-dec="," data-a-sep="." name="total" readonly>
                    </div>
                </div>
                <div class="col-sm-8"></div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="kode">PPN:</label>
                        <input type="number" class="form-control" id="ppn" placeholder="Enter PPN" name="ppn"
                            onchange="ubahppn()" required>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="kode">Diskon:</label>
                        <input type="number" class="form-control" id="diskon" placeholder="Enter Diskon" name="diskon"
                            onchange="ubahdiskon()" required>
                    </div>
                </div>

                <div class="col-sm-6"></div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="kode">Grand Total</label>
                        <input type="number" class="form-control" id="grandtotal" placeholder="Grand Total" name="grandtotal" readonly>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="kode">Bayar</label>
                        <input type="number" class="form-control" id="bayar" placeholder="Enter Bayar" name="bayar"
                            onchange="ubahbayar()" required>
                    </div>
                </div>
                <div class="col-sm-9"></div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="kode">Kembali</label>
                        <input type="number" class="form-control" id="kembalian" placeholder="Kembalian"
                            name="kembalian" readonly>
                    </div>
                </div>

                <div class="col-sm-8"></div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <a href="http://localhost/kasir/welcome/masterpenjualan">
                            <input type="button" class="form-control btn btn-success" id="cancel" name="cancel"
                                value="Cancel">
                        </a>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-primary" id="save" onclick="saveini()"
                            name="save" value="Save">
                    </div>
                </div>
                
                </div>
                <input type="text" class="form-control" id="isitabel1" name="isitabel1" value="123" readonly hidden>
                <input type="text" class="form-control" id="isitabel2" name="isitabel2" value="123" readonly hidden>
                <input type="text" class="form-control" id="isitabel3" name="isitabel3" value="123" readonly hidden>
                <input type="text" class="form-control" id="isitabel4" name="isitabel4" value="123" readonly hidden>
                <input type="text" class="form-control" id="isitabel5" name="isitabel5" value="123" readonly hidden>
                <input type="text" class="form-control" id="isitabel6" name="isitabel6" value="123" readonly hidden>
        </form>

        <!-- MODAL -->
 
        <div class="modal fade" id="modalbarang">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Data Barang</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-hover" id="myTable">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Satuan</th>
                                    <th>Harga Jual</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $serverName = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "tokoku";

                                    //Create connection
                                    $conn = mysqli_connect($serverName, $username, $password, $dbname);
                                    $sql = "select * from tb_barang1";
                                    $result = mysqli_query($conn, $sql);
                                    $rec = 1;
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo "<tr>";
                                        echo "<td id=ko".$rec.">".$row["kode_brg"]."</td>";
                                        echo "<td id=na".$rec.">".$row["nama_brg"]."</td>";
                                        echo "<td id=sa".$rec.">".$row["satuan"]."</td>";
                                        echo "<td id=ha".$rec.">".$row["harga_jual"]."</td>";
                                        echo "<td id=ha".$rec.">".$row["harga_beli"]."</td>";
                                        echo "<td><button type=\"button\" class=\"btn btn-info\" data-dismiss=\"modal\" onclick=\"addRecord($rec)\">Add</button><td>";
                                        $rec++;
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
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