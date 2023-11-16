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
$sql="DELETE  FROM laptop WHERE id='$id'";
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
 </center>
</body>
</html>