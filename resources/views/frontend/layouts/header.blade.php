<header id="header" class="sticky-top border-bottom">
    <div class="top-header bg-white">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between py-xl-0 py-4 position-relative">
            <button class="navbar-toggler p-2 border d-xl-none d-block" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars fa-lg"></i>
                    </button>
                <a href="{{ route('home') }}" class="site-logo"> <img src="{{ env('APP_URL').'front/images/site_logo.png' }}" alt="site logo" width="300"
                        height="36"></a>
                <livewire:front.header-search />
                <ul class="user-link d-flex align-items-center list-unstyled mb-0">
                    <li><a href="#" class="d-flex position-relative border-end border-secondary"><span
                                class="custom-icon custom-telephone me-2"><span class="path1"></span><span
                                    class="path2"></span></span><span class="link-content d-xl-inline-block d-none"> +971 4
                                2678618</span></a></li>
                    <li>
                        @guest
                        <a href="{{ route('login') }}" class="d-flex position-relative border-end border-secondary"><span
                                class="custom-icon custom-account me-2"><span class="path1"></span><span
                                    class="path2"></span></span><span class="link-content d-xl-inline-block d-none">Sign In</span></a>
                        @else
                        <a href="{{ route('logout') }}" class="d-flex position-relative border-end border-secondary"><span
                                class="custom-icon custom-account me-2"><span class="path1"></span><span
                                    class="path2"></span></span><span class="link-content d-xl-inline-block d-none">Hello, {{ Auth::user()->first_name }}</span></a>
                        @endguest
                    </li>
                    @auth
                    <li> <a href="{{ route('wishlist') }}" class="d-flex position-relative border-end border-secondary"><span
                                class="custom-icon custom-wishlistsvg me-2"><span class="path1"></span><span
                                    class="path2"></span></span><span class="link-content d-xl-inline-block d-none">Wishlist</span></a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="d-flex position-relative border-end border-secondary">
                            <span class="custom-icon custom-account me-2"><span class="path1"></span>
                            <span class="path2"></span></span><span class="link-content d-xl-inline-block d-none">logout</span
                        ></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @endauth
                    <li> <a href="#" class="d-flex position-relative border-end border-secondary me-3"><span
                                class="custom-icon custom-cart me-2"><span class="path1"></span><span
                                    class="path2"></span></span><span class="link-content d-xl-inline-block d-none">Cart</span>
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
