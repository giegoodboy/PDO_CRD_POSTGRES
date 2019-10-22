<?php
 
// konfigurasi koneksi
$host       =  "localhost";
$dbuser     =  "postgres";
$dbpass     =  "ramaandika123";
$port       =  "5432";
$dbname     =  "pemweb";
 
// script koneksi php postgree
$link = new PDO("pgsql:host=$host;dbname=$dbname","postgres","ramaandika123"); 
 
// if($link)
// {
//     echo "Koneksi Berhasil";
// }else
// {
//     echo "Gagal melakukan Koneksi";
// }
?>