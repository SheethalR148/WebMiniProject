<html>
<head>
    <title>Mini Project</title>
    <style>
        body{
            padding: 0;
            margin: 0;
            background-image: url("loginimage.jpeg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        nav{
            color: white;
            background-color: black;
            height: 9%;
            width: 100%;
            text-align: left;
            font-family: Cambria;
            font-size: 40px;
            position: fixed;
        }
        ul{
            list-style-type: none;
            margin: 0;
            padding: 0;

        }
        li{
            display: inline;

        }
        li a{
            text-decoration: none;
            float: right;
            padding: 5px 15px;
            font-size: 30px;
            color: red;
        }
        div{
            padding-top: 100px;
            padding-left: 55px;
        }
        img{
            height: 300px;
            width: 300px;

        }

    </style>
</head>
<body>
<nav>
    <ul>
        &nbsp;&nbsp;<li style="font-family: Algerian">Pizza Hot</li>
        <li><a href="loginregister.php" >My Cart</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="index.php">Home</a></li>
    </ul>
</nav>
<br/><br/><br/>
<table border="0" align="center">
<?php
require_once 'sql.php';
$result=mysqli_query($conn,"select * from imagelist");
?>
<tr>
    <?php
    $count=0;
while($row=mysqli_fetch_array($result))
{
    $count++;

    ?><td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" value='.$row['name'].'name='.$row['id'].';/>';
        ?><button style="margin: auto;display: block;color: #dff0d8;background-color: black" type="submit" name="item" id="<?php $row['name']?>" onclick="window.open('order.php?id=<?php echo $row['name'];?>&cost=<?php echo $row['cost']?>')">
             + Add to Cart  </button></td>
<!--    <td>--><?php //echo $row['cost']?><!--</td>-->
<?php
    if($count==4){
        $count=0;
?> </tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<tr>
        <?php
    }
}
?></tr>
</table>
<!--<div>-->
<!--    <img src="images/image1.jpg" alt="first image">-->
<!--    &nbsp;&nbsp&nbsp;<img src="images/image2.jpg" alt="first image">-->
<!--    &nbsp;&nbsp&nbsp;<img src="images/image3.jpg" alt="first image">-->
<!--    &nbsp;&nbsp&nbsp;<img src="images/image4.jpg" alt="first image"><br/><br/><br/>-->
<!--    <img src="images/image5.jpg" alt="first image">-->
<!--    &nbsp;&nbsp&nbsp;<img src="images/image6.jpg" alt="first image">-->
<!--    &nbsp;&nbsp&nbsp;<img src="images/image7.jpg" alt="first image">-->
<!--    &nbsp;&nbsp&nbsp;<img src="images/image8.jpg" alt="first image"><br/><br/><br/>-->
<!--    <img src="images/image9.jpg" alt="first image">-->
<!--    &nbsp;&nbsp&nbsp;<img src="images/image10.jpg" alt="first image">-->
<!--    &nbsp;&nbsp&nbsp;<img src="images/image11.jpg" alt="first image">-->
<!--    &nbsp;&nbsp&nbsp;<img src="images/image12.jpg" alt="first image"><br/><br/><br/>-->
<!--    <img src="images/image13.jpg" alt="first image">-->
<!--    &nbsp;&nbsp&nbsp;<img src="images/image14.jpg" alt="first image">-->
<!--    &nbsp;&nbsp&nbsp;<img src="images/image15.jpg" alt="first image">-->
<!--    &nbsp;&nbsp&nbsp;<img src="images/image16.jpg" alt="first image"><br/><br/><br/>-->
<!--    <img src="images/image17.jpg" alt="first image">-->
<!--    &nbsp;&nbsp&nbsp;<img src="images/image18.jpg" alt="first image">-->
<!--    &nbsp;&nbsp&nbsp;<img src="images/image19.jpg" alt="first image">-->
<!--    &nbsp;&nbsp&nbsp;<img src="images/image20.jpg" alt="first image"><br/><br/><br/>-->
<!--    <img src="images/image21.jpg" alt="first image">-->
<!--    &nbsp;&nbsp&nbsp;<img src="images/image22.jpg" alt="first image">-->
<!--    &nbsp;&nbsp&nbsp;<img src="images/image23.jpg" alt="first image">-->
<!--    &nbsp;&nbsp&nbsp;<img src="images/image24.jpg" alt="first image"><br/><br/><br/>-->
<!--</div>-->
</body>
</html>