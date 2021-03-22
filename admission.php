<!DOCTYPE html>
<html>
  <head>
    <title>Bonjour Play School | Admission Form</title>
	
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
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<script src="https://use.fontawesome.com/5a8a7bb461.js"></script>
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
	
	<style>			
		*{
			font-family: 'Poppins', sans-serif;
			box-sizing: border-box;
		}				
		.section{
			float: left;
			width: 33.33%;								
			height: 100%;
			padding: 0 10px 10px;			
		}
		.section p{
			display: inline;
		}
		.section label{
			margin-top: 20px;
		}				
		.section-container{				
			width: 100%;
			content="";
			display: table;
			clear: both;
		}		
		.section-container h3{			
			background-color: khaki;			
			padding: 7px;
			margin-top: 15px;
			border-radius: 10px; 
			text-decoration: underline;
		}
		.section-container h3 span{
			width: 100%;
		}			
		.section-container hr{
			margin-bottom: 0;
		}
		textarea{
			width: 80%;
			height: auto;			
		}
		input[type="text"], input[type="email"], input[type="tel"], input[type="date"], select, textarea{
			border-radius: 5px;
		}
		.submit-btn{
			display: flex;
			flex-flow: row wrap;
			justify-content: center;
		}		
		.button-content button{	
			width: 15vw;
			border-radius: 10px;
			margin-right: 10px;
			padding: 10px 15px;
			text-align: center;	
		}
		@media (max-width: 600px){
			/*.search p{
				white-space: no-wrap;
				text-overflow: ellipsis;	
				overflow: hidden;
			}
			.search p:hover{
				overflow: visible;
			}*/
			.button-content button{	
				width: 30vw;
			}
			.section{
				width: 100%;
			}
		}			
	</style>
  </head>
  <body>
    <!-- body -->
	<div class="body-content">
		<div class="container-fluid">
			<div class="body-content1">
			<!-- header -->
			<?php include('menu.php') ?>
			<!-- //nav -->
			<!-- admission-section -->
			<div class = "services" style="width: 100%; height: auto;">
			  <h2>Online Admission Form</h2>
			   <div class="section-container">
					<h3><span>Child Information</span></h3><hr />	 

					<div class = "section">
						<label for="childImage">Upload Child's Image</label><br>
						<input type="file" name="childImage" id="childImage" style="margin-top: 10px;" required/>
					</div>
						
					<div class = "section">
						<label for = "childName">Name: </label><br>
						<input type = "text" name = "childName" id = "childName" required><br />
									
						<label for="dob">DOB</label><br>
						<input type = "date" name = "dob" id = "dob" required><br />
								
						<label>Gender: </label><br>
						<input type = "radio" name = "gender" id = "male" required/>					
						<p for = "male">Male</p>
						<input type = "radio" name = "gender" id = "female" required/>
						<p for = "female">Female</p><br />
									
						<label for = "bloodGroup"> Blood Group: </label><br>
						<select name = "bloodGroup" id = "bloodGroup" required>
							<option value = ''>---Select----</option>
							<option value = 'A +ve'>A +ve</option>
							<option value = 'A -ve'>A -ve</option>
							<option value = 'AB +ve'>AB +ve</option>
							<option value = 'AB -ve'>AB -ve</option>
							<option value = 'B +ve'>B +ve</option>
							<option value = 'B -ve'>B -ve</option>
							<option value = 'O +ve'>O +ve</option>
							<option value = 'O +ve'>O -ve</option>
						</select><br />
					</div>
							
					<div class = "section">
						<label for = "address">Address: </label><br>
						<textarea name = "address" id = "address" rows = '1' required></textarea><br>
					</div>
			    </div>							
		     	<div class="section-container"> 
					<h3><span>Parents Information</span></h3><hr />
					<div class="section-container">
						<div class="section">
							<label for="fatherImage">Father's Photograph</label><br>
							<input type="file" name="fatherImage" id="fatherImage" style="margin-top: 10px;" required>
	
						</div>
						<div class="section">
							<label for = "fatherName">Father's Name: </label><br>
							<input type = "text" id = "fatherName" name = "fatherName" required /><br />
	
							<label for = "fatherOccupation">Father's Ocuupation: </label><br>
							<input type = "text" id = "fatherOccupation" name = "fatherOccupation" required /><br />							
						</div>
							
						<div class="section">
							<label for = "fatherNumber">Contact No.: </label><br>
							<input type = "tel" id = "fatherNumber" name = "fatherNumber" pattern = "((\+){1}91){1}[1-9]{1}[0-9]{9}" placeholder = "+91-9765421546" required /><br />						 
	
							<label for = "fatherEmail">Email: </label><br>
							<input type = "email" id = "fatherEmail" name = "fatherEmail" required /><br />
						</div>
					</div>
						
					<div class="section-container"><hr>
						<div class="section">
							<label for="motherImage">Mother's Photograph</label><br>
							<input type="file" name="motherImage" id = "motherImage" style="margin-top: 10px;" required>
						</div>
	
						<div class="section">
							<label for = "motherName">Mother's Name: </label><br>
							<input type = "text" id = "motherName" name = "motherName" required /><br />
	
							<label for = "motherOccupation">Mother's Ocuupation: </label><br>
							<input type = "text" id = "motherOccupation" name = "motherOccupation" required /><br />	
						</div>
							
						<div class="section">
							<label for = "motherNumber">Contact No.: </label><br>
							<input type = "tel" id = "motherNumber" name = "motherNumber" pattern = "((\+){1}91){1}[1-9]{1}[0-9]{9}" placeholder = "+91-9765421546" required /><br />
	
							<label for = "motherEmail">Email: </label><br>
							<input type = "email" id = "motherEmail" name = "motherEmail" required /><br />
						</div>
					</div>												
				</div>				
					
				<div class="section-container">
					<h3><span>Other Required Information</span></h3><hr />

					<div class="section">
						<label for = "siblings">Sibling (if any) Yes/No: </label><br>
						<input type = "radio" id = "yes" name = "sibling" />
						<p for = "yes">Yes</p>
						<input type = "radio" id = "no" name = "sibling"/>
						<p for = "no">No</p><br>
			
						<label for = "sibName">Name: </label><br>
						<input type= "text" id = "sibName" name = "sibName"/><br />
					</div>
					<div class="section">	
						<!--  <label>Medical History</label>
						<p for = "vacineTaken">List of Vaccination Covered: </p>
						<textarea name = "vacine" id = "vacine" maxlength = "15" rows = "1"></textarea> -->
						<label for = "allergy">Is your child is allergic to anything? Please specify.</label><br>
						<textarea name = "allergy" id = "allergy" rows = "1"></textarea><br>
		
						<label for = "ailment">Any other medical element - </label><br>
						<textarea name = "ailment" id = "ailment" rows = "1"></textarea><br>
			
						<label for = "toilet">Is your child toilet trained?</label><br>
						<input type = "radio" name = "toilet" id = "tYes" />
						<p for = "tYes">Yes</p>
						<input type = "radio" name = "toilet" id = "tNo" />
						<p for = "tNo">No</p><br>
			
						<label for = "specification">Any other specification?</label><br>
						<textarea name = "specification" id = "specification" rows = "1"></textarea><br>	
					</div>	
					<div class="section">
						<label for = "familyType">Is your child in Nuclear/Joint Family?</label><br>
						<input type = "radio" name = "familyType" id = "familyType" value = "Nuclear" />
						<p for = "nuclear">Nuclear</p>
						<input type = "radio" name = "familyType" id = "familyType" value = "Joint" />
						<p for = "joint">Joint</p><br>
			
						<label for = "familyMembers">Other Members in the family?</label><br>
						<textarea name = "familyMembers" id = "familyMembers" rows = "1"></textarea><br>
					</div>			 
				</div>
				<hr>
				<div class="submit-btn">					
					<div class="button-content"><button name="save" id = "save" onclick="#">Submit</button></div>
					<div class="button-content"><button name="clear" id = "clear" onclick="#">Clear</button></div>
				</div>
				<hr>
			</div>
			<!-- //admission-section -->
		</div>
	</div>	
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