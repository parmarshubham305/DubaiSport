<div class="product-slider">
    @foreach($products as $product)
    <div class="card mx-3 position-relative">
        <a href="{{ route('front.products.show', $product['id']) }}" class="product-img"><img src="{{ $product['main_image'] }}" alt="produsct"
                class="card-img-top img-fluid"></a>
        <livewire:front.wishlist :page="'product_list'" :productId="$product['id']"/>
        <div class="card-body bg-light-gray border-top">
            <span class="d-block mb-1">{{ $product['category']['title'] }}</span>
            <p class="fw-semibold mb-1 product-heading"><a href="{{ route('front.products.show', $product['id']) }}">{{ $product['title'] }}</a></p>
            <p class="text-primary fw-bold product-price d-flex align-items-center flex-wrap">AED {{ number_format($product['discounted_price'],2) }}
                <del class="text-secondary ms-1">AED {{ number_format($product['price'],2) }}</del>
                <small class="badge ms-1 bg-primary px-2">{{ $product['discount_percentage'] }}% OFF</small>
            </p>

        </div>
    </div>
    @endforeach
</div>
