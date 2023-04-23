<div>
<div class="top-product-list d-flex align-items-center justify-content-between pb-3">
    <div class="d-flex flex-wrap search-bar" role="search">
        <input class="form-control border-end-0  border border-primary" wire:model="keyword" wire:change="searchProducts($event.target.value)" type="text"
            placeholder="Search" aria-label="Search">
        <button class="btn btn-primary text-white border border-primary px-3" type="submit"><i
                class="fa-solid fa-magnifying-glass"></i></button>
    </div>
    <ul class="viewport border border-primary list-unstyled mb-0 d-flex">
        <li><a href="#" class="grid-view active"><i class="fa-solid fa-table-cells-large fa-lg"></i></a>
        </li>
        <li> <a href="#" class="list-view"><i class="fa-solid fa-list fa-lg"></i></a></li>
    </ul>
</div>
<!-- <ul class="filter-list flex-wrap list-unstyled d-flex align-items-center">
    <li class="me-3 mb-1">
        <span class="d-flex align-items-center bg-light rounded p-2">
            <badge class="badge text-info p-0 fw-semibold">Cardio </badge>
            <a href="javascript:void(0);" href="#" class="ps-2"><i class="fa-solid fa-xmark fa-sm"></i></a>
        </span>
    </li>
    <li class="me-3 mb-1">
        <span class="d-flex align-items-center bg-light rounded p-2">
            <badge class="badge text-info p-0 fw-semibold">Benches </badge>
            <a href="javascript:void(0);" href="#" class="ps-2"><i class="fa-solid fa-xmark fa-sm"></i></a>
        </span>
    </li>
    <li class="me-3 mb-1">
        <span class="d-flex align-items-center bg-light rounded p-2">
            <badge class="badge text-info p-0 fw-semibold">Tredmil </badge>
            <a href="javascript:void(0);" href="#" class="ps-2"><i class="fa-solid fa-xmark fa-sm"></i></a>
        </span>
    </li>
    <li class="me-3 mb-1">
        <span class="d-flex align-items-center bg-light rounded p-2">
            <badge class="badge text-info p-0 fw-semibold">Strengh & Free Weights </badge>
            <a href="javascript:void(0);" href="#" class="ps-2"><i class="fa-solid fa-xmark fa-sm"></i></a>
        </span>
    </li>
    <li class="me-3 mb-1">
        <span class="d-flex align-items-center bg-light rounded p-2">
            <badge class="badge text-info p-0 fw-semibold">Fit Plus </badge>
            <a href="javascript:void(0);" href="#" class="ps-2"><i class="fa-solid fa-xmark fa-sm"></i></a>
        </span>
    </li>
    <li class="me-3 mb-1">
        <a href="#" class="btn btn-info btn-sm py-1 px-2"><i class="fa-solid fa-trash  fa-sm"></i> Clear</a>
    </li>
</ul> -->
<div class="row listing-product">
    @foreach($products as $product)
    <div class="col-md-4 mb-4">
        <div class="card position-relative">
            <a href="{{ route('front.products.show',$product['id']) }}" class="product-img"><img src="{{ $product['main_image'] }}"
                    alt="produsct" class="card-img-top img-fluid"></a>
            <livewire:front.wishlist :page="'product_list'" :productId="$product['id']"/>
            <div class="card-body bg-light-gray border-top">
                <span class="d-block mb-1">{{ $product['category']['title'] }}</span>
                <p class="fw-semibold mb-1 product-heading"><a href="#">{{ $product['title'] }}</a>
                </p>
                <p class="text-primary fw-bold product-price d-flex align-items-center">AED {{ number_format($product['discounted_price'],2) }} 
                    <del class="text-secondary ms-1">AED {{ number_format($product['price'],2) }}</del>
                    <small class="badge ms-1 bg-primary px-2">{{ $product['discount_percentage'] }}% OFF</small>
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>