<?php
$host = 'sql200.byethost14.com';
$username = 'b14_35860193';
$password = 'Renata!23';
$database = 'b14_35860193_renata';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}
?>