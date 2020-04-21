<?php

include 'connect.php';

$NIK=$_POST['NIK'];
$Name=$_POST['Name'];
$Username=$_POST['Username'];
$City=$_POST['City'];
$Password=$_POST['Password'];

$query = "UPDATE signup SET Name = '$Name', City = '$City', Password='$Password' WHERE NIK = '$NIK' ";
$result = $connect->query($query);
$num = mysqli_affected_rows($connect);

if ($num > 0){
    echo "Berhasil Update Data <br>";
} else {
    echo "Gagal Update Data <br>";
}
echo "<a href='visual.php'>Lihat Data</a>";
?>