<!DOCTYPE html>
<html>
<head>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>laptophouse</title>
	<!-- <link rel="stylesheet" type="text/css" href="laptophouse.css"> -->
		<style type="text/css">
			body{
				background-color: #F9F5F6;
			}
			th{
				font-size: 20px;
				padding: 10px;
			}
			td{
				font-size: 20px;
			}
			tr{
				border: 2px solid white;
				background-color: white;
			}
		
		</style>
	

</head>
<body>
	
		<?php
$db=mysqli_connect('localhost','root','');
mysqli_select_db($db,"laptophouse");

$sql="SELECT * from laptop";

$result=mysqli_query($db,$sql);

?>
	<div class="two">
		<table class="table table-success table-striped-columns">
  

						<tr>
							<th>Image</th>
							<th>Name</th>
							<th>Company</th>
							<th>Processor</th>
							<th>Memory</th>
							<th>Display</th>
							<th>Harddrive</th>
							<th>Graphic Card</th>
							<th>Operting System</th>
							<th>Weight</th>
							<th>Adaptor</th>
							<th>Delete</th>
							<th>Update</th>
						</tr>
		<?php
		while($a=mysqli_fetch_array($result))
		{
	
?>
		
					
                       <tr>
                       	 <td><img width="40%" src="<?php echo $a['image1']; ?> "></td>
                       	 <td><?php echo 	$a['name']; ?></td> 
                       	 <td><?php echo 	$a['Company']; ?></td> 
						 <td><?php echo 	$a['processor']; ?></td> 
						 <td><?php echo 	$a['memory']; ?></td> 
						 <td><?php echo 	$a['display']; ?></td> 
						 <td><?php echo 	$a['harddrive']; ?></td> 
						 <td><?php echo 	$a['gc']; ?></td> 
						 <td><?php echo 	$a['os']; ?></td> 
						 <td><?php echo 	$a['weight']; ?></td> 
						 <td><?php echo 	$a['adapter']; ?></td> 
						
						 <td><a  class="btn btn-danger" href="deletea1.php?id=<?php  echo $a['id']  ?>">Delete</a></td>
				
	                     <td><a class="btn btn-success" href="updatea.php?id=<?php echo $a['id']  ?>">Update</a></td>
                        </tr>

					
					
	<?php } ?>
	</table>
	</div>

</body>

</html>