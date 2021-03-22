
<!DOCTYPE html>
<html>
<head>
<title> Gallery </title>
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
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
<!-- for-gallery-rotation -->
<script src="js/modernizr.custom.97074.js"></script>
<!-- //for-gallery-rotation -->
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
<!-- json linking -->
<script type="text/javascript" src="json/gallery.json"></script>
</head>
	
<body>
<!-- body -->
	<div class="body-content">
		<div class="container-fluid">
			<div class="body-content1">
			<!-- header -->
				<?php include('menu.php') ?>
			<!-- //nav -->
			<!-- gallery -->
				<div class="gallery">
					<h2>Gallery</h2>
					<div class="gallery-grids">
						<section>
							<ul id="da-thumbs" class="da-thumbs">
								
								<script>
									for(i = 0;i<media.col1.length;i++){
										document.writeln('<li>');																							
											document.writeln('<a href="'+media.col1[i].Images+'" rel="title" class="b-link-stripe b-animate-go thickbox">');
							
												document.writeln('<img src="'+ media.col1[i].Images+'" alt="">');
												
												document.write("<div>");
													document.write("<h5>Bonjour Kidz Play School & Day Care</h5>");
														document.write("<span>We teach & motivate a new pedagogy of learning.Specialized program for over all development of the child.Well equipped classrooms.Qualified and experienced staff.A warm and comfortable environment.</span>");
												document.writeln('</div>');		
											document.writeln('</a>');												
										document.writeln('</li>');
									}
								</script>
								<!--<li>
									<a href="images/8.jpeg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/8.jpeg" alt="" />
										<div>
											<h5>Bonjour Kidz Play School & Day Care</h5>
											<span>We teach & motivate a new pedagogy of learning.Specialized program for over all development of the child.Well 
											equipped classrooms.Qualified and experienced staff.A warm and comfortable environment.</span>
										</div>
									</a>
								</li>
								<li>
									<a href="images/9.jpeg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/9.jpeg" alt="" />
										<div>
											<h5>Bonjour Kidz Play School & Day Care</h5>
											<span>We teach & motivate a new pedagogy of learning.Specialized program for over all development of the child.Well 
											equipped classrooms.Qualified and experienced staff.A warm and comfortable environment.</span>
										</div>
									</a>
								</li>
								<li>
									<a href="images/10.jpeg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/10.jpeg" alt="" />
										<div>
											<h5>Bonjour Kidz Play School & Day Care</h5>
											<span>We teach & motivate a new pedagogy of learning.Specialized program for over all development of the child.Well 
											equipped classrooms.Qualified and experienced staff.A warm and comfortable environment.</span>
										</div>
									</a>
								</li>
								<li>
									<a href="images/11.jpeg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/11.jpeg" alt="" />
										<div>
											<h5>Bonjour Kidz Play School & Day Care</h5>
											<span>We teach & motivate a new pedagogy of learning.Specialized program for over all development of the child.Well 
											equipped classrooms.Qualified and experienced staff.A warm and comfortable environment.</span>
										</div>
									</a>
								</li>
								<li>	
									<a href="images/12.jpeg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/12.jpeg" alt="" />
										<div>
											<h5>Bonjour Kidz Play School & Day Care</h5>
											<span>We teach & motivate a new pedagogy of learning.Specialized program for over all development of the child.Well 
											equipped classrooms.Qualified and experienced staff.A warm and comfortable environment.</span>
										</div>
									</a>
								</li>
								<li>
									<a href="images/15.jpeg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/15.jpeg" alt="" />
										<div>
											<h5>Bonjour Kidz Play School & Day Care</h5>
											<span>We teach & motivate a new pedagogy of learning.Specialized program for over all development of the child.Well 
											equipped classrooms.Qualified and experienced staff.A warm and comfortable environment.</span>
										</div>
									</a>
								</li>
								<li>
									<a href="images/16.jpeg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/16.jpeg" alt="" />
										<div>
											<h5>Bonjour Kidz Play School & Day Care</h5>
											<span>We teach & motivate a new pedagogy of learning.Specialized program for over all development of the child.Well 
											equipped classrooms.Qualified and experienced staff.A warm and comfortable environment.</span>
										</div>
									</a>
								</li>
								<li>
									<a href="images/17.jpeg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/17.jpeg" alt="" />
										<div>
											<h5>Bonjour Kidz Play School & Day Care</h5>
											<span>We teach & motivate a new pedagogy of learning.Specialized program for over all development of the child.Well 
											equipped classrooms.Qualified and experienced staff.A warm and comfortable environment.</span>
										</div>
									</a>
								</li>
								<li>
									<a href="images/18.jpeg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/18.jpeg" alt="" />
										<div>
											<h5>Bonjour Kidz Play School & Day Care</h5>
											<span>We teach & motivate a new pedagogy of learning.Specialized program for over all development of the child.Well 
											equipped classrooms.Qualified and experienced staff.A warm and comfortable environment.</span>
										</div>
									</a>
								</li>
								<li>
									<a href="images/19.jpeg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/19.jpeg" alt="" />
										<div>
											<h5>Bonjour Kidz Play School & Day Care</h5>
											<span>We teach & motivate a new pedagogy of learning.Specialized program for over all development of the child.Well 
											equipped classrooms.Qualified and experienced staff.A warm and comfortable environment.</span>
										</div>
									</a>
								</li>
								<li>
									<a href="images/20.jpeg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/20.jpeg" alt="" />
										<div>
											<h5>Bonjour Kidz Play School & Day Care</h5>
											<span>We teach & motivate a new pedagogy of learning.Specialized program for over all development of the child.Well 
											equipped classrooms.Qualified and experienced staff.A warm and comfortable environment.</span>
										</div>
									</a>
								</li>
								<li>
									<a href="images/21.jpeg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/21.jpeg" alt="" />
										<div>
											<h5>Bonjour Kidz Play School & Day Care</h5>
											<span>We teach & motivate a new pedagogy of learning.Specialized program for over all development of the child.Well 
											equipped classrooms.Qualified and experienced staff.A warm and comfortable environment.</span>
										</div>
									</a>
								</li>
								<li>
									<a href="images/22.jpeg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/22.jpeg" alt="" />
										<div>
											<h5>Bonjour Kidz Play School & Day Care</h5>
											<span>We teach & motivate a new pedagogy of learning.Specialized program for over all development of the child.Well 
											equipped classrooms.Qualified and experienced staff.A warm and comfortable environment.</span>
										</div>
									</a>
								</li>
								<li>
									<a href="images/23.jpeg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/23.jpeg" alt="" />
										<div>
											<h5>Bonjour Kidz Play School & Day Care</h5>
											<span>We teach & motivate a new pedagogy of learning.Specialized program for over all development of the child.Well 
											equipped classrooms.Qualified and experienced staff.A warm and comfortable environment.</span>
										</div>
									</a>
								</li>
								<li>
									<a href="images/24.jpeg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="images/24.jpeg" alt="" />
										<div>
											<h5>Bonjour Kidz Play School & Day Care</h5>
											<span>We teach & motivate a new pedagogy of learning.Specialized program for over all development of the child.Well 
											equipped classrooms.Qualified and experienced staff.A warm and comfortable environment.</span>
										</div>
									</a>
								</li> -->
								<div class="clearfix"> </div>
							</ul>
						</section>
					</div>
						<!-- pop-up-script -->
							<script src="js/jquery.chocolat.js"></script>
							<!--light-box-files -->
							<script type="text/javascript" charset="utf-8">
							$(function() {
								$('.gallery a').Chocolat();
							});
							</script>
						<!-- //pop-up-script -->
						<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
						<script type="text/javascript">
							$(function() {
							
								$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

							});
						</script>
				</div>
			<!-- //gallery -->
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