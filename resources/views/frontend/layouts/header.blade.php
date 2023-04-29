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
                <li class="d-xl-none d-inline-block "><a href="#"
                                class="d-flex position-relative border-0 border-secondary px-lg-3 px-0"><span
                                    class="custom-icon custom-search"><span class="path1"></span><span
                                        class="path2"></span></span></a></li>
                    <li class="d-lg-inline-block d-none"><a href="#" class="d-flex position-relative border-end border-secondary"><span
                                class="custom-icon custom-telephone me-2"><span class="path1"></span><span
                                    class="path2"></span></span><span class="link-content d-xl-inline-block d-none"> +971 4
                                2678618</span></a></li>
                    <li class="d-lg-inline-block d-none position-realtive">
                        @guest
                        <a href="{{ route('login') }}" class="d-flex position-relative border-end border-secondary"><span
                                class="custom-icon custom-account me-lg-2"><span class="path1"></span><span
                                    class="path2"></span></span><span class="link-content d-xl-inline-block d-none">Sign In</span></a>
                        @else
                        <a href="{{ route('logout') }}" data-bs-toggle="dropdown" class="dropdown dropdown-toggle d-flex position-relative border-end border-secondary"><span
                                class="custom-icon custom-account me-2"><span class="path1"></span><span
                                    class="path2"></span></span><span class="link-content d-xl-inline-block d-none">Hello, {{ Auth::user()->first_name }}</span></a>
                        @endguest
                        <ul class="dropdown-menu ms-3 mt-1 bg-light-gray">
                            <li class="p-0">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();" class="d-block p-1">
                              <i class="fa-solid fa-right-from-bracket mx-2"></i>  <span class="link-content d-xl-inline-block d-none">logout</span
                            ></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>

                    </li>
                    @auth
                    <li class="d-lg-inline-block d-none"> <a href="{{ route('wishlist') }}" class="d-flex position-relative border-end border-secondary"><span
                                class="custom-icon custom-wishlistsvg me-2"><span class="path1"></span><span
                                    class="path2"></span></span><span class="link-content d-xl-inline-block d-none">Wishlist</span></a>
                    </li>

                    @endauth
                    <li class="d-block"> <a href="#" class="d-flex position-relative border-lg-end border-0 border-secondary me-lg-3 me-0 px-lg-3 px-2"><span
                                class="custom-icon custom-cart me-2"><span class="path1"></span><span
                                    class="path2"></span></span><span class="link-content d-xl-inline-block d-none">Cart</span>
                            <span class="badge rounded-pill bg-primary ms-1 cart-badge">1</span>

                        </a></li>
                    <li  class="d-lg-inline-block d-none">
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
