<?php
$title = 'Contact';
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
	<link rel="stylesheet" href="./css/animate.css" />
	<link rel="stylesheet" href="./css/owl.theme.default.min.css" />
	<link rel="stylesheet" href="./css/owl.carousel.min.css" />
	<link rel="stylesheet" href="./css/meanmenu.min.css" />
	<link rel="stylesheet" href="./css/venobox.css" />
	<link rel="stylesheet" href="./css/font-awesome.css" />
	<link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/cart.css">
</head>
<body>
    		<!-- Page item Area -->
		<div id="page_item_area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 text-left">
						<h3>Contact</h3>
					</div>		

					<div class="col-sm-6 text-right">
						<ul class="p_items">
							<li><a href="#">home</a></li>
							<li><span>Contact</span></li>
						</ul>					
					</div>	
				</div>
			</div>
		</div>
		
		<!-- Contact Page -->
		<div class="contact_page_area fix">
			<div class="container">					
				<div class="row">
					<div class="contact_frm_area text-left col-lg-6 col-md-12 col-xs-12">
						<h3>Get in Touch</h3>
						<form action="#">
							<div class="form-row">
								<div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="Name*" /></div>
								<div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="Email*" /></div>
							</div>

							<div class="form-group">
								<input type="text" class="form-control" placeholder="Subject" />
							</div>
				
							<div class="form-group">
								<textarea name="message" class="form-control" placeholder="Message"></textarea>
							</div>
							
							<div class="input-area submit-area"><button class="btn border-btn" type="submit" >Send Message</button></div>
							
						</form>		
					</div>	
				
					<div class="contact_info col-lg-6 col-md-12 col-xs-12">
						<h3>Contact Info</h3>
						<p class="subtitle">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
						</p>
						<div class="single_info">
							<div class="con_icon"><i class="fa fa-map-marker"></i></div>
							<p>1660 Travis Street <br />Miramar, FL 33025 </p>
						</div>
						<div class="single_info">
							<div class="con_icon"><i class="fa fa-phone"></i></div>
							<p>Phone : +772-607-0042</p>
							<p>Fax : +772-607-0042</p>
						</div>
						<div class="single_info">
							<div class="con_icon"><i class="fa fa-envelope"></i></div>
							<a href="#">RachelSOntiveros@rhyta.com </a> <br />
							<a href="#">RachelSOntiveros@rhyta.com </a>
						</div>
						
					</div>
				</div>
			</div>
		
							
			<div class="fix">
				<div id="contact_map_area"></div>
			</div>	
				
		</div>

        <!-- Google Map APi
		============================================ -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>
		<script>
		
			function initialize() {
			  var mapOptions = {
				zoom: 15,
				
				scrollwheel: false,
				center: new google.maps.LatLng(43.538265, -80.305982),
				
			  };
			  var map = new google.maps.Map(document.getElementById('contact_map_area'),
				  mapOptions);
			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				icon: 'img/map_pin.png',
				map: map,
				
			  });
	  
			}
			google.maps.event.addDomListener(window, 'load', initialize);			
		</script>		
</body>

<?php
$content = ob_get_clean();
include 'Layout.php';
?>