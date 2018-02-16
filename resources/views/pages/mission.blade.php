@extends('master')

@section('content')
              <header id="intro">
                <div class="container">
                  <div class="table">
                    <div class="header-text">
                      <div class="row">
                        <div class="col-md-12 text-center">
                          <!-- <h2 class="light white">Contact</h2> -->
                        </div>
                      </div>
                        <div class="row">
                          <div class="col-md-4 col-offset-8 text-center">
                        <h3 class="light white">Contact Form</h3>
                        <hr>
                        <form action="{{ url('contact') }}" method="post">
                          {{ csrf_field() }}
                                <div class="form-group">
                                      <label>Full Name</label>
                                      <input id="name" type="text" name="name" placeholder="Your Name" autofocus required class="form-control">
                                </div>

                                <div class="form-group">
                                      <label>Email Address</label>
                                      <input id="email" type="email" name="email" placeholder="Your email" autofocus required class="form-control">
                                </div>

                                <div class="form-group">
                                      <label>Subject</label>
                                      <input id="subject" type="subject" name="subject" placeholder="Subject" autofocus required class="form-control">
                                </div>

                                <div class="form-group">
                                      <label>Contact Number</label>
                                      <input id="number" type="text" name="number" placeholder="Mobile number" autofocus required class="form-control">
                                </div>
                                <div class="form-group">
                                      <label>Message</label>
                                      <textarea id="message" name="message" placeholder="Message" autofocus required class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                      <input type="submit" value="Send" class="button">
                                </div>
                      </form>
                    </div>

                      </div>
                    </div>
                  </div>
                </div>
              </header>



@endsection
