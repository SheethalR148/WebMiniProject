<?php
//$email    = "";
//$errors = array();
//
//// connect to the database
//$db = mysqli_connect('localhost', 'root', '', 'webmini');
//
//if (isset($_POST['login_admin'])) {
//$username = mysqli_real_escape_string($db, $_POST['username']);
//$password = mysqli_real_escape_string($db, $_POST['password']);
//
//if (empty($username)) {
//array_push($errors, "Username is required");
//}
//if (empty($password)) {
//array_push($errors, "Password is required");
//}
//
//if (count($errors) == 0) {
//$password = md5($password);
//$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
//$results = mysqli_query($db, $query);
//if (mysqli_num_rows($results) == 1) {
////$_SESSION['username'] = $email;
////$_SESSION['success'] = "You are now logged in";
//header('location: admininsert.php');
//}else {
//array_push($errors, "Wrong username/password combination");
//}
//}
//}
//?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert Image in MySql using PHP</title>
</head>
<body>
<?php
$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
//    $pname=$_POST('name');
//    $pcost=$_POST('cost');
    $con = mysqli_connect('localhost','root','','webmini') or die('Unable To connect');
    $sql = "INSERT INTO `imagelist`(image) VALUES (?)";
    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        $msg = 'Image Successfully Uploaded';
    }else{
        $msg = 'Error uploading image';
    }
    mysqli_close($con);
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="text" name="name" />
    <input type="text" name="cost" />
    <button>Upload</button>
</form>
<?php
echo $msg;
?>
</body>
</html>
