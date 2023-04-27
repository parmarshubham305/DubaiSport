<nav class="navbar navbar-expand-xl py-0 bg-white position-relative">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" class="btn btn-primary" data-bs-toggle="offcanvas"
                        href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><i
                            class="fa-solid fa-bars me-1"></i> All</a>
                </li>
                @foreach($categoryGroups as $categoryGroup)
                <li class="nav-item dropdown position-static">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">{{ $categoryGroup['title'] }}</a>
                    <div class="dropdown-menu bg-light">
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                @foreach($categoryGroup['categories'] as $category)
                                <div class="col-md-auto">
                                    <a class="dropdown-item border"href="{{ route('front.category.products', $category['slug']) }}">
                                        <img src="{{ $category['image'] }}" alt="product_1" class="img-fluid p-2">
                                        <span class="d-block p-2 bg-white border-top text-center">{{ $category['title'] }}</span>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
                <li class="nav-item align-self-end">
                    <a class="btn btn-primary text-white px-4 text-uppercase py-2" href="#">SALE!</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
