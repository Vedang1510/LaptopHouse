<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
 $db=mysqli_connect("localhost","root","");
 mysqli_select_db($db,"laptophouse");
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$processor=$_REQUEST['processor'];
$memory=$_REQUEST['memory'];
$harddrive=$_REQUEST['harddrive'];
$display=$_REQUEST['display'];
$gc=$_REQUEST['gc'];
$os=$_REQUEST['os'];
$sound=$_REQUEST['sound'];
$weight=$_REQUEST['weight'];
$adapter=$_REQUEST['adapter'];
$sql="UPDATE laptop SET name='$name',processor='$processor',memory='$memory',harddrive='$harddrive',display='$display',gc='$gc',os='$os',weight='$weight',adapter='$adapter' where id='$id' ";
$result=mysqli_query($db,$sql);

if($sql)
{
	
header("location:main.php");

}

else
{
	echo ERROR;
}




 ?>
 
</body>
</html>