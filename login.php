

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title>LOGIN</title>
</head>
<body>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['message'])){
		if($_GET['message'] == "gagal"){
			echo "Login gagal! username atau password salah!";
		}else if($_GET['message'] == "logout"){
			echo "logout berhasil";
		}else if($_GET['message'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
	<center>

    <!--Form login-->
    <div class="kotak_login">
	<form method="post" action="ceklogin.php">
		<table>
        <H2>LOGIN</H2>
                <tr>
                <td>Username: <input type="text" name="username" class="form_login" placeholder="username"></td>
                </tr>   
                <br>
                
                <tr>
				<td>Password: <input type="password" class="form_login" name="password" placeholder="password"></td>
                </tr>
            
                <tr>
				<td></td>
				<td></td>
				<center><td><input type="submit"  class="tombol_login" value="LOGIN"></td></center>
			</tr>
		</table>			
    </form>
    </div>
    </center>

</body>
</html>