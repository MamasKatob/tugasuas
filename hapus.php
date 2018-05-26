<?php
include_once("koneksi.php");
 
$nim = $_GET['nim'];
 
$result = mysqli_query($mysqli, "DELETE FROM users WHERE nim=$nim");
 
header("Location:index.php");
?>