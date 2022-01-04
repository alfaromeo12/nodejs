<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = getenv("MYSQL_HOST");
$databaseName = getenv("MYSQL_DATABASE");
$databaseUsername = getenv("MYSQL_USER");
$databasePassword = getenv("MYSQL_PASSWORD");
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>

