<?php
include "sql.php";
$host = 'localhost';
$username = 'root';
$password = '';
$dbase = 'webmini';

$conn = mysqli_connect($host, $username, $password, $dbase);
$did=$_GET['id'];
$str="delete from cart where itemname='$did'";
mysqli_query($conn,$str);
header("location:cart.php");
?>
<!--<script>window.close()</script>-->

