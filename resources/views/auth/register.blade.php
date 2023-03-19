@extends('frontend.layouts.layout')

@section('content')
<div class="signup-page step-app">
    <form id="registerForm" method="post" class="text-center m-auto p-4">
    <div class="signup position-relative">
        <ul class="singup-step step-steps d-lg-flex d-none">
            <li class="singup-step-btn border-0 btn fw-semibold active" data-step-target="step1" type="button" title="User Info"><span
                    class="d-inline-block">1</span><br>Access data</li>
            <li class="singup-step-btn border-0 btn fw-semibold" type="button" data-step-target="step2" title="company_add"><span
                    class="d-inline-block">2</span><br>Location Details</li>
            <li class="singup-step-btn border-0 btn fw-semibold" type="button"  data-step-target="step3" title="Comments"><span
                    class="d-inline-block">3</span><br>Completed </li>
        </ul>
        <div class="step-content">
            <div class="sign-up-form step-tab-panel accessdaata wow fadeIn active" data-step="step1" data-wow-delay="0.3s">
                    <img src="{{ env('APP_URL').'front/images/site_logo.png' }}" alt="site_logo" class="mb-5 img-fluid">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3">
                            <span class="square-icon"><i class="fas fa-user"></i></span>
                            <input id="first_name" type="text" placeholder="First Name" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="name" autofocus>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3">
                                <span class="square-icon"><i class="fas fa-user"></i></span>
                            <input id="last_name" type="text" placeholder="Last Name" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="name" autofocus>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3">
                            <span class="square-icon"><i class="fas fa-envelope"></i></span>
                            <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3">
                            <span class="square-icon"><i class="fas fa-phone-alt"></i></span>
                            <input id="phone" type="number" name="phone" class="form-control" placeholder="Phone" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3">
                            <span class="square-icon"><i class="fas fa-lock"></i></span>
                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3">
                            <span class="square-icon"><i class="fas fa-lock"></i></span>
                            <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="col-12 my-4">
                        <button class="btn btn-info btn-next px-3 px-4" type="button" title="Next">Next</button>
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
            <div class="sign-up-form step-tab-panel locationdetails p-4" data-step="step2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3">
                            <span class="square-icon"><i class="fas fa-building"></i></span>
                            <input type="text" class="form-control" placeholder="Address" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3">
                            <span class="square-icon"><i class="fas fa-building"></i></span>
                            <input type="text" class="form-control" placeholder="Address" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3">
                            <span class="square-icon"><i class="fas fa-globe"></i></span>
                            <select name="Country" class="form-select" id="Country">
                                <option value="Us">Country</option>
                                <option value="Us">US</option>
                                <option value="Us">India</option>
                                <option value="Us">USA</option>
                                <option value="Us">UK</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3">
                            <span class="square-icon"><i class="fas fa-globe"></i></span>
                            <select name="State" class="form-select" id="State">
                                <option value="Us">State</option>
                                <option value="Us">Gujrat</option>
                                <option value="Us">GOA</option>
                                <option value="Us">KalKata</option>
                                <option value="Us">Maharastra</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3">
                            <span class="square-icon"><i class="fas fa-university"></i></span>
                            <input type="text" class="form-control" placeholder="Town / City" required />
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3">
                            <span class="square-icon"><i class="fas fa-link"></i></span>
                            <input type="number" class="form-control w-100" placeholder="Pin Number" required />
                        </div>
                    </div>

                    <div class="col-12 mt-4 step-footer">
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-secondary step-btn btn-prev px-3" type="button"
                            data-step-action="prev"  title="Previous">Previous</button>
                            <button class="btn btn-info btn-next px-3 ms-auto me-3" type="button"
                                title="Skip">Skip</button>
                            <button class="btn btn-info btn-next px-3 step-btn" type="button" data-step-action="next"  title="Next">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sign-up-form step-tab-panel Completed p-4" data-step="step3">
                <div class="row justify-content-center mt-md-5">
                    <div class="col-md-6 text-center mb-3">
                        <i class="fas fa-check-circle fa-5x text-success"></i>
                        <h4 class="mt-3">Registration completed successfully</h4>
                    </div>
                    <div class="col-md-12 text-center">
                        <a href="#" type="submit" class="btn btn-primary btn-next px-4 mt-4 me-3 step-btn"  data-step-action="finish" > Keep me log
                            in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
@section('js')
<script>
    
    $(document).ready(function () {
        jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
        });
        $( "#registerForm" ).validate({
        rules: {
            first_name: {
            required: true,
            max: 23
            }
        }
        });
        const DOMstrings = {
            stepsBtnClass: 'singup-step-btn',
            stepsBtns: document.querySelectorAll(`.singup-step-btn`),
            stepsBar: document.querySelector('.singup-step'),
            stepsForm: document.querySelector('.signup'),
            stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
            stepFormPanelClass: 'sign-up-form',
            stepFormPanels: document.querySelectorAll('.sign-up-form'),
            stepPrevBtnClass: 'btn-prev',
            stepNextBtnClass: 'btn-next'
        };

        // IMPORTANT: You must call .steps() before calling .formValidation()
    

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
</script>
@stop
