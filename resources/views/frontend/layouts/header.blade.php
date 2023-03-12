<header id="header" class="sticky-top border-bottom">
    <div class="top-header bg-white">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="site-logo"> <img src="{{ env('APP_URL').'front/images/site_logo.png' }}" alt="site logo" width="300"
                        height="36"></a>
                <div class="d-flex search-bar" role="search">
                    <input class="form-control border-end-0" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit"><span class="custom-icon custom-search"><span
                                class="path1"></span><span class="path2"></span></span></button>
                </div>
                <ul class="user-link d-flex align-items-center list-unstyled mb-0">
                    <li><a href="#" class="d-flex position-relative border-end border-secondary"><span
                                class="custom-icon custom-telephone me-2"><span class="path1"></span><span
                                    class="path2"></span></span><span class="link-content"> +971 4
                                2678618</span></a></li>
                    <li><a href="{{ route('login') }}" class="d-flex position-relative border-end border-secondary"><span
                                class="custom-icon custom-account me-2"><span class="path1"></span><span
                                    class="path2"></span></span><span class="link-content">Sign In</span></a></li>
                    <li> <a href="#" class="d-flex position-relative border-end border-secondary"><span
                                class="custom-icon custom-wishlistsvg me-2"><span class="path1"></span><span
                                    class="path2"></span></span><span class="link-content">Wishlist</span></a></li>
                    <li> <a href="#" class="d-flex position-relative border-end border-secondary me-3"><span
                                class="custom-icon custom-cart me-2"><span class="path1"></span><span
                                    class="path2"></span></span><span class="link-content">Cart</span>
                            <span class="badge rounded-pill bg-primary ms-1 cart-badge">1</span>

                        </a></li>
                    <li>
                        <span class="dark-switch">
                            <span class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckChecked">
                            </span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg py-0 bg-white position-relative">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" class="btn btn-primary" data-bs-toggle="offcanvas"
                            href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><i
                                class="fa-solid fa-bars me-1"></i> All</a>
                    </li>
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Cardio</a>
                        <div class="dropdown-menu bg-light">
                            <div class="container">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-md-auto">
                                        <a class="dropdown-item border" href="#">
                                            <img src="{{ env('APP_URL').'front/images/products/product_1.jpg' }}" alt="product_1" class="img-fluid">
                                            <span class="d-block p-2 bg-white border-top text-center">Bikes</span>
                                        </a>
                                    </div>
                                    <div class="col-md-auto">
                                        <a class="dropdown-item border" href="#">
                                            <img src="{{ env('APP_URL').'front/images/products/product_1.jpg' }}" alt="product_1" class="img-fluid">
                                            <span class="d-block p-2 bg-white border-top text-center">Bikes</span>
                                        </a>
                                    </div>
                                    <div class="col-md-auto">
                                        <a class="dropdown-item border" href="#">
                                            <img src="{{ env('APP_URL').'front/images/products/product_1.jpg' }}" alt="product_1" class="img-fluid">
                                            <span class="d-block p-2 bg-white border-top text-center">Bikes</span>
                                        </a>
                                    </div>
                                    <div class="col-md-auto">
                                        <a class="dropdown-item border" href="#">
                                            <img src="{{ env('APP_URL').'front/images/products/product_1.jpg' }}" alt="product_1" class="img-fluid">
                                            <span class="d-block p-2 bg-white border-top text-center">Bikes</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Strengh & Free weights</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Benches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Flooring</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Locker & Benches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">sauna & stems</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Outdoor Fitness Equipments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kids Play</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">multiple-courts</a>
                    </li>
                    <li class="nav-item align-self-end">
                        <a class="btn btn-primary text-white px-4 text-uppercase py-2" href="#">SALE!</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>