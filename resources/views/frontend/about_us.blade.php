@extends('frontend.layouts.layout')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 px-0">
                <img class="img-fluid w-100" src="{{ asset('front/images/Aboutus-main.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="spacing-y">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <img class="w-100 pe-lg-5 mb-lg-0 mb-4 img-fluid" src="{{ asset('front/images/aboutside.webp') }}" alt="">
            </div>
            <div class="col-lg-6">
                <div class="page-header text-left">
                    <h2 class="mb-0 text-center">WHO WE <span class="text-primary">ARE</span></h2>
                </div>
                <div>
                    <p>Founded in 2013, Active Fitness Store is the First concept online store for shopping fitness,
                        sports & wellness gear in the UAE. Today, with two brick and mortar stores in the UAE and many
                        more in the pipeline, we take pride in ourselves as the leading concept store in the GCC for
                        shopping fitness, sports & wellness gear housing over 15,000 products from 300+ brands.</p>
                    <p>Our store specializes mainly in Fitness Equipment (cardio, strength, and weight training
                        equipment etc.), Sports Equipment (Boxing, Basketball, Volleyball, Table Tennis, Teq Ball etc.)
                        and Wellness Equipment (Pool Tables, Foosball, Air Hockey, Darts etc.) although we cover a wide
                        range of other categories including Nutrition, Massage Devices, Performance shoes & apparel etc.
                        and many other accessories.</p>
                    <p>We offer products from world renowned Fitness & Sports brands including Nautilus, NordicTrack,
                        SOLE, Matrix, Life Fitness, Assault, Body Solid, Spirit, Concept 2, Merrithew, Bowflex, Venum,
                        Les Mills, SKLZ, Cornilleau, Stag, Teeter and many more</p>

                </div>
                <div class="pt-lg-5">
                    <h3>Our Slogan - "BringFitnessHome"</h3>
                    <p>Active Fitness Store has substantially influenced consumers towards instilling fitness into a
                        "household & lifestyle" concept as against the conventional view that for being fit one needs to
                        hit the gym. Today, technology has advanced to a stage where everything around us is just a
                        click away and so is our physical body activity for getting things done. This shift in our
                        lifestyle along with significant technological advancement of gym equipment that focuses on
                        every body part and function and not to mention the latest interactive app technology and online
                        training/live streaming classes, all of which is made convenient and economical for home use,
                        jacks up the idea of “BringFitnessHome”.</p>
                </div>

                <div class="d-lg-flex d-block pt-lg-4">
                    <div class="card mx-2 shadow bg-light p-4 mb-lg-0 mb-4">
                        <h3>Our<span class="text-primary"> Vision</span></h3>
                        <p>To become the consumer’s best choice for shopping fitness & sporting products.</p>
                    </div>
                    <div class="card mx-2 shadow bg-light p-4">
                        <h3>Our <span class="text-primary"> Mission</span></h3>
                        <p>To offer our customers the best selection of products at the most competitive prices with the
                            finest shopping experience.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="position-relative">
    <div class="container">
        <div class="row">
            <div class="position-relative">
                <img src="{{ asset('front/images/bg_offer.png') }}" class="img-fluid w-100" alt="subscription">
                <div class="offer--content mt-lg-0 mt-4">
                    <h2 class="d-block">WHAT WE OFFER</h2>
                    <p class="">Active Fitness Store is simply The Champion in the range of Home Fitness
                        Equipment. However, we also focus on a wide range other categories including Boxing, TT Tables,
                        Nutrition, Bikes and Other Fitness & Sporting accessories. We also offer exclusive access to
                        popular US brands like Body Solid, Nordic Track, Life Fitness, Concept 2, Assault Fitness and
                        more.</p>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="spacing-y bg-light">
    <div class="container">
        <div class="page-header">
            <h2 class="mb-0 text-center">What Makes Active Fitness <span class="text-primary">Store the #1 Choice </h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-6 col-sm-6 col-12 mb-3">
                <div class="card bg-white p-3 h-100 text-center">
                    <img src="{{ asset('front/images/International.svg') }}" class="mb-2" height="50" alt="">
                    <p class="h6 fw-normal">300+ International Fitness Brands</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-12 mb-3">
                <div class="card bg-white p-3 h-100 text-center">
                    <img src="{{ asset('front/images/Installation.svg') }}" class="mb-2" height="50" alt="">
                    <p class="h6 fw-normal">Free Delivery & Installation</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-12 mb-3">
                <div class="card bg-white p-3 h-100 text-center">
                    <img src="{{ asset('front/images/Guarantee.svg') }}" class="mb-2" height="50" alt="">
                    <p class="h6 fw-normal">Price Match <br> Guarantee</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-12 mb-3">
                <div class="card bg-white p-3 h-100 text-center">
                    <img src="{{ asset('front/images/Advisor.svg') }}" class="mb-2" height="50" alt="">
                    <p class="h6 fw-normal">Dedicated Product Advisor</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-12 mb-3">
                <div class="card bg-white p-3 h-100 text-center">
                    <img src="{{ asset('front/images/opthion.svg') }}" class="mb-2" height="50" alt="">
                    <p class="h6 fw-normal">Flexible Payment Options</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-6 col-sm-6 col-12 mb-3">
                <div class="card bg-white p-3 h-100 text-center">
                    <img src="{{ asset('front/images/Technicians.svg') }}" class="mb-2" height="50" alt="">
                    <p class="h6 fw-normal">Professional Technicians</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-12 mb-3">
                <div class="card bg-white p-3 h-100 text-center">
                    <img src="{{ asset('front/images/Delivery.svg') }}" class="mb-2" height="50" alt="">
                    <p class="h6 fw-normal">Next Day <br> Delivery</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-12 mb-3">
                <div class="card bg-white p-3 h-100 text-center">
                    <img src="{{ asset('front/images/Warranty.svg') }}" class="mb-2" height="50" alt="">
                    <p class="h6 fw-normal">Onsite Product Warranty</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-12 mb-3">
                <div class="card bg-white p-3 h-100 text-center">
                    <img src="{{ asset('front/images/Store.svg') }}" class="mb-2" height="50" alt="">
                    <p class="h6 fw-normal">Try the Product From Our Store</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-12 mb-3">
                <div class="card bg-white p-3 h-100 text-center">
                    <img src="{{ asset('front/images/Home.svg') }}" class="mb-2" height="50" alt="">
                    <p class="h6 fw-normal">Free Home <br> Demo</p>
                </div>
            </div>
        </div>
        <div class="border mt-lg-5 mt-4"></div>
        <div class="row mt-5">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                <div class="border p-3 bg-white h-100">
                    <h5 class="text-center mb-0"><span class="text-primary h2">10+</span>YEARS<br>
                        INDUSTRY EXPERTISE</h5>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                <div class="border p-3 bg-white h-100">
                    <h5 class="text-center mb-0"><span class="text-primary h2">100k</span> <br> SATISFIED CUSTOMERS</h5>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                <div class="border p-3 bg-white h-100">
                    <h5 class="text-center mb-0"><span class="text-primary h2">600+</span> <br> GOOGLE REVIEWS (4.3
                        RATING)</h5>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-lg-4">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                <div class="border p-3 bg-white h-100">
                    <h5 class="text-center mb-0"><span class=""><img class="mb-2" height="50"
                                src="{{ asset('front/images/Superbrands-logo.png') }}" alt=""></span> <br> SUPERBRANDS AWARD</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                <div class="border p-3 bg-white h-100">
                    <h5 class="text-center mb-0"><span class="text-primary h2">3 STORES</span> <br> IN UAE</h5>
                </div>
            </div>

        </div>
    </div>
</section>
@stop