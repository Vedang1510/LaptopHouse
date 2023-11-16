<!Doctype html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="view_more.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Ysabeau+Office:wght@200&display=swap" rel="stylesheet">
	<title>view_more</title>
</head>
<body>
	<?php
$db=mysqli_connect('localhost','root','');
mysqli_select_db($db,"laptophouse");
	

$id=$_REQUEST['id'];

$sql="SELECT * from laptop WHERE id='$id' ";
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
	<?php
		while ($a=mysqli_fetch_array($result)) 
{
	
?>
	<div class="small-img">
		<ul>
			<li><img src="<?php echo 	$a['image1']; ?>" onclick="changeImg('<?php echo 	$a['image1']; ?>')"></li>
			<li><img src="<?php echo 	$a['image2']; ?>" onclick="changeImg('<?php echo 	$a['image2']; ?>')"></li>
			<li><img src="<?php echo 	$a['image3']; ?>" onclick="changeImg('<?php echo 	$a['image3']; ?>')"></li>
			<li><img src="<?php echo 	$a['image4']; ?>" onclick="changeImg('<?php echo 	$a['image4']; ?>')"></li>
		</ul>
	</div>
	</div>
		<div class="big-img">
		<img src="<?php echo 	$a['image1']; ?>" id="selectImg">
	</div>
	<div class="about-laptop">
		<div class="model-name"><?php echo 	$a['name']; ?></div>
		<div class="details-of-laptop">
			<table>
				<tr>
					<td><img src="cpu.png"></td>
					<td><?php echo 	$a['processor']; ?></td>
				</tr>
				<tr>
					<td><img src="ram.png"></td>
					<td><?php echo 	$a['memory']; ?></td>
				</tr>
				<tr>
					<td><img src="storage.png"></td>
					<td><?php echo 	$a['harddrive']; ?></td>
				</tr>
				<tr>
					<td><img src="os.png"></td>
					<td><?php echo 	$a['os']; ?></td>
				</tr>
				<tr>
					<td><img src="disp.png"></td>
					<td><?php echo 	$a['display']; ?></td>
				</tr>
				<tr>
					<td><img src="graphics.png"></td>
					<td><?php echo 	$a['gc']; ?></td>
				</tr>
				<tr>
					<td><img src="weight.png"></td>
					<td><?php echo 	$a['weight']; ?></td>
				</tr>
				<tr>
					<td><img src="adaptor.png"></td>
					<td><?php echo 	$a['adapter']; ?></td>
				</tr>
			</table>
		</div>
			
	</div>
	<div class="whatsapp">
		<a href="https://wa.me/9499541541?text=I'm%20interested%20in%20your%20laptop%20name%20<?php echo 	$a['name']; ?>">
			<button>
				Whatsapp	
			</button>
		</a>
	</div>
	<?php } ?>
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
	<script type="text/javascript" src="view_more.js"></script>
</body>