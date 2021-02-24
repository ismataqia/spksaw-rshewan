<?php
session_start();
include"koneksi.php";
if(!empty($_SESSION['username']) AND !empty($_SESSION['password'])){
echo"<script>window.location.href='./media.php'</script>";
}
?>
<html>
<head>
<title>Sistem SPK RSH</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div id="main">
<div id="logo"><img src='images/sumsel.png' width="200px"></div>
<div id="menu">
		<ul>
		   <li><a href="./">Home</a></li>
		   	  
				   
				
		   <li><a href="./index.php?page=profil">Profil RS Hewan</a>
				
		   </li>
		    <li><a href="./admin">Login</a></li>
		</ul>
</div>



  
	
	
	<?php
$page = isset($_GET['page']) ? $_GET['page'] :'';


if($page=="profil"){ include"profil.php"; }
else {
include"home.php"; }





?>
	

  
 
  
  
  
</div>

<div class="footer">©2020 by Politeknik Negeri Sriwijaya - Manajemen Informatika</div>
</div>

</body>
</html>

<?php
// 1. set variabel yang dibutuhkan
$username = isset($_POST['username']) ? $_POST['username'] :'';
$password = isset($_POST['password']) ? $_POST['password'] :'';
$level    = isset($_POST['level']) ? $_POST['level'] :'';
// 2. Cek apakah tombol login diklik untuk login
if(isset($_POST['login'])){
// 3. Buat query untuk mencari data ke tabel
	   // cek level apa user yang login
	   if($level=="Pimpinan"){$tabel="admin";}else{$tabel="admin";}
$sql = mysqli_query($konek,"SELECT * FROM $tabel 
					WHERE username='".$username."' AND 
					password='".$password."' AND level='$level'");
$jml = mysqli_num_rows($sql); // Hitung jmlah record	
$row = mysqli_fetch_array($sql);	// tampung record ke data array	
// 4. cek berapa jml data yg ditemukan
	if($jml > 0){
	// Mulai Session Baru 
	session_start();
	$_SESSION['username'] = $row['username'];
	$_SESSION['password'] = $row['password'];
	$_SESSION['level'] 	  = $level;
	$_SESSION['id']=$row['kd_admin'];
	$_SESSION['nm']=$row['nm_lengkap'];
	echo"<script>window.location.href='./media.php'</script>";
	}else{
	echo"<script>window.location.href='./?page=anda-gagal-login'</script>";	
	}
}
?>