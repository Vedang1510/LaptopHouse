<!Doctype html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="view_all.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Ysabeau+Office:wght@200&display=swap" rel="stylesheet">
	<title>view_all</title>
</head>
<body>
	<?php
$db=mysqli_connect('localhost','root','');
mysqli_select_db($db,"laptophouse");
	
$c=$_REQUEST['lp'];


$sql="SELECT * from laptop WHERE company='$c' ";
// $sqli="SELECT * from laptop where name='$name' LIKE a%;
$result=mysqli_query($db,$sql);

?>
	<div class="home">
		<img id="laptop-house"src="laptop_house.png">	
		<table>
			<tr>
				<td><a href="tel:+91 94-99-541-541"><img src="phone.png"></td></a>
				<td>+91 94-99-541-541</td>
			</tr>
		</table>
	</div>

	<div class="products">
		<div class="laptops">
				<?php
		while ($a=mysqli_fetch_array($result)) 
{
	
?>
			<div class="box">
				<img src="<?php echo 	$a['image1']; ?>" onmouseover="hover(this);" onmouseout="hoverOut(this);">
				<center><div class="model"><?php echo 	$a['name']; ?></div></center>
				<center><div class="processor-name"><?php echo 	$a['processor']; ?></div></center>
				<center><a href="view_more.php?id=<?php echo $a['id']  ?>"><button class="view-more">View more</button></a></center>
			</div>
		<?php } ?>
		</div>
	</div>
	<div class="contact-us">
		<center>
			<a id="t4"></a><div class="contact-us-box">
				<img id="logo"src="laptop_house.png">
				<div class="social-media">
					<h3>Social Media<h3>
					<div>
						<ul>
							<li><a href="https://wa.me/c/919499541541"><img src="whatsapp.png"></a></li>
							<li><img src="facebook.png"></li>
							<li><a href="https://instagram.com/laptops_house_?igshid=YmM0MjE2YWMzOA=="><img src="instagram.png"></a></li>
						</ul>
					</div>
				</div>
				<div class="contact-info">
					<h3>Contact us<h3>
					<div>
						<table>
							<tr>
								<td><a href="tel:+91 94-99-541-541"><img src="phone.png"></td></a>
								<td>+91 94-99-541-541</td>
							</tr>
							<tr>
								<td><img src="mail.png"></td>
								<td>pqrstuvxyz232323@gmail.com</td>
							</tr>
							<tr>
								<td><a href="https://maps.app.goo.gl/egAJKB4bWWpeVoG89"><img src="location.png"></a></td>
								<td>
									<h4>Amarnath Enterprise</h4>
									<span>16/white house, Near ICICI bank, Palanpur, Gujarat 385001</span>
								</td>
							</tr>
						</table>
					</div>
					<div class="copy-right">Copyright &copy; 2023 LaptopHouse</div>
				</div>
		</center>
	</div>
	<!-- <script type="text/javascript" src="view_all.js"></script> -->
</body>