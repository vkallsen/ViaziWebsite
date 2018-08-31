<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
<!-- 	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script> 
	$(function(){
	  $("#header").load("header.html"); 
	  $("#footer").load("footer.html"); 
	});
	</script> --> 
    <title>Viazi - Home</title>
  </head>
  <body>
  <!-- https://www.w3schools.com/php/php_includes.asp 
  http://afterlecture.com/forums/topic/how-to-copy-header-footer-in-every-html-page/  -->
  <!-- Header -->
	<?php include ("header.php"); ?>
  <!-- End Header -->
	<div id="content">
		<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(#e87fba, black)">
			<div class="container container-fluid">
				<div class="row">
						<img src="deploy_img/penguin.png" class="img-responsive" width="75" height="93">
						<h1 class="display-4" style="color:white">Viazi</h1>
				</div>
				<div class="row">
					<p class="lead" style="color:white">Course scheduling made easy.</p>
					<br>
					<br>
					<br>
				</div>
			</div>
		</div>
		<div class="container marketing" style="text-align:center">
			<div class="row">
				<div class="col-lg-6">
					<img src="deploy_img/calendar.png" class="img-responsive" width="216" height="216">	
					<h2>
						<a class="btn btn-secondary" href="deploy_howitworks.php" role="button">What We Do</a>
					</h2>				
					<p>
						<!-- Deploying custom applications to solve our customers' roadblocks. -->
						The only difference between “This is too complicated for software” and “How soon can I use this?” is a ten-minute demo.
					</p>
				</div>
				<div class="col-lg-6">
					<img src="deploy_img/users.svg" class="img-responsive" width="216" height="216">
					<br>
					<h2><a class="btn btn-secondary" href="deploy_contact.php" role="button">Contact Us</a></h2>
					<p>
						If you are interested in trying out the software or have questions about how it works, we would love to hear from you. 
					</p>
				</div>
			</div>	
		</div>
	</div>
	 -->
	<!-- Footer -->
	<?php include ("footer.php"); ?>
	<!-- End Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>