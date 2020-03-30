
<?php
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'connect.php';
 
// menangkap data yang dikirim dari form
$Username = $_POST['Username'];
$Password = $_POST['Password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($connect,"SELECT * FROM signup WHERE Username='$Username' AND Password='$Password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:edit.html");
}else{
	header("location:Login.html?pesan=gagal");
}
?>