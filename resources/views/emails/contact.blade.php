<html>
<head>
			<title>
				Contact Information
			</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
			<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
			<style>
						.blue-bg {
							background: #b3c2bf;
							background-color: #b3c2bf;
						}
						.form-field {


						}
			</style>
</head>
<body>
	<div class="jumbotron blue-bg">
		<div class="container">
			<div class="row col-md-8">
				<form>
					<div class="form-row">

										<h3>You Have a New Contact Via the Contact Form</h3>

										<div class="form-group form-field">
											<label>Full Name</label> : {{ $msgName}}
										</div>
										<div class="form-group form-field">
											<label>E-mail Address</label> : {{ $msgEmail}}
										</div>
										<div class="form-group form-field">
											<label>Username</label> : {{ $msgUname}}
										</div>
										<div class="form-group form-field">
											<label>Address Line-1</label> : {{ $msgAddress1}}
										</div>
										<div class="form-group form-field">
											<label>Address Line-2</label> : {{ $msgAddress2}}
										</div>
										<div class="form-groupl form-field">
											<label>City</label> : {{ $msgCity}}
										</div>
										<div class="form-group form-field">
											<label>State</label> : {{ $msgState}}
										</div>
										<div class="form-group form-field">
											<label>Country</label> : {{ $msgCountry}}
										</div>
										<div class="form-group form-field">
											<label>Zip</label> : {{ $msgZip}}
										</div>

					</div>
				</form>


			</div>
		</div>
	</div>
	<footer>
				 <div class="container">
					 <div class="row">
						 <div class="col-sm-6 text-center-mobile">
							 <h3 class="white">Find Me Here <span class="map-blink"> <img src="{{ url('/img/map.png')}}" alt="location_logo"/></span></h3>
							 <h5 class="light regular light-white">Drop In For A Cup Of Coffee</h5>

						 </div>
						 <div class="col-sm-6 text-center-mobile">
							 <h3 class="white">Opening Hours</h3>
							 <div class="row opening-hours">
								 <div class="col-sm-6 text-center-mobile">
									 <h5 class="light-white light">Mon - Fri</h5>
									 <h3 class="regular white">9:00 - 22:00</h3>
								 </div>
								 <div class="col-sm-6 text-center-mobile">
									 <h5 class="light-white light">Sat - Sun</h5>
									 <h3 class="regular white">10:00 - 18:00</h3>
								 </div>
							 </div>
						 </div>
					 </div>
					 <!-- <div class="row bottom-footer text-center-mobile"> -->

						 <div class="col-md-12">
							 <p>&copy; 2017 All Rights Reserved.</p>
							 <p class="text-center">Made With <span class="love">❤</span></i> By <strong>Ankit Chandgadkar</strong></p>
						 </div>
						 <div class="col-sm-4 col-md-12 text-right text-center-mobile">

							 <ul class="social-footer">
								 <li><a href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
								 <li><a href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
								 <li><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
								 <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
							 </ul>
						 </div>
					 </div>
				 </div>
			 </footer>
	<!--jquery-->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
