
<?php
session_start();

include 'connect.php';
 
$Username = $_POST['Username'];
$Password = $_POST['Password'];
 
$data = mysqli_query($connect,"SELECT * FROM signup WHERE Username='$Username' AND Password='$Password'");

$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['Username'] = $Username;
	$_SESSION['status'] = "login";
	
	echo "You just log in";
	header("location:visual2.php");
}else{
	header("location:login.html");
	echo "Failed to update data";
}
?>