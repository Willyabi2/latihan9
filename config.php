<?php
session_start();
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_framework";

$db = mysqli_connect($server,$user,$password,$nama_database);

if (!$db){
    die("Gagal tersambung dengan database:" .mysqli_connect_error());
}

?>