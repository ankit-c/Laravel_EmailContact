@extends('master')
@section('title', '| Sign Up')
@section('content')
              <header id="intro">
                <div class="container">

                </div>
              </header>
              <div class="container">
                            <section class="sign-form">
                               <div class="jumbotron" >
                                <div class="container">
                                    <div class="text-center">
                                      <h2>Sign-Up Form</h3>
                                    </div>
                                    <hr>
                                    <div class="jumbotron"  style="height:150px;">
                                  <div class="row col-md-8 ">

                                    @if (Session::has('flash_message'))
                                        <div class="alert alert-success msg">{{ Session::get('flash_message') }}</div>
                                    @endif
                                      <form action="{{ route('contact.store') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <label for="fullname" name="fullname" class="col-sm-6 col-form-label">Full Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control input-sm" id="name" name="fullname"  placeholder="Your Full Name" required></br>
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
                            </section>
              </div>


@endsection
