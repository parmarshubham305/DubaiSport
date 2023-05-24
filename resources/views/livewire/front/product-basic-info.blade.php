<div class="col-md-6">
    <div class="page-header mb-0 pb-0 pb-1 border-bottom border-2 d-flex align-items-start align-items-lg-center justify-content-md-between mb-4 flex-lg-row flex-column-reverse">
        <h2 class="product-heading mb-0">{{ $product['title'] }} </h2>
        <!-- <span class="text-primary">Treadmill</span> -->
        <div class="brands mb-lg-0 mb-2">
            <span class="badge bg-dark d-inline-block p-2 mr-2 mb-1"><i class="fas fa-check-circle me-1"
                    aria-hidden="true"></i> {{ $product['category']['title'] }} </span>
            <span class="badge bg-success d-inline-block p-2 mb-1"><i class="fas fa-check-circle me-1"
                    aria-hidden="true"></i> In stock</span>
        </div>
    </div>
    <div class="price-calculator">
        <div class="quantity mb-4">
            <h5 class="mb-3">Quantity
                <a href="javascript:void()" class="text-primary" data-bs-toggle="popover"
                    data-bs-trigger="focus" data-bs-content="Quntity is here">
                    <i class="fas fa-info-circle fa-sm" aria-hidden="true"></i>
                </a>
            </h5>
            <div class="qty d-flex">
                <button type="button" wire:click="incrementQty" class="add btn btn-info me-2"> <i
                        class="fa-solid fa-plus"></i> </button>
                <input type="text" id="qty1" value="{{ $productQty }}"
                    class="form-control text-center fw-bold border border-secondary qty">
                <button type="button" wire:click="decrementQty" class="btn btn-info ms-2"><i
                        class="fa-solid fa-minus"></i></button>
            </div>
        </div>
        <div class="product-details mb-4">
            <h5>Product Details
                <a href="javascript:void()" class="text-primary" data-bs-toggle="popover"
                    data-bs-trigger="focus" data-bs-content="product details is here">
                    <i class="fas fa-info-circle fa-sm" aria-hidden="true"></i>
                </a>
            </h5>
            {!! $product['details'] !!}
        </div>
        <div class="price-details mb-4">
            <h5>Total Price
                <a href="javascript:void()" class="text-primary" data-bs-toggle="popover"
                    data-bs-trigger="focus" data-bs-content="product details is here">
                    <i class="fas fa-info-circle fa-sm" aria-hidden="true"></i>
                </a>
            </h5>
            <div class="price d-flex align-items-center mb-3 flex-wrap">
                <h3 class="fs-1 mb-0 fw-bold">AED {{ number_format($productPrice,2) }} </h3>
                @if($product['discount_percentage'] > 0)
                    <del class="text-primary fs-5 ms-3">AED {{ number_format($product['price'],2) }}</del>
                    <span class="ms-md-4 ms-0 fw-semibold fs-5 text-success">({{ $product['discount_percentage'] }}% OFF)</span>
                @endif
            </div>
        </div>
        <p class="mb-2"><strong>Note:</strong> Next Day Delivery is only available for Dubai and Abu
            Dhabi</p>
        <p class="mb-2"><strong><i class="fa-solid fa-tag fa-lg"></i> Bank Offers:</strong> 0% EMI
            plans. Pay as low as AED 249.50 for 6 months.
            <a href="#" class="text-primary"> <u>Learn More </u> </a>
        </p>
        <div class="shopping-now mobile-sticky my-lg-4 d-flex">
        <h3 class="fs-4 mb-0 fw-bold d-md-none d-inline-block w-100 me-2 align-self-center">AED {{ number_format($productPrice,2) }} </h3>
            <a wire:click="addToCart" class="btn btn-primary w-50 sd-w-100 px-lg-4 px-2 py-3 fw-semibold mb-lg-0 mb-md-3 me-md-3"><i
                    class="fa-solid fa-cart-shopping fa-lg me-2"></i> ADD TO CART</a>
            <livewire:front.wishlist :page="'product_info'" :productId="$product['id']"/>
        </div>
        <div class="shopping-now my-lg-4 d-lg-flex d-md-flex d-block">
            <a href="#" class="btn btn-info px-lg-4 px-2 py-3 w-50 sd-w-100 fw-semibold mb-lg-0 mb-3 me-md-3"><i
                    class="fa-solid fa-phone me-2"></i> CONTACT US</a>
            <a href="#" class="btn btn-success px-lg-4 px-2 py-3 w-50  sd-w-100  fw-semibold mb-lg-0 mb-3 me-md-3"><i
                    class="fa-brands fa-whatsapp fa-lg me-2"></i> WHATSAPP</a>
        </div>

            <!-- <h5 class="mb-3">Services
                <a href="javascript:void()" class="text-primary" data-bs-toggle="popover"
                    data-bs-trigger="focus" data-bs-content="Quntity is here">
                    <i class="fas fa-info-circle fa-sm" aria-hidden="true"></i>
                </a>
            </h5> -->
                <livewire:service-offer />

    </div>
</div>
