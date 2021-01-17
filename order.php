<html>
<head>
    <title>orders</title>
</head>
<body>
<?php
//require_once 'server.php';
$host = 'localhost';
$username = 'root';
$password = '';
$dbase = 'webmini';

$conn = mysqli_connect($host, $username, $password, $dbase);
//require "sql.php";
$id = $_GET['id'];
$cost=$_GET['cost'];
//$str = "SELECT * FROM imagelist WHERE name=$id";
//$res = mysqli_query($conn,$str);
//$myarr = mysqli_fetch_array($res);
//$item=$myarr['name'];
//$cost=$myarr['cost'];
//$name = $_SESSION['name'];
//$user_id = $_SESSION['id'];
//session_start();
$q = "INSERT into cart (itemname,cost,qty) VALUES('$id','$cost',1)";
mysqli_query($conn,$q);
?>
<script>window.close()</script>
</body>
</html>

