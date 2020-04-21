<?php

include './connect.php';
$NIK = @$_GET['NIK'];
$query = "DELETE FROM signup WHERE NIK = '$NIK'";
$result = $connect->query($query);
$num = mysqli_affected_rows($connect);


if ($num > 0){
    echo "Berhasil Hapus Data <br>";
	header("location:visual2.php");
} else {
    echo "Gagal Hapus Data <br>";
}
echo "<a href='visual.php'>Lihat Data</a>";
?>