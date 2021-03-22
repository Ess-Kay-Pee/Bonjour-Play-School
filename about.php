
<!DOCTYPE html>
<html>
<head>
<title>About Us</title>
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
			<!-- services -->
				<div class="services">
					<h2>About Bonjour Kidz Play School & Day Care</h2>
					<div class="services-grids">
						<div class="col-md-4 services-grid-left">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-8 services-grid-right">
							<h3>We Provide Awesome <span>Services</span></h3>
							<p>At Bonjour Kidz Play School & Day Care, children are nurtured in an atmosphere of love & affection which alone facilities the harmonious development of young minds. We emphasize on letting the child learn by playing and exploring.</p>
							<p>Bonjour Kidz Play School & Day Care help your child be a winner for life:“HELP ME DO IT MY SELF” is the life theme of our school. The children are encouraged to learn. How to learn and ‘I can do it’ attitude. Our aim is to help young minds grow and learn in an amicable environment, resulting in the all-round development of the child. We want to play responsible and positive role in shaping up your child’s tomorrow.</p>
							<h4><i>"But I must explain to you how all this mistaken idea of 
								denouncing pleasure and praising pain was born and I will give you a 
								complete.</i></h4>
							<div class="services-grid-right-l">
								<p>we will open World of <span>Knowledge</span> for you</p>
							</div>
							<div class="services-grid-right-r">
								<h5>Contact Us <i>+91 9759033533<br>+91 8860887227</i></h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<h2>Our Programs</h2><br>
					<div class="services-grids1">
						<div class="col-md-2 services-grids1-grid">
							<img src="images/1.jpg" alt=" " class="img-responsive" />
							<h4><a href="single.html">Play Group</a></h4>
							
							<div class="more">
								<a href="single.html" class="hvr-rectangle-out">Read More...</a>
							</div>
						</div>
						<div class="col-md-2 services-grids1-grid">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
							<h4><a href="single.html">Pre Nursery</a></h4>
							
							<div class="more">
								<a href="single.html" class="hvr-rectangle-out">Read More...</a>
							</div>
						</div>
						<div class="col-md-2 services-grids1-grid">
							<img src="images/13.jpg" alt=" " class="img-responsive" />
							<h4><a href="single.html"> Nursery</a></h4>
							
							<div class="more">
								<a href="single.html" class="hvr-rectangle-out">Read More...</a>
							</div>
						</div>
						<div class="col-md-2 services-grids1-grid">
							<img src="images/14.jpg" alt=" " class="img-responsive" />
							<h4><a href="single.html">KINDERGARTEN(K.G)</a></h4>
							
							<div class="more">
								<a href="single.html" class="hvr-rectangle-out">Read More...</a>
							</div>
						</div>
						<div class="col-md-2 services-grids1-grid">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
							<h4><a href="single.html">Day Care</a></h4>
							
							<div class="more">
								<a href="single.html" class="hvr-rectangle-out">Read More...</a>
							</div>
						</div>
						<div class="col-md-2 services-grids1-grid">
							<img src="images/13.jpg" alt=" " class="img-responsive" />
							<h4><a href="single.html"> Nursery Teacher Training program</a></h4>
							
							<div class="more">
								<a href="single.html" class="hvr-rectangle-out">Read More...</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<!-- //services -->
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