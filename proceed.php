<html>
<head>
    <title>Pizza Hot</title>
    <style>
        body{
            padding: 0;
            margin: 0;
            background-image: url("loginimage.jpeg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
    </style>
</head>
<body>
<?php
$name=$_GET['id'];

//echo "<h1>$name</h1>";
include "sql.php";
$host = 'localhost';
$username = 'root';
$password = '';
$dbase = 'webmini';

$conn = mysqli_connect($host, $username, $password, $dbase);
//$did=$_GET['id'];
$str="delete from cart where 1";
mysqli_query($conn,$str);
?>
<br/>
<br/>
<br/>
<br/><br/><br/>
<div style="padding: 120px;background-color: rgba(256,256,256,0.6)">
<h1 align="center" >Thank You for Ordering!!!</h1>
<h2 align="center">Your Order Will Be Delivered Soon...</h2>
<h2 align="center">Currently we are offering only Cash On Delivery</h2>
    <h2 align="center">Kindly co-operate with us by making use of card or cash</h2>

<!--    <a href="" onclick="setTimeout(function() { var ww=window.open(window.location,'_self');ww.close();-->
<!--    },1000);">CLOSE</a>-->
</div>
<!--<button style=" background-color: crimson;" onclick="close()">EXIT</button>-->

</body>
</html>