
<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Peralta' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- body -->
	<div class="body-content">
		<div class="container-fluid">
			<div class="body-content1">
			<!-- header -->
				<?php include('menu.php') ?>
			<!-- //nav -->
			<!-- mail -->
				<div class="mail">
					<h2><span>We Are Available</span> Get In Touch With US</h2>
					<div class="mail-grids">
						<div class="col-md-4 mail-grid">
							<div class="mail-grid1">
								<div class="col-xs-3 mail-grid-left">
									<div class="mail-grid-left-pos">
										<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
									</div>
								</div>
								<div class="col-xs-9 mail-grid-right">
									<div class="mail-grid-right1">
										<h3>#B1, 101, Cherry County, Noida Externsion,Greater Noida West</h3>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-4 mail-grid">
							<div class="mail-grid1">
								<div class="col-xs-3 mail-grid-left">
									<div class="mail-grid-left-pos">
										<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
									</div>
								</div>
								<div class="col-xs-9 mail-grid-right">
									<div class="mail-grid-right1">
										<p><a href="mailto:bonjourkidzplayschool@gmail.com">bonjourkidzplayschool@gmail.com</a>
											</p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-4 mail-grid">
							<div class="mail-grid1">
								<div class="col-xs-3 mail-grid-left">
									<div class="mail-grid-left-pos">
										<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
									</div>
								</div>
								<div class="col-xs-9 mail-grid-right">
									<div class="mail-grid-right1">
										<p>+91 9759033533<span>+91 8860887227</span></p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="map-grids">
						<div class="col-md-6 map-grid">
							<h3>Our Location On <span>Map</span></h3>
							<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Cherry%20County%2CB-1%2C101%2CNoida%20Extension&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.enable-javascript.net/blog/divi-discount/">elegant themes collection</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
						</div>
						<div class="col-md-6 map-grid">
							<h3>Send <span>Message</span></h3>
							<form>
								<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<input type="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" required="">
								<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
								<input type="submit" value="Submit Now" >
							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<!-- //mail -->
			</div>
		</div>
	</div>
<!-- //body -->
<!-- footer -->
<?php include('footer.php') ?>
<!-- //footer -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
	</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>