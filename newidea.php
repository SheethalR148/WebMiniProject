<html>
<head>
    <title>new</title>
</head>
<?php
include "sql.php";
$str = "SELECT * FROM imagelist";
$res = mysqli_query($conn,$str);
$myarr = [];

while ($arr = mysqli_fetch_assoc($res)){
    $myarr [] = $arr;
}
?>
<body>
<?php foreach ($myarr as $ar):?>

<p id="about1">
    <?php echo $ar['name'];?>
    <br/>
    <img src="data:image/jpeg;base64,'.base64_encode($row['image'])?>" width="35%" height="35%">
    <br/>
    <?php echo $ar['desc'];?>
    <br/>

    <button style="width: 100pt;height: 50pt;background-color: yellow;" onclick="window.open('cart.php?id=<?php echo $ar['id'];?>')" type="submit"> Pay <?php echo $ar['amount']?></button>


</p>
<?php endforeach;?>

</body>
</html>

