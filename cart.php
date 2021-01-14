<?php

session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: loginregister.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: loginregister.php");
}
?>
<html>
<head>
    <title>Mini Project</title>
    <style>
        body{
            padding: 0;
            margin: 0;
            background-image: url("background.jpeg");
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

    </style>
</head>
<body>
<nav>
    <ul>
        &nbsp;&nbsp;<li style="font-family: Algerian">Pizza Hot</li>
        <li><a href="cart.php" >My Cart</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="index.php">Home</a></li>
    </ul>
</nav>
<div class="header">
    <h2>Home Page</h2>
</div>
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['email'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>


