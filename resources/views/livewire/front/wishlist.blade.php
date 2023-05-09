@if($page == 'product_list')
<a wire:click="addToWishlist" class="wishlist-icon"><span class="custom-icon custom-wishlistsvg"><span
                        class="path1"></span><span class="path2"></span></span></a>
@else
<a wire:click="addToWishlist" class="btn btn-secondary w-50 sd-w-100  px-lg-4 px-2 py-3 fw-semibold mb-lg-0 mb-3 me-3"><i
                    class="fa-solid fa-heart fa-lg me-2"></i> FAVOURITE</a>
@endif
