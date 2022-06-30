<?php
$host="localhost";
$user="adminklinik";
$password="312010069";
$db="klinik_312010069";

$con = mysqli_connect($host,$user,$password,$db);
if (!$con){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>