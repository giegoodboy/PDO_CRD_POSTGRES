<?php 

$host       =  "localhost";
$dbuser     =  "postgres";
$dbpass     =  "ramaandika123";
$port       =  "5432";
$dbname     =  "pemweb";

$npm 		 = $_POST['npm'];
$username 	 = $_POST['username'];
$nama 	     = $_POST['nama'];
$email		 = $_POST['email'];
$password 	 = $_POST['password'];

	
$pdo = new PDO("pgsql:host=$host;dbname=$dbname","postgres","ramaandika123");

$opsi = "select * from registrasi where npm='$npm'";
$opsi = $pdo->query($opsi);

// print_r($opsi->rowCount());

if($opsi->rowCount() > 0){
    // Jika false maka akan muncul alert\
    echo "WES ONOK ANJING";
   }
  else{


$sql = "insert into registrasi (npm,username, nama, email,pass) values('$npm','$username','$nama', '$email','$password')"	;
$result = $pdo->query($sql);
	echo '<script language="javascript">alert("Akun Anda Berhasil Dibuat !"); document.location="index.php";</script>';

}

?>