@extends('frontend.layouts.layout')

@section('content')
<!-- <div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Register') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div> -->
<div class="signup-page">
    <div class="signup position-relative">
        <div class="singup-step d-lg-flex d-none">
            <button class="singup-step-btn border-0 btn fw-semibold active" type="button" title="User Info"><span class="d-inline-block">1</span><br>Access data</button>
            <button class="singup-step-btn border-0 btn fw-semibold" type="button" title="company_add"><span class="d-inline-block">2</span><br>Location Details</button>
            <button class="singup-step-btn border-0 btn fw-semibold" type="button" title="Comments"><span class="d-inline-block">3</span><br>Completed </button>
            </div>
        <div class="sign-up-form accessdaata wow fadeIn active" data-wow-delay="0.3s">
            <form action="{{ route('register') }}" class="text-center m-auto p-4">
                <img src="{{ env('APP_URL').'front/images/site_logo.png' }}" alt="site_logo" class="mb-5 img-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3">
                            <span class="square-icon"><i class="fas fa-user"></i></span>
                            <input id="first_name" type="text" placeholder="First Name" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="name" autofocus>

                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3">
                                <span class="square-icon"><i class="fas fa-user"></i></span>
                            <input id="last_name" type="text" placeholder="Last Name" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="name" autofocus>

                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="d-flex form-group mb-3">
                                <span class="square-icon"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Username" required />
                        </div>
                    </div> -->

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
                            <input type="number" name="phone" class="form-control" placeholder="Phone" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3">
                            <span class="square-icon"><i class="fas fa-lock"></i></span>
                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
            </form>
            <div class="content text-center">
                <h4 class="text-white">One of us ?</h4>
                <p class="text-white">
                    Login in with your account
                </p>
                <a href="login.html" class="btn btn-primary px-4 " id="signInbtn">
                    Sign In
                </a>
            </div>
        </div>
        <div class="sign-up-form locationdetails p-4">
            <form action="#" class="text-center m-auto">
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
                                <select name="country_id" class="form-select" id="Country">
                                    <option value="">Select Country</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country['id'] }}">{{ $country['name'] }}</option>
                                    @endforeach
                                </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex form-group mb-3">
                                <span class="square-icon"><i class="fas fa-globe"></i></span>
                                <select name="State" class="form-select" id="State">
                                    <option value="">Select State</option>
                                    @foreach ($states as $state)
                                        <option class="d-none" data-country="{{ $state['country_id'] }}" value="{{ $state['id'] }}">{{ $state['name'] }}</option>
                                    @endforeach
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

                    <div class="col-12 mt-4">
                        <div class="d-flex justify-content-between">
                        <button class="btn btn-secondary btn-prev px-3" type="button" title="Previous">Previous</button>
                        <button  class="btn btn-info btn-next px-3 ms-auto me-3" type="button" title="Skip">Skip</button>
                        <button  class="btn btn-info btn-next px-3" type="button" title="Next">Next</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="sign-up-form Completed p-4">
            <form action="#" class="text-center m-auto">
                <div class="row justify-content-center mt-md-5">
                    <!-- <div class="col-md-6 text-center mb-3">
                        <i class="fas fa-check-circle fa-5x text-success"></i>
                        <h4 class="mt-3">Registration completed successfully</h4>
                    </div> -->
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary btn-next px-4 mt-4"> Sign Up</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
$(document).ready(function () {
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


    //remove class from a set of items
    const removeClasses = (elemSet, className) => {

        elemSet.forEach(elem => {

        elem.classList.remove(className);

        });

    };

    //return exect parent node of the element
    const findParent = (elem, parentClass) => {

        let currentNode = elem;

        while (!currentNode.classList.contains(parentClass)) {
        currentNode = currentNode.parentNode;
        }

        return currentNode;

    };

    //get active button step number
    const getActiveStep = elem => {
        return Array.from(DOMstrings.stepsBtns).indexOf(elem);
    };

    //set all steps before clicked (and clicked too) to active
    const setActiveStep = activeStepNum => {

        //remove active state from all the state
        removeClasses(DOMstrings.stepsBtns, 'active');

        //set picked items to active
        DOMstrings.stepsBtns.forEach((elem, index) => {

        if (index <= activeStepNum) {
            elem.classList.add('active');
        }

        });
    };

    //get active panel
    const getActivePanel = () => {

        let activePanel;

        DOMstrings.stepFormPanels.forEach(elem => {

        if (elem.classList.contains('active')) {

            activePanel = elem;

        }

        });

        return activePanel;

    };

    //open active panel (and close unactive panels)
    const setActivePanel = activePanelNum => {

        //remove active class from all the panels
        removeClasses(DOMstrings.stepFormPanels, 'active');

        //show active panel
        DOMstrings.stepFormPanels.forEach((elem, index) => {
        if (index === activePanelNum) {

            elem.classList.add('active');

            setFormHeight(elem);

        }
        });

    };

    //set form height equal to current panel height
    const formHeight = activePanel => {

        const activePanelHeight = activePanel.offsetHeight;


    };

    const setFormHeight = () => {
        const activePanel = getActivePanel();

        formHeight(activePanel);
    };

    //STEPS BAR CLICK FUNCTION
    DOMstrings.stepsBar.addEventListener('click', e => {

        //check if click target is a step button
        const eventTarget = e.target;

        if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
        return;
        }

        //get active button step number
        const activeStep = getActiveStep(eventTarget);

        //set all steps before clicked (and clicked too) to active
        setActiveStep(activeStep);

        //open active panel
        setActivePanel(activeStep);
    });

    //PREV/NEXT BTNS CLICK
    DOMstrings.stepsForm.addEventListener('click', e => {

        const eventTarget = e.target;

        //check if we clicked on `PREV` or NEXT` buttons
        if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`))) {
        return;
        }

        //find active panel
        const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);

        let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);

        //set active step and active panel onclick
        if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
        activePanelNum--;

        } else {

        activePanelNum++;

        }

        setActiveStep(activePanelNum);
        setActivePanel(activePanelNum);

    });

    //SETTING PROPER FORM HEIGHT ONLOAD
    window.addEventListener('load', setFormHeight, false);

    //SETTING PROPER FORM HEIGHT ONRESIZE
    window.addEventListener('resize', setFormHeight, false);
    });

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
</script>
@stop
