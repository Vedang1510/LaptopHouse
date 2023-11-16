<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
 $db=mysqli_connect("localhost","root","");
 mysqli_select_db($db,"laptophouse");

$id=$_REQUEST['id'];
$result=mysqli_query($db,"SELECT * FROM laptop WHERE id='$id'");

$a=mysqli_fetch_array($result);

 ?>
 <form style=" margin-left: 40px; margin-top: 20px; "  action="deletea1.php" method="post">
 	<table style=" width: 40%; " class="table table-dark table-striped" border="1">
 		<tr>
 			<td>Name</td>
 			<td><input aria-label="First name" type="text" name="name" value="<?php echo $a['name'];?>"></td>
 		</tr>
        <tr>
    <th>Processor</th>
    <td><input type="Text" name="processor" value="<?php echo $a['processor'];?>" >
    <tr>

    <tr>
    <th>Memory</th>
    <td><input type="Text" name="memory" value="<?php echo $a['memory'];?>" >
    <tr>

    <tr>
    <th>Hard Drive</th>
    <td><input type="Text" name="harddrive" value="<?php echo $a['harddrive'];?>" >
    <tr>

    <tr>
    <th>Display</th>
    <td><input type="Text" name="display" value="<?php echo $a['display'];?>" >
    <tr>

    <tr>
    <th>Graphic Card</th>
    <td><input type="Text" name="gc" value="<?php echo $a['gc'];?>" >
    <tr>

    <tr>
    <th>Operating System</th>
    <td><input type="Text" name="os" value="<?php echo $a['os'];?>" >
    <tr>

    <tr>
    <th> Weight</th>
    <td><input type="Text" name=" weight" value="<?php echo $a['weight'];?>" >
    <tr>
    <tr>
    <th> Adapter</th>
    <td><input type="Text" name=" adapter" value="<?php echo $a['adapter'];?>" >
    <tr>
 		
 		<tr>
 			<td><input type="hidden" name="id" id="id" value="<?php echo $a['id'];	?>"></td>
 			<td><input type="submit" class="btn btn-danger" name="submit" value="Delete"></td>
 		</tr>
 	</table>
 </form>
</body>
</html>