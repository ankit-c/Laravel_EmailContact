
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Website</title>
        <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
        <script>

          // Enable pusher logging - don't include this in production
          Pusher.logToConsole = true;

          var pusher = new Pusher('681fd2258ac76e198d48', {
            cluster: 'ap2',
            encrypted: true
          });

          var channel = pusher.subscribe('my-channel');
          channel.bind('my-event', function(data) {
            alert(data.message);
          });
        </script>
        <link href="{{ URL::asset('/css/style.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://www.expertphp.in/css/bootstrap.css" type="text/css" media="all" />
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
        <script src="http://demo.expertphp.in/js/jquery.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Styles -->
        	<meta name="description" content="Test Website" />
        	<meta name="keywords" content="html template, css, free, one page, web design" />
        	<meta name="author" content="Ankit" />
        	<!-- Favicons (created with http://realfavicongenerator.net/)-->
        	<link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('/img/favicons/apple-touch-icon-57x57.png') }}">
        	<link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('/img/favicons/apple-touch-icon-60x60.png') }}">
        	<link rel="icon" type="image/png" href="{{ URL::asset('/img/favicons/favicon-32x32.png') }}" sizes="32x32">
        	<link rel="icon" type="image/png" href="{{ URL::asset('/img/favicons/favicon-16x16.png') }}" sizes="16x16">
        	<link rel="manifest" href="{{ URL::asset('/img/favicons/manifest.json') }}">
        	<link rel="shortcut icon" href="{{ URL::asset('/img/favicons/favicon.ico') }}">
        	<meta name="msapplication-TileColor" content="#00a8ff">
        	<meta name="msapplication-config" content="{{ URL::asset('/img/favicons/browserconfig.xml') }}">
        	<meta name="theme-color" content="#ffffff">
        	<!-- Normalize -->
        	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/normalize.css') }}/">
        	<!-- Bootstrap -->
        	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/bootstrap.css') }}">
        	<!-- Owl -->
        	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/owl.css') }}">
        	<!-- Animate.css -->
        	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/animate.css') }}">
        	<!-- Font Awesome -->
        	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/fonts/font-awesome-4.1.0/css/font-awesome.min.css') }}">
        	<!-- Elegant Icons -->
        	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/fonts/eleganticons/et-icons.css') }}">
        	<!-- Main style -->
        	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/cardio.css') }}">
          <style>
          .brand-img {
            width: 55px;
            height: 55px;
          }

          .nav-item {
            font-weight: bold;
            color: #000000;

          }
          .msg {
              background: #173e43;
          }

          footer {
            background-color: #3b3a36;
          }

          hr {
              color: black;
          }
          header {

          	background-color: #c9c9c9;
          	background: rgba(201, 201, 201, 0.93);

          }
        </style>
        </head>

        <body>
        	<div class="preloader">
        		<!-- <img src="{{ url('/img/Logo_bitcoin.gif') }}" alt="Preloader image"> -->
        	</div>
        	<nav class="navbar">
        		<div class="container">
        			<!-- Brand and toggle get grouped for better mobile display -->
        			<div class="navbar-header">
        				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        					<span class="sr-only">Toggle navigation</span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        				</button>
        				<a class="navbar-brand brand-img" href="#"><img src="{{ url('./img/Logo_bitcoin.jpg') }}"  alt="Logo_bitcoin"></a>
        			</div>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav nav navbar-right main-nav">
                   <li class="nav-item">
                     <a class="nav-link" href="./">Home </a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="./products">Products</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="./about">About</a>
                   </li>
                   <!-- <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Dropdown
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                       <a class="dropdown-item" href="#">Action</a>
                       <a class="dropdown-item" href="#">Another action</a>
                       <div class="dropdown-divider"></div>
                       <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                   </li> -->
                   <li class="nav-item">
                     <a class="nav-link" href="./mission">Mission</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="./contact">Signup</a>
                   </li>
                 </ul>
                   <!-- <form class="form-inline my-2 my-lg-0">
                     <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                   </form> -->
               </div>
        			<!-- Collect the nav links, forms, and other content for toggling -->


        					<!-- <li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Sign Up</a> -->
                  <!-- <div class=" position-ref ">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}"></a>
                            @else
                                <a href="{{ route('login') }}">Login</a>
                                <a href="{{ route('register') }}">Register</a>
                            @endauth
                        </div>
                    @endif
                  </div> -->

        			<!-- /.navbar-collapse -->
        		</div>
        		<!-- /.container-fluid -->
        	</nav>



            @yield('content')


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
        	<!-- Holder for mobile navigation -->
        	<div class="mobile-nav">
        		<ul>
        		</ul>
        		<a href="#" class="close-link"><i class="arrow_up"></i></a>
        	</div>
        	<!-- Scripts -->
          <!-- <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBa4BWsOe_0FXUh21yqV7i3Wk4H1B7-Vlg&callback=initMap">
    </script> -->
        	<!-- Scripts -->
            <script>
              @if(Session::has('$notification'))
                var type = "{{ Session::get('alert-type', 'info') }}";
                switch(type){
                    case 'info':
                        toastr.info("{{ Session::get('message') }}");
                        break;

                    case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                        break;
                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;
                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                        break;
                }
              @endif
            </script>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        	<script src="js/jquery-1.11.1.min.js"></script>
        	<script src="js/owl.carousel.min.js"></script>
        	<script src="js/bootstrap.min.js"></script>
        	<script src="js/wow.min.js"></script>
        	<script src="js/typewriter.js"></script>
        	<script src="js/jquery.onepagenav.js"></script>
        	<script src="js/main.js"></script>
            <script>
              @if(Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}";
                switch(type){
                    case 'info':
                        toastr.info("{{ Session::get('message') }}");
                        break;

                    case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                        break;

                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;

                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                        break;
                }
              @endif
            </script>
        </body>

        </html>
