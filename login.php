<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body{
            padding: 0;
            margin: 0;
            background-image: url("loginimage.jpeg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

    </style>
</head>
<body class="container">
<div class="header">
    <h2>Login</h2>
</div>

<form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Email</label>
        <input type="text" name="email" >
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
        Create an account  <a href="register.php">Sign up</a>
    </p>
</form>
</body>
</html>

