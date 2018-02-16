@extends('master')

@section('content')
        	<header id="intro">
        		<div class="container">
        			<div class="table">
        				<div class="header-text">
        					<div class="row">
        						<div class="col-md-12 text-center">
        							<h3 class="light white">Cypto Currency</h3>
        							<h1 class="white typed">CRYPTO WORLD EVOLUTION.</h1>
        							<span class="typed-cursor">|</span>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</header>
        	<section class="gray-bg">
        		<div class="cut cut-top"></div>
        		<!-- <div class="container gray-bg">
        			<div class="row intro-tables">
        				<div class="col-md-4">
        					<div class="intro-table intro-table-first gray-bg">



        					</div>
        				</div>
         			</div>
        		</div> -->
        	</section>
        	<section id="services" class="section section-padded gray-bg">
        		<div class="container">
        			<div class="row text-center title">
        				<h2>Services</h2>
        				<h4 class="light muted">Achieve the best results with our wide variety of training options!</h4>
        			</div>
                   <div class="container">
                                       <div class="jumbotron" >
                                        <div class="container">
                                            <div class="text-center">
                                              <h2>Sign-Up Form</h3>
                                            </div>
                                            <hr>
                                            <div class="jumbotron"  style="height:15px;">
                                          <div class="row col-md-8 ">

                                            @if (Session::has('flash_message'))
                                                <div class="alert alert-success alert-dismissible" role="alert">{{ Session::get('flash_message') }}</div>

                                            @endif
                                              <form action="{{ route('contact.store') }}" method="post">
                                                {{ csrf_field() }}
                                                <div class="form-group row">
                                                    <label for="fullname" name="fullname" class="col-sm-6 col-form-label">Full Name</label>
                                                    <div class="col-sm-10">

                                                        <input type="text" class="form-control input-sm " id="name" name="fullname"  placeholder="YourFull Name" required></br>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="email" name="email" class="col-sm-6 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control input-sm" id="email" name="email" placeholder="E-mail Address" required></br>
                                                  </div>
                                                </div>

                                                  <div class="form-group row">
                                                    <label for="uname" name="uname" class="col-sm-6 col-form-label">User Name</label>
                                                     <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="uname" name="uname" placeholder="UserName" required></br>
                                                      </div>
                                                </div>

                                                <div class="form-group row">
                                                  <label for="address1" name="address1" class="col-sm-6 col-form-label">Address Line-1</label>
                                                  <div class="col-sm-10">
                                                     <input type="text" class="form-control" id="address1" name="address1" placeholder="1234 Main St" required></br>
                                                  </div>
                                                </div>

                                                <div class="form-group row">
                                                  <label for="address2" name="address2" class="col-sm-6 col-form-label">Address Line-2</label>
                                                  <div class="col-sm-10">
                                                     <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment, studio, or floor" required></br>
                                                  </div>
                                                </div>

                                                <div class="form-group row">
                                                  <label for="city" name="city" class="col-sm-6 col-form-label">City</label>
                                                     <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="city" name="city" placeholder="City eg. Mumbai" required>
                                                      </div>
                                                </div>

                                                  <div class="form-group row">
                                                    <label for="state" name="state" class="col-sm-6 col-form-label">State</label>
                                                     <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="state" name="state" placeholder="State eg. Maharastra" required>
                                                     </div>
                                                </div>

                                                  <div class="form-group row">
                                                    <label for="country" class="col-sm-6 col-form-label">Country</label>
                                                      <div class="col-sm-10">
                                                         <input type="text" class="form-control" id="country" name="country" placeholder="Country eg. India" required>
                                                      </div>
                                                  </div>

                                                  <div class="form-group row">
                                                    <label for="zip" name="zip" class="col-sm-6 col-form-label">Zip</label>
                                                      <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="zip" name="zip" placeholder="eg. 123456" required></br>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <div class="offset-sm-8 col-sm-10">
                                                    <button type="submit" class="btn btn-primary btn-color">Sign Up</button>
                                                  </div>
                                                </div>
                                              </form>
                                              </div>
                                            </div>
                                           </div>
                                          </div>

                      </div>
        			<!-- <div class="row services">
        				<div class="col-md-4">
        					<div class="service">
        						<div class="icon-holder">
        							<img src="img/icons/heart-blue.png" alt="" class="icon">
        						</div>
        						<h4 class="heading">Cardio Training</h4>
        						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
        					</div>
        				</div>
        				<div class="col-md-4">
        					<div class="service">
        						<div class="icon-holder">
        							<img src="img/icons/guru-blue.png" alt="" class="icon">
        						</div>
        						<h4 class="heading">Yoga Pilates</h4>
        						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
        					</div>
        				</div>
        				<div class="col-md-4">
        					<div class="service">
        						<div class="icon-holder">
        							<img src="img/icons/weight-blue.png" alt="" class="icon">
        						</div>
        						<h4 class="heading">Power Training</h4>
        						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
        					</div>
        				</div>
        			</div> -->
        		</div>
        		<div class="cut cut-bottom"></div>
        	</section>
        	<!-- <section id="team" class="section gray-bg">
        		<div class="container">
        			<div class="row title text-center">
        				<h2 class="margin-top">Team</h2>
        				<h4 class="light muted">We're a dream team!</h4>
        			</div>
        			<div class="row">
        				<div class="col-md-4">
        					<div class="team text-center">
        						<div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
        							<div class="overlay text-center">
        								<h3 class="white">$69.00</h3>
        								<h5 class="light light-white">1 - 5 sessions / month</h5>
        							</div>
        						</div>
        						<img src="img/team/team3.jpg" alt="Team Image" class="avatar">
        						<div class="title">
        							<h4>Ben Adamson</h4>
        							<h5 class="muted regular">Fitness Instructor</h5>
        						</div>
        						<button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Sign Up Now</button>
        					</div>
        				</div>
        				<div class="col-md-4">
        					<div class="team text-center">
        						<div class="cover" style="background:url('img/team/team-cover2.jpg'); background-size:cover;">
        							<div class="overlay text-center">
        								<h3 class="white">$69.00</h3>
        								<h5 class="light light-white">1 - 5 sessions / month</h5>
        							</div>
        						</div>
        						<img src="img/team/team1.jpg" alt="Team Image" class="avatar">
        						<div class="title">
        							<h4>Eva Williams</h4>
        							<h5 class="muted regular">Personal Trainer</h5>
        						</div>
        						<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Sign Up Now</a>
        					</div>
        				</div>
        				<div class="col-md-4">
        					<div class="team text-center">
        						<div class="cover" style="background:url('img/team/team-cover3.jpg'); background-size:cover;">
        							<div class="overlay text-center">
        								<h3 class="white">$69.00</h3>
        								<h5 class="light light-white">1 - 5 sessions / month</h5>
        							</div>
        						</div>
        						<img src="img/team/team2.jpg" alt="Team Image" class="avatar">
        						<div class="title">
        							<h4>John Phillips</h4>
        							<h5 class="muted regular">Personal Trainer</h5>
        						</div>
        						<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Sign Up Now</a>
        					</div>
        				</div>
        			</div>
        		</div>
        	</section>
        	<section id="pricing" class="section">
        		<div class="container">
        			<div class="row title text-center">
        				<h2 class="margin-top white">Pricing</h2>
        				<h4 class="light white">Choose your favorite pricing plan and sign up today!</h4>
        			</div>
        			<div class="row no-margin">
        				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
        					<div class="pricing">
        						<div class="box-main active" data-img="img/pricing1.jpg">
        							<h4 class="white">Yoga Pilates</h4>
        							<h4 class="white regular light">$850.00 <span class="small-font">/ year</span></h4>
        							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>
        							<i class="info-icon icon_question"></i>
        						</div>
        						<div class="box-second active">
        							<ul class="white-list text-left">
        								<li>One Personal Trainer</li>
        								<li>Big gym space for training</li>
        								<li>Free tools &amp; props</li>
        								<li>Free locker</li>
        								<li>Free before / after shower</li>
        							</ul>
        						</div>
        					</div>
        					<div class="pricing">
        						<div class="box-main" data-img="img/pricing2.jpg">
        							<h4 class="white">Cardio Training</h4>
        							<h4 class="white regular light">$100.00 <span class="small-font">/ year</span></h4>
        							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>
        							<i class="info-icon icon_question"></i>
        						</div>
        						<div class="box-second">
        							<ul class="white-list text-left">
        								<li>One Personal Trainer</li>
        								<li>Big gym space for training</li>
        								<li>Free tools &amp; props</li>
        								<li>Free locker</li>
        								<li>Free before / after shower</li>
        							</ul>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</section> -->
        	<section class="section section-padded blue-bg">
        		<div class="container">
        			<div class="row">
        				<div class="col-md-8 col-md-offset-2">
        					<div class="owl-twitter owl-carousel">
        						<div class="item text-center">
        							<i class="icon fa fa-twitter"></i>
        							<h4 class="white light">Crypto Currency.</h4>
        							<h4 class="light-white light"> #training #exercise</h4>
        						</div>
        						<div class="item text-center">
        							<i class="icon fa fa-twitter"></i>
        							<h4 class="white light">Crypto Currency.</h4>
        							<h4 class="light-white light">#training #exercise</h4>
        						</div>
        						<div class="item text-center">
        							<i class="icon fa fa-twitter"></i>
        							<h4 class="white light">Crypto Currency.</h4>
        							<h4 class="light-white light">#training #exercise</h4>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</section>
        	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        		<div class="modal-dialog">
        			<div class="modal-content modal-popup">
        				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
        				<h3 class="white">Sign Up</h3>
        				<form action="" class="popup-form">
        					<input type="text" class="form-control form-white" placeholder="Full Name">
        					<input type="text" class="form-control form-white" placeholder="Email Address">
        					<div class="dropdown">
        						<button id="dLabel" class="form-control form-white dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        							Pricing Plan
        						</button>
        						<ul class="dropdown-menu animated fadeIn" role="menu" aria-labelledby="dLabel">
        							<li class="animated lightSpeedIn"><a href="#">1 month membership ($150)</a></li>
        							<li class="animated lightSpeedIn"><a href="#">3 month membership ($350)</a></li>
        							<li class="animated lightSpeedIn"><a href="#">1 year membership ($1000)</a></li>
        							<li class="animated lightSpeedIn"><a href="#">Free trial class</a></li>
        						</ul>
        					</div>
        					<div class="checkbox-holder text-left">
        						<div class="checkbox">
        							<input type="checkbox" value="None" id="squaredOne" name="check" />
        							<label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
        						</div>
        					</div>
        					<button type="submit" class="btn btn-submit">Submit</button>
        				</form>
        			</div>
        		</div>
        	</div>
@endsection
<!-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> -->
