<?php
include "dbconnect.php";

$data = $_POST['fungsi'];
$tes = $data;
$sql = "DELETE FROM registrasi WHERE npm = '$tes'";
$conn = $link->query($sql);
header('location: viewdelete.php');
?>