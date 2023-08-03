<div class="subscribe-section border-top spacing-y">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 border-end mb-lg-0 mb-4">
                <div class="page-header">
                    <h2 class="mb-0 text-center">Contact <span class="text-primary">Us</span></h2>
                </div>
                <ul class="list-unstyled d-block d-md-flex flex-wrap align-items-center justify-content-center mb-0">
                    <li  class="border-end mb-xl-0 mb-3"><a href="#" class="px-3 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-center"><span
                                class="email d-flex align-items-center justify-content-center me-2"><i
                                    class="fa-solid fa-envelope"></i></span> any@gmail.com</a></li>
                    <li  class="border-end mb-xl-0 mb-3"><a href="#" class="px-3 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-center"><span
                                class="phone d-flex align-items-center justify-content-center me-2"><i
                                    class="fa-solid fa-phone"></i></span>+1 123 456 7896</a></li>
                    <li><a href="#" class="px-3 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-center"><span
                        class="phone d-flex align-items-center justify-content-center me-2"><i class="fa-brands fa-whatsapp fa-lg"></i></span>+1 123 456 7896</a></li>
                </ul>
            </div>
            <livewire:front.email-subscribe />
        </div>
    </div>
</div>
<div id="footer" class="footer-content spacing-y pb-0 bg-light-gray border-top">
    <div class="footer_top text-center text-md-start">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-2 mb-3">
                    <h5>Quick Links</h5>
                    {!! Helper::cmsPages() !!}
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <h5 class="mb-2">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fa-solid fa-envelope me-2"></i>any@gmail.com</a></li>
                        <li><a href="#"><i class="fa-solid fa-phone me-2"></i>+1 123 456 7890</a></li>
                    </ul>
                    <h5 class="mb-2">Service and Technical support</h5>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fa-solid fa-envelope me-2"></i>service@gmail.com</a></li>
                        <li><a href="#"><i class="fa-solid fa-phone me-2"></i>+1 123 456 7896</a></li>
                    </ul>
                    <h5 class="mb-2">Follow Us</h5>
                    <ul class="list-unstyled social-media d-flex align-items-center  justify-content-md-start  justify-content-center mb-3">
                        <li class="me-2"><a href="#"><i class="fa-brands fa-facebook-f fa-lg"></i></a></li>
                        <li class="me-2"><a href="#"><i class="fa-brands fa-instagram fa-lg"></i></a></li>
                        <li class="me-2"><a href="#"><i class="fa-brands fa-whatsapp fa-lg"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <h5>Product Category</h5>
                    @php
                      $categoroies = Helper::categories();
                    @endphp
                    <ul class="list-unstyled category-list">
                        @foreach($categoroies as $category)
                        <li>
                            <a href="{{ route('front.category.products', [$category['category_group']['slug'], $category['slug']]) }}">{{ $category['title'] }}</a>
                        </li>
                        @endforeach
                        <!-- <li>
                            <a href="#">Locker & Benches</a>
                        </li>
                        <li>
                            <a href="#">Kids Plays</a>
                        </li>
                        <li>
                            <a href="#">Bikes</a>
                        </li>
                        <li>
                            <a href="#">Strengh & Free weight</a>
                        </li>
                        <li>
                            <a href="#">Benchs</a>
                        </li>
                        <li>
                            <a href="#">Flooring</a>
                        </li>
                        <li>
                            <a href="#">Accessories</a>
                        </li>

                        <li>
                            <a href="#">Sonar & Stream</a>
                        </li>
                        <li>
                            <a href="#">Outdoor Fitness Equipment</a>
                        </li>
                        <li>
                            <a href="#">Multiple Cords</a>
                        </li> -->
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <h5><i class="fa-solid fa-location-dot me-2"></i> Showroom</h5>
                    <p class="text-secondary">task asjdhasd asdkdjhjdsfa sdfkhskdf </p>
                    <div class=" p-1 shadow"><iframe width="100%" height="250" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Dubai+(Dubai%20Sport)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                href="https://www.maps.ie/distance-area-calculator.html">measure area
                                map</a></iframe></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom mt-4">
        <div class="container py-lg-4 py-3 border-top">
            <div class="row align-items-center">
                <div class="col-md-6 text-md-start text-center mb-md-0 mb-3">
                    <small>Copyright @2023 Dubai Sports</small>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled d-flex align-items-center justify-content-xl-end justify-content-lg-end justify-content-center mb-0">
                        <li class="ms-3 rounded d-inline-block"><img src="{{ env('APP_URL').'front/images/mastercard.jpg' }}" alt="mastercard" width="" height="50" class="img-fluid border rounded"></li>
                        <li class="ms-3 rounded d-inline-block"><img src="{{ env('APP_URL').'front/images/paypal.jpg' }}" alt="paypal" height="50" class="img-fluid border rounded"></li>
                        <li class="ms-3 rounded d-inline-block"><img src="{{ env('APP_URL').'front/images/visa.jpg' }}" alt="visa" height="50"  class="img-fluid border rounded"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
