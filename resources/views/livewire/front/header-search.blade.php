<div class="d-xl-flex d-none search-bar" role="search">
    <input class="form-control border-end-0" wire:model="keyword" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-primary" type="submit"><span class="custom-icon custom-search"><span
                class="path1"></span><span class="path2"></span></span></button>
    @if($keyword)
    <div class="search-item position-absolute top-100 bg-white left-0">
        <div class="row g-0">
            <div class="col-md-5">
                <div class="p-3">
                    <h6 class="mb-2">Matching Category</h6>
                    <ul class="list-unstyled ">
                        @if($categories)
                            @foreach($categories as $category)
                            <li><a href="#">
                                    <span class="suggestion-name">{{ $category['title'] }}</span>
                                </a>
                            </li>
                            @endforeach
                        @endif
                    </ul>
                    <h6 class="mb-2">Matching Brand</h6>
                    <ul class="list-unstyled ">
                        @if($brands)
                            @foreach($brands as $brand)
                            <li><a href="#">
                                    <span class="suggestion-name">{{ $brand['value'] }}</span>
                                </a>
                            </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-7 bg-light">
                <div class="p-3 h-100">
                    <h6 class="mb-2">Recommeded Product</h6>
                    @if($products)
                    @foreach($products as $product)
                    <a href="{{ route('front.products.show',$product['id']) }}" tabindex="0">
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <img src="{{ $product['main_image'] }}" alt="product_1" class="img-fluid">
                        </div>
                        <div class="col-md-9">
                            <span class="d-block mb-1">{{ $product['category']['title'] }}</span>
                            <p class="fw-semibold mb-1 product-heading">{{ $product['title'] }}</p>
                            <p class="text-primary fw-bold product-price d-flex align-items-center">AED {{ number_format($product['discounted_price'],2) }} <del class="text-secondary ms-1">AED {{ number_format($product['price'],2) }}</del>
                            <small class="badge ms-1 bg-primary px-2">({{ $product['discount_percentage'] }}% OFF)</small></p>
                        </div>
                    </div>
                    </a>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif
</div>