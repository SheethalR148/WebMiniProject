<?php //include('server.php') ?>
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

<form method="post" action="admininsert.php">
<!--    --><?php //include('errors.php'); ?>
    <div class="input-group">
        <label>Admin Username</label>
        <input type="text" name="username" >
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="login_admin">Login</button>
    </div>
<!--    <p>-->
<!--        Create an account  <a href="register.php">Sign up</a>-->
<!--    </p>-->
</form>
<?php
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'webmini');

if (isset($_POST['login_admin'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
//$_SESSION['username'] = $email;
//$_SESSION['success'] = "You are now logged in";

            header('location: admininsert.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
?>


