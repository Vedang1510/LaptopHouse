<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="from.css"> -->
</head>	
<style type="text/css">
	textarea{
		resize: none;
	}

	
</style>
<body>
	
	<center>
		<div class="box">
<form style=" margin-top: 20px; "  method="post" action="form.php" enctype="multipart/form-data">
	
	<table style=" width: 40%; " class="table table-dark table-striped">
		<tr>
		<td colspan="2"><center><h1>Add Product</h1></center></td>
	
</tr>
   <tr>
	<th>Main Image</th>
	<td><input type="file" name="image1" ></td>
	<tr>
	<th>1 Image</th> 
	<td><input type="file" name="image2" ></td>
	<tr>
   <th>2 Image</th>
	<td><input type="file" name="image3" ></td>
	<tr>
   <th>3 Image</th>
	<td><input type="file" name="image4" ></td>
<tr>
	<td>Company</td>
	<td>
	<select  name="company">
		<option>Dell</option>
		<option>Hp</option>
		<option>Apple</option>
		<option>Lenovo</option>
	</select>
</td>
</tr>

	<tr>
	<th>Name</th>
	<td><textarea cols="50" rows="2" name="name"></textarea></td>
	<tr>
	
	<tr>
	<th>Processor</th>
	<td><textarea cols="50" rows="2" name="processor"></textarea></td>
	<tr>

	<tr>
	<th>Memory</th>
	<td><textarea cols="50" rows="2" name="memory"></textarea></td>
	<tr>

	<tr>
	<th>Hard Drive</th>
	<td><textarea cols="50" rows="2" name="harddrive"></textarea></td>
	<tr>

	<tr>
	<th>Display</th>
	<td><textarea cols="50" rows="2" name="display"></textarea></td>
	<tr>

	<tr>
	<th>Graphic Card</th>
	<td><textarea cols="50" rows="2" name="gc"></textarea></td>
	<tr>

	<tr>
	<th>Operating System</th>
	<td><textarea cols="50" rows="2" name="os"></textarea></td>
	<tr>


	<tr>
	<th> Weight</th>
	<td><textarea cols="50" rows="2" name="weight"></textarea></td>
	<tr>
	<tr>
	<th> Adapter</th>
	<td><textarea cols="50" rows="2" name="adapter"></textarea></td>
	<tr>
	<tr>
		<td colspan="2">
			<center><input class="btn btn-success" type="Submit" name="submit" ></center>
		</td>
	</tr>
</table>
<br>


</form>
</div>
</center>

</body>
<?php
$db=mysqli_connect('localhost','root','');
mysqli_select_db($db,"laptophouse");
if (isset($_POST['submit'])) 
{

$name=$_POST['name'];
$processor=$_POST['processor'];
$memory=$_POST['memory'];
$harddrive=$_POST['harddrive'];
$display=$_POST['display'];
$gc=$_POST['gc'];
$os=$_POST['os'];
$weight=$_POST['weight'];
$adapter=$_POST['adapter'];
$company=$_POST['company'];
 $allowed="(jpg|gif|jpeg|png)";
$filename1=$_FILES["image1"]["name"];
$filename2=$_FILES["image2"]["name"];
$filename3=$_FILES["image3"]["name"];
$filename4=$_FILES["image4"]["name"];


		
		$path1="image/".$filename1;
		$path2="image/".$filename2;
		$path3="image/".$filename3;
		$path4="image/".$filename4;
		
		move_uploaded_file($_FILES["image1"]["tmp_name"],$path1);
		move_uploaded_file($_FILES["image2"]["tmp_name"],$path2);
		move_uploaded_file($_FILES["image3"]["tmp_name"],$path3);
		move_uploaded_file($_FILES["image4"]["tmp_name"],$path4);

					


	
	

$sql="INSERT into laptop  (image1,image2,image3,image4,company,name,processor,memory,harddrive,display,gc,os,weight,adapter) values('$path1','$path2','$path3','$path4','$company','$name','$processor','$memory','$harddrive','$display','$gc','$os','$weight','$adapter')";
$result=mysqli_query($db,$sql);
	
if ($result) {
	header("location:main.php");
} else {
	echo "wrong";
}


}



?>



</html>
