<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">

    <title>Viazi - Contact Us</title>
  </head>
  <body>
  <!-- Header -->
	<?php include ("header.php"); ?>
  <!-- End Header -->
	<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(#e87fba, black)">
		<div class="container container-fluid">
			<div class="row">
					<img src="img/penguin.png" class="img-responsive" width="75" height="93">
					<h1 class="display-4" style="color:white">Viazi</h1>
			</div>
		</div>
	</div>
  <!-- https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form 
  https://www.w3schools.com/bootstrap/bootstrap_forms.asp
  -->
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2"> <!-- https://www.w3schools.com/bootstrap/bootstrap_grid_examples.asp -->
			<!-- https://bootsnipp.com/snippets/featured/rounded-buttons -->
				<h2 class="page-header">Get in Touch</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<p>Want to learn more about how we can help you with a custom solution? Use the contact form below, and we will get back to you on the next steps. All fields are required.</p>
			</div>
		</div>
		<form id="contact-form" method="post" action="contact.php" role="form"> <!-- Form -->
			<div class="messages"></div>
			<div class="row">	
				<div class="col-lg-8 col-lg-offset-2">
					
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" id="name" placeholder="Your name" required="required" data-error="Your name is required.">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label for="email">Email address</label>
							<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Your email" required="required" data-error="Your email address is required.">
							<div class="help-block with-errors"></div>
							<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
						</div>
						<div class="form-group">
							<label for="form_message">Message</label>
							<textarea id="form_message" name="message" class="form-control" placeholder="Your message" rows="4" required="required" data-error="Please leave us a message."></textarea>
							<div class="help-block with-errors"></div>
						</div>
						<input type="submit" class="btn btn-success btn-send" value="Send message" style="background-color: #5A3583;">
				</div>
			</div>
		</form>
    </div>
	<!-- Footer -->
	<?php include ("footer.php"); ?>
	<!-- End Footer -->
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="validator.js"></script>
    <script src="contact.js"></script>
  </body>
</html>