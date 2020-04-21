<?php 
session_start();
if($_SESSION['status'] == ""){
    header("location:visual.php");
}?>