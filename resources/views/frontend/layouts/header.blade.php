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
    <livewire:front.category-group-menu />
</header>