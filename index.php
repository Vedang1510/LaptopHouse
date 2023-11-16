<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Ysabeau+Office:wght@200& 		display=swap" rel="stylesheet">
	<title>Laptop house</title>
	<link rel="icon" type="image/x-icon" href="laptop_house.png">
	<link rel="stylesheet" type="text/css" href="laptopHouse.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
</head>
<body>
	<?php
$db=mysqli_connect('localhost','root','');
mysqli_select_db($db,"laptophouse");
if (isset($name)||isset($processor) ) { 
	

$id=$_POST['id'];
$name=$_POST['name'];
$processor=$_POST['processor'];


}
$sql="SELECT * from laptop where company='hp' ";
$sql1="SELECT * from laptop where company='dell' ";
$sql2="SELECT * from laptop where company='apple' ";
$sql3="SELECT * from laptop where company='lenovo' ";
// $sql4="SELECT * from laptop where company='smasung' ";
// $sql5="SELECT * from laptop where company='microsoft' ";


// $sqli="SELECT * from laptop where name='$name' LIKE a%;
$result=mysqli_query($db,$sql);
$result1=mysqli_query($db,$sql1);
$result2=mysqli_query($db,$sql2);
$result3=mysqli_query($db,$sql3);
// $result4=mysqli_query($db,$sql1);
// $result5=mysqli_query($db,$sql1);

?>
	<a id="t1"></a><div class="home">
		<img id="laptop-house"src="laptop_house.png">
		<form>
			<input type="search" name="search" placeholder="Search" id="search_bar"onkeyup="search()">
		</form>
		<ul>
			<a href="#t1"><li>Home</li></a>
			<a href="#t2"><li>Products</li></a>
			<a href="#t3"><li>Services</li></a>
			<a href="#t4"><li>Contact us</li></a>
		</ul>
	</div>
	<div class="company-logos">
		<center>
			<a href="view_all.php?lp=apple"><img src="apple.png"></a>
			<a href="view_all.php?lp=hp"><img src="hp.png"></a>
			<a href="view_all.php?lp=lenovo"><img id="lenovo"src="lenovo.png"></a>
			<a href="view_all.php?lp=dell"><img src="dell.png"></a>
			<img id="samsung"src="samsung.png">
			<img src="microsoft.png">
		</center>
	</div>
	<hr>
	<div class="slider">
		<center><img src="slide1.1.png" id="slide"></center>	
	</div>

	<a id="t2"></a><div class="products">
		<span class="none">

						<h3><b>HP</b></h3> <a href="view_all.php?lp=hp"><h4>view all</h4></a>
			<div class="laptops">
			<?php
				while ($a=mysqli_fetch_array($result)) 
				{
			?>

				<div class="box">
					<img src="<?php echo $a['image1']; ?>">
					<center><div class="model"><?php echo 	$a['name']; ?></div></center>
					<center><div class="processor-name"><?php echo 	$a['processor']; ?></div></center>
					<center><a href="view_more.php?id=<?php echo $a['id']  ?>"><button class="view-more">View more</button></a></center>
				</div>
				<?php }?>
			</div>
			</span>

			<h3><b>Dell</b></h3> <a href="view_all.php?lp=dell"><h4>view all</h4></a>
			<div class="laptops">
			<?php
				while ($a=mysqli_fetch_array($result1)) 
				{

			?>
				<div class="box">
					<img src="<?php echo $a['image1']; ?>">
					<center><div class="model"><?php echo 	$a['name']; ?></div></center>
					<center><div class="processor-name"><?php echo 	$a['processor']; ?></div></center>
					<center><a href="view_more.php?id=<?php echo $a['id']  ?>"><button class="view-more">View more</button></a></center>
				</div>
				<?php } ?>
			</div>
			
	<h3><b>Lenovo</b></h3> <a href="view_all.php?lp=lenovo"><h4>view all</h4></a>
			<div class="laptops">
			<?php
				while ($a=mysqli_fetch_array($result2)) 
				{

			?>
				<div class="box">
					<img src="<?php echo $a['image1']; ?>" >
					<center><div class="model"><?php echo 	$a['name']; ?></div></center>
					<center><div class="processor-name"><?php echo 	$a['processor']; ?></div></center>
					<center><a href="view_more.php?id=<?php echo $a['id']  ?>"><button class="view-more">View more</button></a></center>
				</div>
				<?php } ?>
			</div>
	<h3><b>Apple</b></h3> <a href="view_all.php?lp=apple"><h4>view all</h4></a>
			<div class="laptops">
			<?php
				while ($a=mysqli_fetch_array($result3)) 
				{

			?>
				<div class="box">
					<img src="<?php echo $a['image1']; ?>">
					<center><div class="model"><?php echo 	$a['name']; ?></div></center>
					<center><div class="processor-name"><?php echo 	$a['processor']; ?></div></center>
					<center><a href="view_more.php?id=<?php echo $a['id']  ?>"><button class="view-more">View more</button></a></center>
				</div>
				<?php } ?>
			</div>
			
		<!-- </center> -->
	</div>
	<a id="t3"></a><div class="services">
		<center>
			<div class="service-center-box">
					<div class="service-box">
					<center> <img src="Quick_response.png"></center>
					<center> <div class="service_heading">Quick Response</div></center>
					<center> <div class="service_detail"> We normally reply your inquire within 45 minutes during weekdays</div></center>
				</div>
				<div class="service-box">
						<center> <img src="one_stop_solution.png"></center>
						<center> <div class="service_heading">One Stop Service</div></center>
						<center> <div class="service_detail">We provide one-stop service that contains manufacturing, assembling, and testing.</div></center>
					</div>
					<div class="service-box">
						<center> <img src="high_quality.png"></center>
						<center> <div class="service_heading">High Quality</div></center>
						<center><div class="service_detail">100% Qc (quality control) inspec-tion before shipping.</div></center>
					</div>
			</div>
		</center>
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
								<td><a href="tel:+91 94-99-541-541"><img src="phone.png" id="call"></td></a>
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
	<script type="text/javascript", src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript", src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<script type="text/javascript" src="laptopHouse.js"></script>
</body>