@extends('frontend.layouts.layout')

@section('content')
<div class="signup-page step-app"  id="demo">
    <div class="signup position-relative">
        <div  class="stepwizard">
            <ul class="singup-step d-lg-flex d-none stepwizard-row setup-panel">
                <li class="stepwizard-step singup-step-btn border-0 btn fw-semibold active">
                    <a href="#step-1" type="button"  class="d-inline-block btn-select btn-circle">1</a>
                    <br>  Access data
                </li>
                <li class="stepwizard-step singup-step-btn border-0 btn fw-semibold">
                    <a href="#step-2" type="button" class="d-inline-block btn-default  btn-circle" disabled="disabled">2</a>
                    <br> Location Details
                </li>
                <li class="stepwizard-step singup-step-btn border-0 btn fw-semibold">
                    <a href="#step-3" type="button" class="d-inline-block btn-default  btn-circle" disabled="disabled">3</a>
                    <br>  Completed
                </li>
            </ul>
        </div>
        <form id="registerForm" class="step-content demo-form" role="form">
            @csrf
            <div class="sign-up-form setup-content form-section accessdaata wow fadeIn current" id="step-1" data-wow-delay="0.3s">
                <div class="text-center m-auto p-4">
                    <img src="{{ env('APP_URL').'front/images/site_logo.png' }}" alt="site_logo" class="mb-5 img-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex form-group mb-3 position-relative pb-3">
                                <span class="square-icon"><i class="fas fa-user"></i></span>
                                <input type="text" name="first_name" class="form-control" placeholder="First name" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex form-group mb-3 position-relative pb-3">
                                <span class="square-icon"><i class="fas fa-user"></i></span>
                                <input type="text" name="last_name" class="form-control" placeholder="Last name" required />
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="d-flex form-group mb-3 position-relative pb-3">
                                <span class="square-icon"><i class="fas fa-user"></i></span>
                                <input type="text" name="" class="form-control" placeholder="Username" required />
                            </div>
                        </div> -->

                        <div class="col-md-6">
                            <div class="d-flex form-group mb-3 position-relative pb-3">
                                <span class="square-icon"><i class="fas fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="Email" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex form-group mb-3 position-relative pb-3">
                                <span class="square-icon"><i class="fas fa-phone-alt"></i></span>
                                <input type="number" name="phone" class="form-control" placeholder="Phone" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex form-group mb-3 position-relative pb-3">
                                <span class="square-icon"><i class="fas fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Password" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex form-group mb-3 position-relative pb-3">
                                <span class="square-icon"><i class="fas fa-lock"></i></span>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required />
                            </div>
                        </div>
                        <div class="col-12 my-4 form-navigation">
                            <button class="btn btn-info btn-next  px-3 px-4 step-btn next" type="button" >Next</button>
                        </div>
                    </div>
                </div>
                    <div class="content text-center">
                        <h4 class="text-white">One of us ?</h4>
                        <p class="text-white">
                            Login in with your account
                        </p>
                        <a href="{{ route('login') }}" class="btn btn-primary px-4"id="signInbtn">
                            Sign In
                        </a>
                    </div>
            </div>
            <div class="sign-up-form setup-content form-section locationdetails p-4"  id="step-2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3 position-relative pb-3">
                            <span class="square-icon"><i class="fas fa-building"></i></span>
                            <input type="text" name="address_line_1" class="form-control" placeholder="Street Address" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3 position-relative pb-3">
                            <span class="square-icon"><i class="fas fa-building"></i></span>
                            <input type="text" name="address_line_2" class="form-control" placeholder="Address Line 2" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3 position-relative pb-3">
                            <span class="square-icon"><i class="fas fa-globe"></i></span>
                            <select name="country_id" class="form-select" id="Country">
                                <option value="">Select Option</option>
                                @foreach($countries as $key => $country)
                                    <option value="{{ $country['id'] }}">{{ $country['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3 position-relative pb-3">
                            <span class="square-icon"><i class="fas fa-globe"></i></span>
                            <select name="State" class="form-select" id="State" placeholder="Select State">
                                <option value="">Select Option</option>
                                @foreach($states as $key => $state)
                                    <option value="{{ $state['id'] }}" class="d-none">{{ $state['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3 position-relative pb-3">
                            <span class="square-icon"><i class="fas fa-university"></i></span>
                            <input type="text" name="city" class="form-control" placeholder="Town / City" />
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3 position-relative pb-3">
                            <span class="square-icon"><i class="fas fa-link"></i></span>
                            <input type="number" name="pincode" class="form-control w-100" placeholder="Pin Number" />
                        </div>
                    </div>

                    <div class="col-12 mt-4 form-navigation">
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-secondary previous step-btn btn-prev px-3" type="button"
                                title="Previous">Previous</button>
                            <button class="btn btn-info btn-next px-3 ms-auto me-3" type="button"
                                title="Skip">Skip</button>
                            <button class="btn btn-info btn-next px-3 next step-btn" type="button"  title="Next">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sign-up-form setup-content form-section Completed p-4" id="step-3">
                <div class="row justify-content-center mt-md-5">
                    <div class="col-md-6 text-center mb-3">
                        <i class="fas fa-check-circle fa-5x text-success"></i>
                        <h4 class="mt-3">Registration completed successfully</h4>
                    </div>
                    <div class="col-md-12 text-center  form-navigation">
                        <button type="submit" class="btn btn-primary btn-next  px-4 mt-4 me-3 step-btn"  data-step-action="finish" > Keep me log
                            in</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function () {
        $('#Country').on('change', function() {
            $countryId = $(this).val();
            $('#State option').each(function(){
                if($(this).attr("data-country") == $countryId) {
                    $(this).removeClass('d-none');
                } else {
                    if($(this).attr("data-country") != undefined) {
                        $(this).addClass('d-none');
                    }
                }
            })
        });
    });

    $("#registerForm").on('submit', function(e){
      e.preventDefault();
        var form = $(this);
        form.parsley().validate();
        if (form.parsley() .isValid()){
			// var code = iti.getSelectedCountryData().dialCode;
			// $('#country_code').val(code)
			// $('#phone_number').val($(input).val())
          var datavalue = new FormData(document.getElementById("registerForm"));
        //   $('#register-btn').addClass('is-loading');
            $.ajax({
                  url: '/register',
                  type: 'post',
                  data:datavalue,
                  processData: false,
                  cache: false,
                  contentType: false,
                  success: function(data, status) {
                     if(status=="success"){
                    //    $('#register-btn').removeClass('is-loading');
                    //    var jsonobject = JSON.parse(data); //console.log(jsonobject);
                    //    if(jsonobject.register_status==200){
                    //        // datalayer event
                    //        dataLayer.push({'event':'LoginTracking','LoginTrackingAction':'Register'});
                    //        // datalayer event ends
                    //         window.location.href = "https://activefitnessstore.com/";
                    //    }else{
                    //      // swal({
                    //      //   title: 'Oh Oh!!',
                    //      //   text: jsonobject.register_message,
                    //      //   type: 'error',
                    //      //   confirmButtonText: 'Okay!'
                    //      // });
                    //      swal({
                    //        type: 'error',
                    //        showCloseButton: true,
                    //        showConfirmButton: false,
                    //        html:"<h3 id='popup-title'>"+jsonobject.register_message+"</h3>"
                    //      });
                    //    }
                      }
                  },
                  error: function(xhr, desc, err) {
                      console.log(xhr)
                      console.log(err)
                  }
              }); // end ajax call
        }
    });
</script>
@stop
