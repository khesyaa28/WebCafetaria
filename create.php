<?php
include "connect.php";

$NIK=$_POST['NIK'];
$Name=$_POST['Name'];
$Username=$_POST['Username'];
$City=$_POST['City'];
$Password=$_POST['Password'];
$query = "INSERT INTO signup (NIK,Name,Username,City,Password)
          VALUES ('$NIK','$Name','$Username', '$City', '$Password')";

$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if($num > 0){
	echo "Berhasil tambah Data";
	header("location:Login.html");
}else{
	header("location:visual.html?pesan=gagal");
}
?>
