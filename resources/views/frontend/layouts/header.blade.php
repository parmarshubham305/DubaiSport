<header id="header" class="sticky-top">
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
                    <li><a href="#" class="d-flex position-relative border-end border-secondary"><span
                                class="custom-icon custom-account me-2"><span class="path1"></span><span
                                    class="path2"></span></span><span class="link-content">Sign Up</span></a></li>
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
    <nav class="navbar navbar-expand-lg py-0 bg-white">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Cardio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bikes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Strengh & Free weight</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Benchs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Flooring</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Loker & Benches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sonar & Stream</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Outdoor Fitness Equipment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kids Plays</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Multiple Cords</a>
                    </li>
                    <li class="nav-item align-self-end">
                        <a class="btn btn-primary text-white px-4 py-2" href="#">Sale</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>